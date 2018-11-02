
<footer>
	<link href="../bar/cssbar.css" rel="stylesheet" type="text/css">
	<div id="navbar">
  	  <a href="index_.php" id="logo">FITERZISE.</a>
  	  <div id="navbar-center">
      	<a href="#program" class="active">PROGRAMS</a>
      	<a href="#create">CREATE</a>
      	<a href="#about">ABOUT US</a>
          <div id="navbar-right">
            <?php
              if(isset($_SESSION['u_ID']))
              {
                echo '<form action="logoutUser.php" method="POST">
                     <button type="submit" name="accpunt">Account</button>
                      <button type="submit" name="submit">LogOut</button>
                      </form>';
              }
              else{
                ?>
              <button type="submit" name="signup" onclick='location.replace("regis.php")'>SIGN UP</button>
              <button onclick="document.getElementById('Login').style.display='block'" class="login">LOG IN</button>
                <?php      }
            ?>
    	    </div>
	     </div>
	</div>
</footer>
</html>