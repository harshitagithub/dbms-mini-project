<?php
session_start();
include"linking.php";

if(isset($_POST['submitbtn']))
{
	//$name=$_POST['name'];
	$staffid=$_POST['staffid'];	
	$cellid=$_POST['cellid'];
	if( !empty($staffid)and !empty($cellid))
	{
		$q="update cell set staffid=$staffid   where cellid=$cellid ";
		$up=mysqli_query($conn,$q);
	}
	if($up)
		echo "Data updated";
	else
		echo "Data could not be updated ,try again!!";
}

?>



<!DOCTYPE HTML>
<html>
<head>
	<title>Update staff id for a cell</title>
	<style>
	input[type=number],button
	
	{
		
		width:20%;
		padding:12px 20px;
		display:inline-block;
		border-radius:4px;
		border:1px solid #ccc;
		box-sizing:border-box;
		
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
	body
	{
		background-color:#f2f2f2;
	}
	div
	{
		border-radius:5px;
		
		padding:20px;
	}
	</style>
</head>
	<body>
	
	<div class="a" style="font-size:20px;
		text-align:center;">
		<h1>Update Staff Id For A Cell</h1>
		<form method="POST"action="cupdate.php" >
		
		 <input type="number"   name="cellid"   placeholder="Cell id" /><br><br><br> 
		 <input type="number"   name="staffid"   placeholder="Staff id" /><br><br><br>
		 <button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
	