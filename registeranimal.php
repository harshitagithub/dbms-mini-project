<?php
session_start();
include"linking.php";
if(isset($_POST['submitbtn']))
{
	$cname=$_POST['cname'];
	$sciname=$_POST['sciname'];
	$avglifespan=$_POST['avglifespan'];
	
	$image=$_FILES['image']['name'];
	
	{
	if(!empty($cname)and !empty($sciname)and !empty($avglifespan))
	{
		
				move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
				$imagepath="uploads/".$image;
				//$q = "insert into `registeranimal` values('$n','$p','$e','$g','$j','$s','$a','$sal','$ad','$jdate','$imagepath','')";
				
				//$r=mysqli_query('CALL registeranimal($cname,$sciname,$avglifespan,$imagepath)');
				$call=mysqli_prepare($conn,'CALL registeranimal(?,?,?,?)');
				mysqli_stmt_bind_param($call,'ssis',$cname,$sciname,$avglifespan,$imagepath);
				$r=mysqli_stmt_execute($call);
				if($r)
				{
					
					
					header('location:obtainrid.php');
					
					
				}
				else
					echo "Data could not be stored ,try again!!";
			
		
	}
	else
	{
		$_SESSION['message']='all fields are required';
	}
	}
	//else 
		//echo "plz upload image";
	
}


?>


<html>
<head>
	<title>Register Animal</title>
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
		border-radius:5px;
		padding:20px;
	}
	
	
	
		
	
	</style>
</head>
	<body>
	
	<div class="a" style="font-size:20px;
		text-align:center;">
		<h1>Register Animal</h1>
		<form method="POST"action="registeranimal.php" enctype="multipart/form-data" >
		
		 <input type="text"     name="cname"    placeholder="Common Name" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text"   name="sciname"   placeholder="Scientific Name" /><br><br>
		 <input type="number"    name="avglifespan"   placeholder="Average Life Span" /><br><br>
		 
		Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"   ><br><br>
		
		<button type ="submit" name="submitbtn" style="padding:10px 8px;font-size:25px;">submit</button>
		
		
		</form>
		</div>
		</body>
</html>		
		<!--$sql = "CREATE PROCEDURE `registeranimal`(IN `c` VARCHAR(30), IN `sci` VARCHAR(50), IN `avg` INT, IN `img` VARCHAR(100)) NOT DETERMINISTIC MODIFIES SQL DATA SQL SECURITY DEFINER insert INTO animalsregister VALUES(\'c\',\'sci\',avg,\'img\',\'\')";
		
		
		
		