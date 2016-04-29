<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fourth PHP Example</title>
	    <link href="ex4.css" rel="stylesheet">
</head>
<div class="body">
	<?php 
	if(isset($_SESSION['error'])) {
		echo $_SESSION['error'];
		session_unset();
	}
	?>
		<h1 class="header" align="center">Please login</h1>
    <form action="process.php" method="post" class="loginform" align="center">
      <input type="text" name="username" id="usernameForm" placeholder="username"/><br>
      <input type="password" name="password" id="passwordForm" placeholder="password"/><br>
      <input type="submit" id="formSubmit">
    </form>
</body>
</div>
</html>

