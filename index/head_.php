<?php  
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FITERZISE</title>
</head>
<header>
	<link href="../bar/cssbar.css" rel="stylesheet" type="text/css">
	<div id="navbar">
  	  <a href="index_.php" id="logo">FITERZISE.</a>
 
            <?php
            //LogIn
              if(isset($_SESSION['u_ID']))
              {
                echo '<div id="navbar-center">
                      <a href="UserProgram.php" class="active">PROGRAMS</a>
                      <a href="about.php">ABOUT US</a>
                     <div id="navbar-right">';
              }
              //NotLogIn
              else
              {
                echo '<div id="navbar-center">
               <a href="ViewCardio.php" class="active">PROGRAMS</a>
               <a href="create.php">CREATE</a>
               <a href="about.php">ABOUT US</a>
               <div id="navbar-right">';     
              }?>

            <?php
              if(isset($_SESSION['u_ID']))
              {
                echo '<form action="LogedIn.php" method="POST">
                      <button href="UserAccount.php" type="submit" name="Account" >Account</button>
                      <button type="submit" name="LogOut">LogOut</button>
                      </form>';
              }
              else
              {
                ?>
              <button type="submit" name="signup" onclick='location.replace("regis.php")'>SIGN UP</button>
              <button onclick="document.getElementById('Login').style.display='block'" class="login">LOG IN</button>
                <?php      
              }?>
    	    </div>
	     </div>
	</div>
</header>