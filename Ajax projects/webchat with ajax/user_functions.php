<?php

function display_chat($row, $uname){
	$option = ($row['username'] == $uname) ? "self" : "friend";
	echo '<div class= "chat '.$option.'">
			<div class="user-photo"><img src=""></div>
			<p class="chat-message">'.$row['msg'].'</p>
		  </div>';
}

function sanitize($data){
	return mysqli_real_escape_string($data);
}
?>