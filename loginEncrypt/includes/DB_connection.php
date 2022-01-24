<?php

$connection = mysqli_connect('localhost', 'root', '', 'login_encrypt');


if (!$connection) {
	echo "Connection Failed";
	die("Connection Failed: " . mysqli_connect_error());
}


?>