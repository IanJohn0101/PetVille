<?php
session_start();
require_once('connect.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['admin_email'],$_POST['admin_password']) && !empty($_POST['admin_email']) && !empty($_POST['admin_password']))
	{
		$admin_email = trim($_POST['admin_email']);
		$admin_password = trim($_POST['admin_password']);
 
		if(filter_var($admin_email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where admin_email = :admin_email";
			$handle = $pdo->prepare($sql);
			$params = ['admin_email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($admin_password, $getRow['admin_password']))
				{
					unset($getRow['admin_password']);
					$_SESSION = $getRow;
					header('location:adminHome.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}
			
		}
		else
		{
			$errors[] = "Email address is not valid";	
		}
 
	}
	else
	{
		$errors[] = "Email and Password are required";	
	}
 
}
?>
 