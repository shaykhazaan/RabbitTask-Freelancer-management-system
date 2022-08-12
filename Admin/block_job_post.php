	<?php
require_once('connectivity.php');
$r=mysqli_query($con,"update job_post set pstatus='blocked' where pid=".$_POST[bid]);
if($r==1)
	header("location:new_job_posts.php");
else
	header("location:../error.php");
	?>