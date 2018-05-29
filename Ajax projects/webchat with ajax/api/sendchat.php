<?php
include '../init.php';

$msg = sanitize($_POST['msg']);
$uname = $_POST['uname'];

$sql = "INSERT INTO posts(msg,username) VALUES('$msg','$uname')";
$res = $conn->query($sql);


?>