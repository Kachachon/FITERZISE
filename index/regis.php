<?php  
  include_once 'head_.php';
?>
<body>
<style>
	input[type="text"] 
{
    font-size:15px;
}
</style>
<link href="../regis/cssregis.css" rel="stylesheet" type="text/css">


<div>
	<h1>REGISTERATION</h1>
	<div class="left" >
		<form class="SignUp" action="regisUser.php" method="POST">
		FIRSTNAME <input type="text" name="Fname" style=" border-radius: 4px;">
		<br><br><br>
		LASTNAME <input type="text" name="Lname" style=" border-radius: 4px;">
		<br><br><br>
		Email <input type="Email" name="email" style="  border-radius: 4px;">
		<br><br><br>
		WEIGHT <input type="text" name="weight" style="border-radius: 4px;">
		<br><br><br>
		HEIGHT <input type="text" name="height" style="border-radius: 4px;">
		<br><br><br>
		AGE <input type="text" name="age" style="border-radius: 4px;">
		<br><br><br>
		SEX <input type="radio" name="sex" value="male">
				<label>MALE</label> 
		    <input type="radio" name="sex" value="female">
				<label>FEMALE</label>
		<br><br>
		</form>
</div>

	<div class="right">
	<form>
	USERNAME <input type="text" name="username" 
	style="border-radius: 4px;"><br><br><br>
	PASSWORD <input type="password" name="password" 
	style="border-radius: 4px;">
	</form>
</div>

<input type="submit" name="nextPage" class="next"> NEXT>> </input>

<?php  
  include_once 'PopUpLogIn.php';
?>

</body>



</html>
