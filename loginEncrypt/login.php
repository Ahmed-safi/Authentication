<?php

include_once('includes/DB_connection.php');
include_once('includes/appStyle.php');
include_once('includes/appJS.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background: #222D32;">

	<div class="container">

		<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$enc_password = md5($password);

			$query = "select * from users where username = '$username' AND password = '$enc_password'";
			$result = mysqli_query($connection, $query);

			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['is_login'] = true;

				header("Location: http://localhost/loginEncrypt/page_1.php");
			} else {
				echo '<div style=" text-align: center; font-family: cursive;" class=row><div class="col-12"><div class="alert alert-danger">Failed</div></div></div>';
			}
		}


		?>
		<div style="margin: 29%; text-align: center; font-family: cursive;" class="row">
			<div class="col-12">
				<form action="" method="POST">
					<div class="form-group">
						<label  style="color: #6C6C6C;">Username</label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label style="color: #6C6C6C;">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<button class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>