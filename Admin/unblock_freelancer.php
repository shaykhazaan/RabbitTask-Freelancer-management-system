<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require_once('connectivity.php');
$r=mysqli_query($con,"update freelancers set status='pending' where fid=".$_POST['id']);
if($r==1)
	header("location:blocked_freelancers.php");
else
	header("location:../error.php");
	?>

</body>
