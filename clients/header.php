<?php 
session_start(); 
ob_start();

if(!(isset($_SESSION['validclient'])))
{
	header("location:login.php");
}
// //else if($_SESSION['cstatus']=='blocked' || )
// {
// 	header("location:blocked_user.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>
	<div id="header">

	<div id="heading">
		<img src="../images/logo.png" style="width:70px;" /><span style="color:#6fda44;">Rabbit<span><span style="color:white">Task</span><br>
		
	</div>
	

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
	position: fixed;
	left: 200px;
	top: 0px;
	right: 0px;
	box-sizing: border-box;
	color:white;
	background-color:#1d4354;
	z-index: 200;


}
#heading
{
	height: 100px;
	font-size: 25px;
	font-family: 'Roboto Mono', monospace;

}
#logo
{
	width:20px;
	height: 100px;
}

</style>