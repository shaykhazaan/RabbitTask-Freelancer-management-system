<?php 
session_start(); 
ob_start();

if(!(isset($_SESSION['validadmin'])))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

</head>
<body>
	<div id="header">

	<img src="../images/logo.png" style="width:70px;" /><span style="color:#6fda44;">Rabbit<span><span style="color:white">Task</span>

	</div>

</body>
</html>
<style type="text/css">
	
body
{
	margin:0;

}
#header
{

	height: 100px;
	padding: 10px;
	font-size: 20px;
	font-family: 'Audiowide', cursive;
	position: fixed;
	left: 220px;
	top: 0px;
	right: 0px;
	color:white;
	background-color:#204353;

}
#logo
{
	width:15px;
	height: 100px;
}

</style>