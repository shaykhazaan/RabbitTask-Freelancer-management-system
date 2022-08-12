
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require_once('connectivity.php');
$r=mysqli_query($con,"update clients set status='blocked' where cid=".$_POST[id]);
if($r==1)
	header("location:clients.php");
else
	header("location:../error.php");
	?>

</body>
</html>