<?php
session_start();
include"linking.php";//warning
//require"linking.php";//fatal error
//include_once or require_once"linking.php";//for including file only once
if(isset($_POST['submitbtn']))
{
	$uname=$_POST['username'];
	$pass1=$_POST['pass'];
	if((!empty($uname)and !empty($pass1)))
	{
		$q="SELECT * FROM admin WHERE un='$uname' and p='$pass1'";
		$r=(mysqli_query($conn,$q));
		$count=mysqli_num_rows($r)	 ;
		if($count==1)
		{
			if($uname=='harshita')
				header('location:optionsforadmin.php');
			if($uname=='staff')
				header('location:optionsforstaff.php');
		}
		else
				echo "wrong password or username ";
	}	
}
?>


<html>
	<head>
		<title>Sign In</title>
		<style>
		body
		{
			background-color:#f2f2f2;
		}
		input[type=text],input[type=password]
		{
			width:20%;
			padding:12px 20px;
			display:inline-block;
			border-radius:4px;
			border:1px solid #ccc;
			box-sizing:border-box;
		}
		div
		{
			background-color:#f2f2f2;
			background-border:0px;
			padding:20px;
		}
		button
		{
			background-color:#3097bf;
			color:white;
			width:15%;
			padding:10px 15px;
			display:inline-block;
			border-radius:4px;
			border:1px solid #ccc;
			box-sizing:border-box;
		}
		</style>
	</head>
	<body>
		<div class="a" style="font-size:20px;text-align:center;">
			<form method="post">
			<input type="text" name="username" placeholder="Username" /><br><br><br>
			<input type="password" name="pass" placeholder="Password"/><br><br><br>
			<div class="sub">
			<button type ="submit" name="submitbtn" style="padding:8px 15px;font-size:25px;">submit</button>
			</div>
			</div>
			</form>
	</body>
</html>		
		
		