<?php
	include 'init.php';
?>


<!DOCTYPE html>
<html>

<head>
	<title>Webchat</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="container">
	<div class="row"><br>
		<div class="col-lg-12">
			<form role="form" class="form-inline" method="post" action="login.php">
				
				<div class="form-group">
					<div><input type="text" name="username" class="form-control" placeholder="Username"></div>
				</div>
				<div class="form-group">
					<div><input type="password" name="password" class="form-control" placeholder="Password"></div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Log in</button>
				</div>
			</form>
			<hr class="m-ym-md">
		</div>
	</div>

	<div class="row r1" style="margin-left: 0px">
		<div class="col-lg-4">
			<h3>Not a member yet? Sign Up!</h3>
			<form role="form" class="form-horizontal" method="post" action="register.php">
				<div class="form-group" >
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="Password" name="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Sign up</button>
				</div>
			</form>
		</div>
	</div>
</div>

</body>

</html>



