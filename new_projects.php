<?php
require_once('header.php');
require_once('menu.php');

require_once('admin/connectivity.php');
if (!(isset($_SESSION['validfreelancer'])))
{
header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="links/fontawesome/css/all.css">
</head>
<body>
	<div id="rest_section">
<div class="container">


	
<div class="row">
	<?php
$result=mysqli_query($con,"select * from job_post join bid_status ON job_post.pid=bid_status.project_id where job_post.project_subcategory='".$_SESSION['freelancercategory']."'  && job_post.pstatus='approved' && job_post.is_active=0 && bid_status.bid_request='open' && bid_status.freelancer_id=".$_SESSION['freelancerid']);

echo "<table class='table table-borderless table-hover'>";

echo "<tr>";
				
				echo "<th>Project name</th>";
				echo"<th>Project category</th>";
				echo "<th>Sub category</th>";
				echo "<th>Budget</th>";
				echo "<th>Duration</th>";
				echo "<th>Project Details</th>";
				echo "<th>More Details</th>";
				echo "<th>Come To Bid</th>";

				
			

				echo "</tr>";


while($r=mysqli_fetch_assoc($result))
{
		echo "<tr>";
				echo "<td>".$r['project_name']."</td>";
				echo "<td>".$r['project_category']."</td>";
				echo "<td>".$r['project_subcategory']."</td>"; 
				echo "<td>".$r['duration']." Months</td>";
				echo "<td>".$r['budget']."</td>";
				echo "<td>".$r['details']."</td>";
		
				$_SESSION['pid_for_bid']=$r['pid'];
				$_SESSION['cid_for_bid']=$r['bsclient_id'];

				 echo "<td>";
				
				echo "<form method='post' action='post_details.php'>";
				echo "<input type='hidden' name='pid' value='$r[pid]'>";
				echo "<input type='submit' value='Details' class='btn btn-info'>";
				echo "</form>";
				echo "</td>";
				echo "<td>";
				echo "<form method='post' action='bid.php'>";
				echo "<input type='hidden' name='pid' value='$r[pid]'>";
				echo "<input type='hidden' name='fid' value='$_SESSION[freelancerid]'>";
				echo "<input type='hidden' name='cid' value='$r[client_id]'>";

				echo "<input type='submit' value='Bid' class='btn btn-success'>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";

}


	?>
	
</div>

</div>
</div>
</body>
</html>
<style type="text/css">
	

	#rest_section
{
	padding: 10px;
	margin-top: 180px;
	margin-left: 210px;
	background-color:white;
	opacity: 0.8;
	
}
</style>