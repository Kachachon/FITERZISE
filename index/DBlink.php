<?php
$mysqli = new mysqli('localhost','root','','user');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }

	else{
		echo "Connected!";
	}
 ?>
