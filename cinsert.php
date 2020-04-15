<?php
session_start();
include"linking.php";


if(isset($_POST['submitbtn']))
{
	$aid=$_POST['aid'];
	$staffid=$_POST['staffid'];
	$cellid=$_POST['cellid'];
	
	
	if(!empty($aid)and !empty($cellid)and !empty($staffid))
	{
		$q = "insert into `cell` values('$cellid','$aid','$staffid')";
		$r=mysqli_query($conn,$q);
		if($r)
		{
			
			echo "Data stored successfully ";
				
		}
		else
			echo "Data could not be stored ,try again!!";
	
	}
	else
	{
		$_SESSION['message']='all fields are required';
	}
}
?>
<html>
<head>
	<title>Add A CELL</title>
	<style>
	input[type=number]
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
	body{
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
	<div class="a" style="font-size:20px;text-align:center;">
	
		<h1>Add Animal Details</h1>
		<form method="POST"action="cinsert.php" enctype="multipart/form-data" >
		
		 <input type="number"     name="aid"    placeholder="Animal Id" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="number"    name="cellid"   placeholder="Cell id" /><br><br>
		 <input type="number"    name="staffid"   placeholder="Staff id" /><br><br>
		 <button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
		
		
		
		
		