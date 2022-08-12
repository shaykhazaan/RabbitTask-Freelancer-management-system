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
	<div class="col-md-2"></div>
	<div class="col-md-7">
		<h1 style="text-align: center">Project Details</h1>
	<?php
$result=mysqli_query($con,"select * from job_post where project_subcategory='".$_SESSION['freelancercategory']."' && pstatus='approved'");

$r=mysqli_fetch_assoc($result);

$results=mysqli_query($con,"select * from clients where cid=".$r['client_id'] );
$c=mysqli_fetch_assoc($results);

	echo"<table class='table table-bordered table-hover'>";
						
						echo"<tr>";
								echo"<td>Client Name</td>";
								echo"<td>".$c['cname']."</td>";

							echo"</tr>";
							echo"<tr>";

								echo"<td>Client Address</td>";
								echo"<td>".$c['address']."</td>";

							echo"</tr>";

							echo"<tr>";

								echo"<td>Client's Phone</td>";
								echo"<td>".$c['phno']."</td>";

							echo"</tr>";
							echo"<tr>";

								echo"<td>Project Name</td>";
								echo"<td>".$r['project_name']."</td>";

							echo"</tr>";



							echo"<tr>";
								echo"<td>Category</td>";
								echo"<td>".$r['project_category']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Sub Category</td>";
								echo"<td>".$r['project_subcategory']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Project Duration</td>";
								echo"<td>".$r['duration']." Months</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Budget</td>";
								echo"<td>".$r['budget']."</td>";

							echo"</tr>";
							
							echo"<tr>";
								echo"<td>Project Details</td>";
								echo"<td>".$r['details']."</td>";

							echo"</tr>";
							

						echo"</table>";	
	// echo "<td>";

				echo "<form method='post' action='bid.php'>";
				echo "<input type='hidden' name='pid' value='$r[pid]'>";
				echo "<input type='hidden' name='cid' value='$r[client_id]'>";
				echo "<input type='hidden' name='fid' value='$_SESSION[freelancerid]'>";
				echo "<input type='submit' style='width:200px;' value='Bid' class='btn btn-success'>";
				echo "</form>";
				// echo "</td>";




	?>
</div>
<div class="col-md"></div>
	
</div>

</div>
</div>

</body>
</html>
<style type="text/css">
body
{
	background-image: url("images/progress.jpg");
	background-size: 100%;

}
	

	#rest_section
{
	padding: 10px;
	margin-top: 160px;
	margin-left: 210px;

	background-color: white;
	opacity: 0.7;
	font-weight: bold;
	font-size: 20px;

}

</style>