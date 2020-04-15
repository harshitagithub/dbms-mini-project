<?php
session_start();
include"linking.php";


if(isset($_POST['submitbtn']))
{
	$rid=$_POST['rid'];
	//$foodtiming=$_POST['foodtiming'];
	$cellid=$_POST['cellid'];
	$gender=$_POST['gender'];
	$bod=$_POST['bod'];
	
	if(!empty($rid)and !empty($cellid)and !empty($gender)and !empty($bod))
	{
		$q = "insert into `animal` values('$rid','$cellid','$gender','$bod','')";
		$r=mysqli_query($conn,$q);
		if($r)
		{
			$last_id=mysqli_insert_id($conn);
			echo "Data stored successfully and animal id generated is :".$last_id;
				
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
	<title>Add An Animal</title>
	<style>
	input[type=text],input[type=number],input[type=time]
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
		<form method="POST"action="ainsert.php" enctype="multipart/form-data" >
		
		 <input type="number"     name="rid"    placeholder="Registered Id" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text"    name="cellid"   placeholder="cell id" /><br><br>
		 <a href="obtainrid.php" style="text-align:left;">To obtain Registered id of the animal click here</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text"     name="gender"   placeholder="Gender"/><br><br>
	B.O.D 	<input type="date" name="bod" placeholder="bod" style="width:20%;
															padding:8px 20px;
															display:inline-block;
															border-radius:4px;
															border:1px solid #ccc;
															box-sizing:border-box;"  /><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
		
		
		
		
		