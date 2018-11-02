<?php  
  include_once 'head_.php';
?>
<body>
<link href="../regis/cssregis.css" rel="stylesheet" type="text/css">

<div>
<h1>REGISERATION</h1>
<form class="SignUp" action="regisUser.php" method="POST">
<div class="left" >
FIRSTNAME <input type="text" name="Fname" style="border-radius: 4px;"><br><br>
LASTNAME <input type="text" name="Lname" style="border-radius: 4px;"><br><br>
E-MAIL <input type="email" name="email" style="border-radius: 4px;"><br><br>
WEIGHT <input type="text" name="weight" style="border-radius: 4px;"><br><br>
HEIGHT <input type="text" name="height" style="border-radius: 4px;"><br><br>
AGE <input type="text" name="age" style="border-radius: 4px;"><br><br><br>
</div>
<div class="right">
	USER ID <input type="text" name="username" style="border-radius: 4px;">
	<br><br><br>
	PASSWORD <input type="password" name="password" style="border-radius: 4px;">
	<br><br><br>
	SEX <input type="radio" name="sex" value="male"><label>MALE</label> 
		<input type="radio" name="sex" value="female"><label>FEMALE</label>
	</div>
<input type="submit" name="nextPage" class="next" value="NEXT>>" 
	style="	
	font-size: 25px;
	margin-top: 320px;
	margin-left: 380px;
	background-color:#4834d4;
	color:white;
	padding:25px;
	border-radius: 8px;
	font-weight: bold;
	border: none;
  	cursor: pointer;"> 	
 </input>
<br><br><br>

</form>

</div>

<?php  
  include_once 'PopUpLogIn.php';
?>

</body>



</html>
