<html>
<head>
<title>View Animal Details</title>
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
	<table cellpadding='8px' cellspacing='3px'>
		<tr>
		<th>Animal Id</th>
		<th>Common Name</th>
		<th>Scientific Name</th>
		<th>Gender</th>
		<th>Cell id</th>
		<th>Birth-date</th>
		<th>Avg life-span</th>
		<th>Photo</th>
		</tr>
<?php
session_start();
include"linking.php";
{
	$q="SELECT * FROM animal a,animalsregister ar where a.rid=ar.rid";
	$r=(mysqli_query($conn,$q));
	if(mysqli_num_rows($r)>0)
	{
		while($row=mysqli_fetch_assoc($r))
	    {
			echo "<tr>
			<td>".$row['aid']."</td>
			<td>". $row['cname']."</td>
			<td>". $row['sciname']."</td>
			<td>". $row['gender']."</td>
			<td>". $row['cellid']."</td>
			<td>". $row['bod']."</td>
			<td>". $row['avglifespan']."</td>
			<td><img src='".$row['imagepath']."'></td>"
			;		
				
				
			}
			echo "</table>";
		}
		else
			echo "no records";
}
?>
</body>
</html>

		
		