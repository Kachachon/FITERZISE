<?php  

session_start();

if (isset($_POST['SubmitLogin'])) 
	{
		include_once 'DBconnect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)|| empty($password))
		{
			header("Location: index_.php?login=empty");
			exit();
		}
		else
		{
			$sql = "SELECT * FROM user WHERE username = '$username' OR 
			email = '$username'" ;
			$result = mysqli_query($conn, $sql);
			$resultCheck= mysqli_num_rows($result);
			if ($resultCheck < 1) 
			{
				header("Location: index_.php?login=error");
				exit();
			}
			else
			{
				if($row = mysqli_fetch_assoc($result))
				{
				//dehash
					$hashpasscheck = password_verify($password,$row['password']);
					if ($hashpasscheck == false) 
					{
						header("Location: index_.php?login=error");
					}
					elseif ($hashpasscheck == true) 
					{
						//login
						$_SESSION['u_ID']=$row['userID'];
						$_SESSION['u_firstname']=$row['firstname'];
						$_SESSION['u_lastname']=$row['lastname'];
						$_SESSION['u_email']=$row['email'];
						$_SESSION['u_weight']=$row['weight'];
						$_SESSION['u_height']=$row['height'];
						$_SESSION['u_sex']=$row['sex'];
						$_SESSION['u_age']=$row['age'];
						$_SESSION['u_username']=$row['username'];
						header("Location: index_.php?login=success");
						exit();
					}
				}
			}
		}
	}
else
	{
		header("Location: index_.php?login=error");
		exit();
	}


