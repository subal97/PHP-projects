<?php
$conn = mysqli_connect('localhost','root','','test');


if(isset($_POST['query'])){
	$output = '<ul class="list-group">';
	$sql = "SELECT * FROM `car database` WHERE `Full name` LIKE '%" . $_POST['query']. "%'";
	$res = $conn->query($sql);
	if($res->num_rows > 0){
		while ($row = $res->fetch_assoc()) {
			$output .= '<li class="list-group-item">'.$row['Full name'].'</li>';
		}
	}else{
		$output .= '<li>Car not found</li>';
	}
	$output .= '</ul>';
	echo $output;
}
?>