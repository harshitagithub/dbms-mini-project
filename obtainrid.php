<?php
session_start();
include"linking.php";
$rid;
error_reporting(0);
if(isset($_POST['submitbtn']))
{
	$cname=$_POST['cname'];
	$sciname=$_POST['sciname'];
	if(!empty($cname) or !empty($sciname))
	{
		$q = "SELECT  `rid` FROM `animalsregister` WHERE cname='$cname' or sciname='$sciname'";
		$r=mysqli_query($conn,$q);
		 $count=mysqli_num_rows($r)	 ;
		 echo $count;
		if($count==1)
		{
		  $row=mysqli_fetch_assoc($r);
		  echo '<h2>Registered ID of the animal is '.$row[rid].'</h2>';
		}
		else
				echo '<h2>Animal info is not present, kindly add it first!!</h2>
						<a href="registeranimal.php">to register the animal</a>';
	}
	
}
?>
<html>
<head>
	<title>Animal Registered ID</title>
	<style>
	input[type=text]
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
	
		<h1>Registered ID</h1>
		<form method="POST"action="obtainrid.php" enctype="multipart/form-data" >
		
		 
		 <input type="text"    name="cname"   placeholder="Common name of the animal" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text"     name="sciname"   placeholder="Scientific name of the animal"/><br><br>
		
		<button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
		
		
		
		
		