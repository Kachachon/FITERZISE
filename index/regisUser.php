<?php  

if (isset($_POST['nextPage'])) 
	{
		include_once 'DBconnect.php';

		$firstname = $_POST['Fname'];
		$lastname = $_POST['Lname'];
		$email = $_POST['email'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($firstname) || empty($lastname)|| empty($email)|| 
			empty($weight)|| empty($height)|| empty($age)|| 
			empty($sex)|| empty($username)|| empty($password))
		{
			header("Location: regis.php?regis=empty");
		}
		else
		{
			$sql = "SELECT * FROM user WHERE userID = '$username'";
			$result = mysqli_query($conn, $sql);
			$resultCheck= mysqli_num_rows($result);
			if (! $resultCheck > 0) {
				$hashPass = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO user (firstname,lastname,email,weight,height,age,sex,username,password) 
				VALUES ('$firstname','$lastname','$email','$weight','$height',
				'$age','$sex','$username','$hashPass');";
				mysqli_query($conn, $sql);
				header("Location: regis.php?regis=success");
			}
		}
	}
else
	{
		header("Location: regis.php");
		exit();
	}


