<?php 
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$writeToFile = $username . ":" . $password;
echo $writeToFile;

$searchName = rtrim($writeToFile);
$handle = fopen('users.txt', 'a+');
$valid = false;
	while (($buffer = fgets($handle)) !== false) {
		if (strpos($buffer, $searchName) !== false) {
			$valid = TRUE;
			$_SESSION["username"] = $username;
			$_SESSION["success"] = "Congratulations! You have successfully logged in.";
			header('Location: home.php');
		}
	}	
if($valid === false) {
		$_SESSION["error"] = "Your id or password is incorrect. Please try again";
}
fclose($handle);

header('Location: login.php');

?>