<?php

$filehandle = fopen("http://clients1.google.com/complete/search?hl=en&output=xml&q=" . $_GET['qu'], 'r');
while (!feof($filehandle)){
	$download = fgets($filehandle);
	echo $download;
}
fclose($filehandle); 

?>