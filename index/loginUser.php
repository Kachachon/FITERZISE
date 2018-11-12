<?php  
session_start();

if (isset($_POST['SubmitLogin'])) 
	{
		include_once 'DBconnect.php';
		$username = $_POST['username'];
		$inputPass = $_POST['password'];

		if (empty($username)|| empty($inputPass))
		{
			header("Location: index_.php?login=empty");
			exit();
		}
		else
		{
			$sql = "SELECT * FROM user WHERE username = '$username' OR email = '$username'" ;
			$result = mysqli_query($conn, $sql);
			$resultCheck= mysqli_num_rows($result);
			if ($resultCheck < 1) 
			{
				header("Location: create.php?login=error_1");
				exit();
			}
			else
			{
				if($row = mysqli_fetch_assoc($result))
				{
				//dehash
					if (password_verify($inputPass,$row['password']))
					{
					header("Location: PopUpLogIn.php?login=$passcheck");
					}
					if (!password_verify($inputPass,$row['password']))
					{
						//login
						$_SESSION['u_ID']=$row['userID'];
						$_SESSION['u_username']=$row['username'];
						$_SESSION['u_firstname']=$row['firstname'];
						$_SESSION['u_lastname']=$row['lastname'];
						$_SESSION['u_sex']=$row['sex'];
						$_SESSION['u_weight']=$row['weight'];
						$_SESSION['u_height']=$row['height'];
						$_SESSION['u_email']=$row['email'];

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


