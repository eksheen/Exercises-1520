<!DOCTYPE html>
<html>
 <head>
  <title>PHP exmaple 2</title>
 </head>
 <body>
  <?php
	    include 'ex2.php';
      //3 vars echo out typ
  	  // pass array to the function
  	  //loop through array
  	  //print the array as an unordered list in html
  	  //set a cookie


  	  

      function loopArr($array){
      	  foreach ($array as $val) {
      	  	echo "<li> $val </li>";
      	  }
      }
 

       if($_SERVER['SERVER_PORT'] == 80)
       {
          loopArr($arr); 
       }
       else
       {
          echo "Port is not 80!";
       }

       
?>
</body>
</html>