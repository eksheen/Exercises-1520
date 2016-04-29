  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Evan Sheen" content="">
    <title>Ex5</title>
    <link href="ex5.css" rel="stylesheet">
  </head>

  <div class="body" align="center">
    <p>Please submit your name:</p>
    <form action="database.php" method="post" class="form">
      <input type="text" name="Fname" id="FNameForm" placeholder="First Name"/><br>
      <input type="text" name="Lname" id="LNameForm" placeholder="Last Name"/><br>
      <input type="submit" id="formSubmit">
    </form>
  </div>

  <?php
  session_start();

  $db = new mysqli('localhost','ContactDB','password','peopleDB');

  if($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
  } 
  $formFName = $_SESSION['fName'];
  $formLName = $_SESSION["lName"];
  $searchFName = "Fname" . ":" . $formFName;
  $searchLName = "Lname" . ":" . $formLName;

  $fNameExist = false;
  $lNameExist = false;

  $query = "SELECT * from people";
  $result = $db->query($query);
  $rows = $result->num_rows;
  for ($i = 0; $i < $rows; $i++):
   $row = $result->fetch_array();
 foreach ($row as $key=>$val):
  $compareName = $key . ":" . $val;
if(strcmp($searchFName,$compareName) == 0) {
  $fNameExist = true;
}
if(strcmp($searchLName,$compareName) == 0) {
  $lNameExist = true;
}
endforeach;
endfor;

if($lNameExist == true && $fNameExist == true) {
 echo "<p class='submitName' align='center'> You already entered this name. <p/>";
}

if($lNameExist == false || $fNameExist == false) {
  $query = "INSERT INTO people (Fname, Lname) VALUES ('$formFName', '$formLName')";
  $db->query($query) or die ("Invalid insert " . $db->error);
}


echo "<h1>Here is a list of submitted names:</h1>";
$query = "SELECT * from people";
$result = $db->query($query);
$rows = $result->num_rows;
for ($i = 0; $i < $rows; $i++):
 $row = $result->fetch_array();
foreach ($row as $key=>$val):
  if($key == 1) {
    echo $val . " ";

  }
  if($key == 2) {
    echo $val;
  }
  endforeach;
  echo "<br/>";
  endfor;
  ?>