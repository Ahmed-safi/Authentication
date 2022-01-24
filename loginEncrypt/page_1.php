<?php
include_once('includes/appStyle.php');
include_once('includes/appJS.php');

session_start();

if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {

} else {
	header("Location: http://localhost/loginEncrypt/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center; margin-top: 20%;">Welcome ❤</h1>
	<button type="button" class="btn btn-danger btn-lg btn-block"><a href="logout.php">Logout</a></button>
</body>
</html>