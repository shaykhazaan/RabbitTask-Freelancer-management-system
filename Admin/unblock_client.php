<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require_once('connectivity.php');
$r=mysqli_query($con,"update clients set status='pending' where cid=".$_POST['id']);
if($r==1)
	header("location:blocked_clients.php");
else
	header("location:../error.php");
	?>

</body>
