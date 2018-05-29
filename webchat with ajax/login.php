<?php
include 'init.php';

$uname = $_POST['username'];
$pass = $_POST['password'];


$res = mysqli_query($conn,"select * from users where username = '$uname' and password ='$pass'");
$rows = mysqli_num_rows($res);
mysqli_free_result($res);
if($rows){
	$_SESSION['name']=$uname;
	header('Location: home.php');
}else{
	header('Location: errors.php')	;
}

?>