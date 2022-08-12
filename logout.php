<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();


			unset($_SESSION['validfreelancer']);
			unset($_SESSION['freelancerid']);
			unset($_SESSION['fstatus']);
			unset($_SESSION['freelancerpic']);
			unset($_SESSION['freelancercategory']);
header("location:index.php");

	?>

</body>
</html>