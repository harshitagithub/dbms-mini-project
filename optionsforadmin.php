<?php

include"linking.php";
if(isset($_POST['einsert']))
{
	 header('location:einsert.php');
}
if(isset($_POST['edelete']))
{
	 header('location:edelete.php');
}
if(isset($_POST['eviewall']))
{
	 header('location:eviewall.php');
}
if(isset($_POST['dviewall']))
{
	 header('location:dviewall.php');
}
if(isset($_POST['eview']))
{
	 header('location:eview.php');
}
if(isset($_POST['dview']))
{
	 header('location:dview.php');
}
if(isset($_POST['dinsert']))
{
	 header('location:dinsert.php');
}
if(isset($_POST['ddelete']))
{
	 header('location:ddelete.php');
}


?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>ADMIN</title>
		<style>
		body
		{
			background-color:#f2f2f2;<!--#E3FBF8-->
		}
		button 
		{
			background-color:#ccccff;
			border-radius:12px;
			border:2px solid #555555;
			text-align:center;
			
		}
		div.background-color
		{
			align:center;
		}
		</style>
</head>
	<body>
	<br><br>
	<div class="b" style="text-align:center;">	
	<form method="post">
	<H1>EMPLOYEE</H1>
	<button type ="submit" name="einsert" style="padding:8px 15px;font-size:20px;border-radius:12px;" >ADD AN EMPLOYEE</button><br><br>
	<button type ="submit" name="edelete" style="padding:8px 15px;font-size:20px;border-radius:12px;" >DELETE AN EMPLOYEE</button><br><br>
	<button type ="submit" name="eview" style="padding:8px 15px;font-size:20px;border-radius:12px;" >VIEW EMPLOYEE DETAILS</button><br><br>			
	<button type ="submit" name="eviewall" style="padding:8px 15px;font-size:20px;border-radius:12px;" >VIEW ALL EMPLOYEES DETAILS</button><br><br>
	<H1>DONOR</H1>
	<button type ="submit" name="dinsert" style="padding:8px 15px;font-size:20px;border-radius:12px;" >ADD A DONOR</button><br><br>
	<button type ="submit" name="ddelete" style="padding:8px 15px;font-size:20px;border-radius:12px;" >DELETE ANDONOR</button><br><br>
	<button type ="submit" name="dview" style="padding:8px 15px;font-size:20px;border-radius:12px;" >VIEW DONOR DETAILS</button><br><br>			
	<button type ="submit" name="dviewall" style="padding:8px 15px;font-size:20px;border-radius:12px;" >VIEW ALL DONOR DETAILS</button><br><br>
	</form>
	</div>
	</body>	
</html>