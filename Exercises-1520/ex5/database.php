<?php
session_start();
$db = new mysqli('localhost','ContactDB','password','peopleDB');

if($db->connect_errno > 0) {
  die('Unable to connect to database [' . $db->connect_error . ']');
}

$formFName = $_POST["Fname"];
$_SESSION["fName"] = $formFName;
$formLName = $_POST["Lname"];
$_SESSION["lName"] = $formLName;

$searchFName = "Fname" . ":" . $formFName;
$searchLName = "Lname" . ":" . $formLName;

$fNameExist = false;
$lNameExist = false;

$createTable = $db->query("CREATE TABLE people (
  people_id int(10) not null auto_increment,
  Fname TEXT not null,
  Lname TEXT not null,
  PRIMARY KEY( people_id ))");
header('Location: submit.php');




