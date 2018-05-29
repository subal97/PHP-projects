<?php include 'init.php' ?>

<?php 
if(!isset($_SESSION['name'])){
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
	<script src="../Bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>

	<div class="chatbox">
		<div class="chat-header">
			<h3><?php echo $_SESSION['name'] ?> -Online</h3>
			<hr class="m-ym-md" style="margin:0 0;">
		</div>
		<div class="chatlog">
			
		</div>

		<div class="chat-form">
			<textarea placeholder="Type messages here..." name="msg" id="msgbox"></textarea>
			<button class="btn-lg btn-success" id="sendButton" onclick="sendmsg(<?php echo "'".$_SESSION['name']."'" ?>)">Send</button>
		</div>
		<div class="logout-btn">
			<a href="logout.php"><button class="btn btn-primary">Log out</button></a>
		</div>
	</div>


<script src="js/script.js"></script>
</body>
</html>