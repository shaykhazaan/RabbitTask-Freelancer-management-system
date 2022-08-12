<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require_once('connectivity.php');
$r=mysqli_query($con,"update freelancers set status='blocked' where fid=".$_POST['id']);
if($r==1)
	header("location:freelancers.php");
else
	header("location:../error.php");
	?>

</body>
