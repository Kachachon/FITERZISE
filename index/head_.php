<?php  
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FITERZISE</title>
</head>
<header>
	<link href="bar.css" rel="stylesheet" type="text/css">
	<div id="navbar">
  	<a href="#default" id="logo">FITERZISE</a>
  	 <div id="navbar-center">
    	<a href="#program" class="active">PROGRAMS</a>
    	<a href="#create">CREATE</a>
    	<a href="#about">ABOUT US</a>
        <div id="navbar-right">
          <?php
            if(isset($_SESSION['u_ID']))
            {
              echo '     
              <form action="logoutUser.php" method="POST">
              <button type="submit" name="submit">LogOut</button>
              </form>';
            }
          ?>


        	<button type="submit" name="signup" onclick='location.replace("regis.php")'>SIGN UP</button>
        	<button onclick="document.getElementById('Login').style.display='block'" class="login">LOG IN</button>
  	   </div>
	</div>
	</div>
</header>