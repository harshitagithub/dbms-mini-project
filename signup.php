<?php
session_start();
include"linking.php";//warning
//require"db.php";//fatal error
//include_once or require_once"db.php";//for including file only once
if(isset($_POST['submitbtn']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	if(!empty($name)and !empty($email)and !empty($username)and !empty($pass)and !empty($conpass))
	{
		if(mb_strlen($phone)<=10)
		{
			if($pass==$conpass)
			{
				$pass=md5($pass);
				$query="insert into register values('$name','$email','$username','$pass','$phone','$address')";
				mysqli_query($conn,$query);
			}
			else
				$_SESSION['message']='password does not match';
		}
	}
	else
	{
		$_SESSION['message']='all fields are required';
	}
	
}

?>


<html>
<head>
	<title>Sign up</title>
	<style>
	input[type=text],input[type=email],input[type=password],input[type=number]
	
	{
		
		width:20%;
		padding:12px 20px;
		display:inline-block;
		border-radius:4px;
		border:1px solid #ccc;
		box-sizing:border-box;
		
	}
	input[type=submit]
	{
		width:25%;
		background-color:#4caf50;
		color:white;
		padding: 20px;
	
		
		border-radius:4px;
		cursor:pointer;
	}
	div
	{
		border-radius:5px;
		background-color:#f2f2f2;
		padding:20px;
	}
	
	
		
	
	</style>
</head>
	<body>
	<div class="a" style="font-size:20px;
		text-align:center;">
		<form method="POST"action="register.php">
		
		 <input type="text" name="name" placeholder="Name" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="number" name="phone" placeholder="Phone" /><br><br>
		 <input type="email" name="email" placeholder="Email" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="gender" placeholder="Gender"/><br><br>
		
		 <input type="text" name="job" placeholder="Job" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		 <input type="text" name="shift" placeholder="Shift"/><br><br>
		 <input type="number" name="age" placeholder="Age"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		 <input type="number" name="salary" placeholder="Salary" /><br><br>
		 <textarea name="address" placeholder="Address"  style="width:20%;
																padding:12px 20px;
																display:inline-block;
																border-radius:4px;
																border:1px solid #ccc;
																box-sizing:border-box;" ></textarea> <br><br>
	Joining date 	<input type="date" name="jdate"  style="width:20%;
															padding:8px 20px;
															display:inline-block;
															border-radius:4px;
															border:1px solid #ccc;
															box-sizing:border-box;"  /><br><br>
		
		
		
		
		
		Picture<br><br>
		
	<!--	password <br> <input type="password" name="pass" /><br>
		confirm password <br><input type="password" name="conpass" /><br>
		-->
		<button type ="submit" name="submitbtn" style="padding:15px 10px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
		
		
		
		
		