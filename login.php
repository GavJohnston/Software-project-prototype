<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: register.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($conn, trim($_POST['email']));
	$password = mysqli_real_escape_string($conn, trim($_POST['password']));
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location:/ADDED/web/index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<script type="text/javascript" src="validar.js"></script>
</head>
<body>
<div>
	<img src="smrt security.png" alt="smrt security" title="smrt security" width="515">
	<form action="" method="post">
		<h2>Login</h2>
		<input type="text" id="email" placeholder="&#128104; email" name="email" required>
		<input type="password" id="password" placeholder="&#128273; Password" name="password" required>
		<input type="submit" name="login" value="Login" class="btn btn-primary" />
		<a href="register.php">Not Registered yet?</a>
	</form>
	</div>
</body>
</html>