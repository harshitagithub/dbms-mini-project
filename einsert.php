<?php
session_start();
include"linking.php";
if(isset($_POST['submitbtn']))
{
	$n=$_POST['name'];
	$p=$_POST['phone'];
	$e=$_POST['email'];
	$g=$_POST['gender'];
	$j=$_POST['job'];
	$s=$_POST['shift'];
	$a=$_POST['age'];
	$sal=$_POST['salary'];
	$ad=$_POST['address'];		
	$jdate=$_POST['jdate'];
	$image=$_FILES['image']['name'];
	if(!empty($n)and !empty($e)and !empty($p)and !empty($g)and !empty($j)and !empty($s)and !empty($a)and !empty($sal)and !empty($ad)and !empty($jdate))
	{
		if(mb_strlen($p)<=10)
		{
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
			$imagepath="uploads/".$image;
			$q = "insert into `staff` values('$n','$p','$e','$g','$j','$s','$a','$sal','$ad','$jdate','$imagepath','')";
			$r=mysqli_query($conn,$q);
			
			if($r)
			{
				$last_id=mysqli_insert_id($conn);
				echo "Data stored successfully and emp id generated is :".$last_id;
				$q="select image from staff where id=$last_id";
			}
			else
				echo "Data could not be stored ,try again!!";
			
		}
		else
			echo "phone number should be of 10 digits";
	}
	else
	{
		$_SESSION['message']='all fields are required';
	}
}
?>


<html>
<head>
	<title>Add an employee</title>
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
		border-radius:5px;<!--just adds border to the background-->
		padding:20px;
	}
	</style>
</head>
	<body>
	<div class="a" style="font-size:20px;text-align:center;">
		<h1>Add employee details</h1>
		<form method="POST"action="einsert.php" enctype="multipart/form-data" >
		
		 <input type="text"     name="name"    placeholder="Name" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="number"   name="phone"   placeholder="Phone" /><br><br>
		 <input type="email"    name="email"   placeholder="Email" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text"     name="gender"   placeholder="Gender"/><br><br>
		
		 <input type="text"     name="job"      placeholder="Job" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		 <input type="text"     name="shift"   placeholder="Shift"/><br><br>
		 <input type="number"   name="age"     placeholder="Age"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		 <input type="number"   name="salary"  placeholder="Salary" /><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea  name="address" placeholder="Address"  style="width:20%;
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
		Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"   ><br><br>
		<button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		</form>
	</div>
	</body>
</html>		
		
		
		
		
		