<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fourth PHP Example</title>
	<link href="ex4.css" rel="stylesheet">
</head>
<div class="body">
	<?php 
	if(isset($_SESSION['success'])) {
		echo $_SESSION['success'];
		echo " Welcome " . $_SESSION['username'];
	}
	else {
		$_SESSION['error'] = "You have not logged in please login";
		header('Location: login.php');
	}
	?>
</body>
</div>
</html>

