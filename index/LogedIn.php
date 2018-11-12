<?php  
 if (isset($_POST['LogOut']) )
 {
 	session_start();
 	session_unset();
 	session_destroy();
 	header("Location: index_.php?logOut=success");
 	exit();
 }
 if (isset($_POST['Account']))
 {
 	header("Location: UserAccount.php?UserAccount");
 	exit();
 }

