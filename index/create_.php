<?php  
  include_once 'head_.php';
?>

<body>

    <link href="../create/csscreate.css" rel="stylesheet" type="text/css">

<h1>LOG IN</h1>

<div class="myform" >
<form action="loginUser.php" method="POST">
<input type="text" placeholder="Enter Username" name="username" required><br><br>
<input type="password" placeholder="Enter Password" name="password" required>
<button type="submit" name="SubmitLogin" id="go" method="POST")'>LOG IN</button>
</form>

<p style="margin-left: 60px; font-size: 30px;">- or -</p>


<button type="submit" name="re" id="re" onclick='location.replace("regis.php")'>SIGN UP</button>

<?php  
  include_once 'PopUpLogIn.php';
?>

</body>
</html>