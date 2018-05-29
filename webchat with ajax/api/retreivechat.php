<?php 
include '../init.php';

$uname = $_SESSION['name'];
$res = $conn->query("select * from posts");
if($res->num_rows > 0){
	while($row = $res->fetch_assoc()){
		display_chat($row,$uname);
	}
}else{
	$conn->close();
	echo "No chats yet! Maybe u can start :) ";
}

?>