<?php
session_start();
include"linking.php";

if(isset($_POST['submitbtn']))
{
	//$name=$_POST['name'];
	$id=$_POST['id'];
	if( !empty($id))
	{
		$q="delete from donor where id=$id";
		$del=mysqli_query($conn,$q);
	}
	if($del)
		echo "Data deleted";
	else
		echo "Data could not be deleted ,try again!!";
}

?>



<!DOCTYPE HTML>
<html>
<head>
	<title>Delete a donor detail</title>
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
		<h1>Delete donor details</h1>
		<form method="POST" action="ddelete.php" >
		
		 <input type="number"   name="id"   placeholder="donor id" /><br><br><br>
		 <button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
	