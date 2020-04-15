<html>
<head>
<title>View employees details</title>
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
		<th>Cell Id</th>
		<th>Animal Id</th>
		<th>Staff Id</th>
		</tr>
<?php
session_start();
include"linking.php";
{
	$q="SELECT * FROM cell";
	$r=(mysqli_query($conn,$q));
	if(mysqli_num_rows($r)>0)
	{
		while($row=mysqli_fetch_assoc($r))
	    {
			echo "<tr>
			<td>".$row['cellid']."</td>
			<td>". $row['aid']."</td>
			<td>". $row['staffid']."</td>";		
				
				
			}
			echo "</table>";
		}
		else
			echo "no records";
}
?>
</body>
</html>

		
		