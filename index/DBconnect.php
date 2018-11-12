<?php  
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "FITERZISE";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,
	$dbName);
if($conn-> connect_errno){
	echo $mysqli-> connect_errno.":".$mysqli-> connect_error;
}
?>


