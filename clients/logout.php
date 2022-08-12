<?php
	session_start();
unset($_SESSION['validclient']);
unset($_SESSION['clientid']);
unset($_SESSION['status']);
unset($_SESSION['pic']);

header("location:login.php");

	?>