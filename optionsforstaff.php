<?php

include"linking.php";

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
if(isset($_POST['ainsert']))
{
	 header('location:ainsert.php');
}
if(isset($_POST['raview']))
{
	 header('location:raview.php');
}
if(isset($_POST['aview']))
{
	 header('location:aview.php');
}
if(isset($_POST['cinsert']))
{
	 header('location:cinsert.php');
}
if(isset($_POST['cupdate']))
{
	 header('location:cupdate.php');
}
if(isset($_POST['cview']))
{
	 header('location:cview.php');
}



?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Staff</title>
		<style>

		body
		{
			font-family:'Open Sans',sans-serif;
			background-color:#f2f2f2;<!--#E3FBF8-->
		}
		button 
		{
			
			background-color:#ccccff;
			border-radius:12px;
			border:2px solid #555555;
			text-align:center;
			padding:8px 15px;
			font-size:20px;
			border-radius:12px;
			
		}
		div.background-color
		{
			align:center;
		}
		</STYLE>
</head>
	<body>
	
	<div class="b" style="text-align:center;">	
	<form method="post">
	<H1>EMPLOYEE</H1>
	<button type ="submit" name="eview"  >VIEW EMPLOYEE DETAILS</button><br><br>			
	<button type ="submit" name="eviewall"  >VIEW ALL EMPLOYEES DETAILS</button><br><br>
	<H1>DONOR</H1>
	<button type ="submit" name="dview"  >VIEW DONOR DETAILS</button><br><br>			
	<button type ="submit" name="dviewall" >VIEW ALL DONOR DETAILS</button><br><br>
	<H1>ANIMAL</H1>
	<button type ="submit" name="ainsert"  >ADD AN ANIMAL</button><br><br>	
	<button type ="submit" name="raview"  >VIEW REGISTERED ANIMALS</button><br><br>
	<button type ="submit" name="aview"  >VIEW ALL ANIMALS INFO</button><br><br>
	<H1>CELL</H1>
	<button type ="submit" name="cinsert"  >ADD A CELL DETAIL</button><br><br>	
	<button type ="submit" name="cupdate"  >UPDATE A CELL DETAIL</button><br><br>	
	<button type ="submit" name="cview"  >VIEW  CELL DETAILS</button><br><br>	
	</form>
	</div>
	</body>	
</html>