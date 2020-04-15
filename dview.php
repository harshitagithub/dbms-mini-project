<html>
<head>
<title>View Donor Details</title>
<style>
body
{
	margin:0 ;
}
img
{
	width:130px;
	height:150px;
}
input[type=text],input[type=number]
	
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
table 
{
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
}
th 
{
	text-align:center;
    background-color: #588c7e;
    color: white;
}
tr:nth-child(even) 
{
	background-color: #f2f2f2;
	
}

div
{
	font-family:serif;
	font-size:40px;
	text-align:center;
	text-decoration-style:solid;
	text-decoration-line:underline;
	
}
</style>	
</head>
<body>
<div class="a" style="font-size:20px;
		text-align:center;">
<form method="post">
        <input type="text" name="name" placeholder="DONOR Name" /><br><br><br>
		<input type="number" name="id" placeholder="DONOR Id" /><br><br><br>
		<div class="sub">
		<button type ="submit" name="submitbtn" style="padding:8px 15px;font-size:25px;">submit</button>
		</div>
		
</form>
</div>
	<table cellpadding='8px' cellspacing='3px'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Profession</th>
		<th>Donation</th>
		<th>Age</th>
		<th>Address</th>
		<th>Photo</th>
		</tr>
<?php
session_start();
include"linking.php";
{
	if(isset($_POST['submitbtn']))
{
	$name=$_POST['name'];
	$id=$_POST['id'];
	if((!empty($name) or !empty($id)))
	{
	
	$sql = "SELECT * FROM `donor` WHERE  id=$id or name='$name'";
	$r=(mysqli_query($conn,$sql));
	
	if(mysqli_num_rows($r)>0)
	{
		while($row=mysqli_fetch_assoc($r))
	    {
			echo "<tr><td>".$row['id']."</td><td>". $row['name']."</td><td>". $row['phone'].
			"</td><td>". $row['email']."</td><td>". $row['gender']."</td><td>". $row['profession'].
			"</td><td>". $row['donation']."</td><td>". $row['age'].
			"</td><td>". $row['address']."</td><td><img src='".$row['photo']."'></td>"
			;			
		}
		echo "</table>";
	}
	else
		echo "no records";
	}
}	
}
?>
</body>
</html>