<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="Evan Sheen" content="">
  <title>Ex6</title>
  <link href="ex6.css" rel="stylesheet">
</head>

<div class="body" align="center">
  <p>Please enter a course:</p>
  <form action="ex6.php" onsubmit="verify()" method="get" class="form">
    <input type="text" name="course" id="courseName" placeholder="Course"/><br>
    <input type="submit" id="formSubmit">
  </form>
</div>

<script type="text/javascript">
function verify() {
  var course = document.getElementById("courseName").value;
  var cbool = false;
  var sbool = false;
  var xbool = false;
  var y1bool = false;
  var y2bool = false;
  var y3bool = false;
  if(course.length === 6) {
    if((course.substring(0,1) === ('C')) || (course.substring(0,1) === ('c'))) {
      cbool = true;
    } 
    if((course.substring(1,2) === ('S')) || (course.substring(1,2) === ('s'))) {
      sbool = true;
    }
    if((course.substring(2,3) >= 0)  && (course.substring(2,3) <= 3)) {
      xbool = true;
    }
    if((course.substring(3,4) >= 0)  && (course.substring(3,4) <= 9)) {
      y1bool = true;
    }
    if((course.substring(4,5) >= 0)  && (course.substring(4,5) <= 9)) {
      y2bool = true;
    }
    if((course.substring(5,6) >= 0 ) && (course.substring(5,6) <= 9)) {
      y3bool = true;
    }     
  } 
  if((cbool && sbool && xbool && y1bool && y2bool && y3bool) == true) {
    window.alert("Course valid");
  } else {
    window.alert("Course invalid");
  }
}

</script>