<?php
include 'init.php';

$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$sql = "insert into users (username,password,email) values ('$uname','$pass','$email')";
$res = $conn -> query($sql);

header('Location: index.php')


?>