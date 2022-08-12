<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
unset($_SESSION['validadmin']);
header("location:login.php");

	?>

</body>
</html>