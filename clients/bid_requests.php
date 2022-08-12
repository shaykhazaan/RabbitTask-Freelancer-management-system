<?php
require_once('header.php');
require_once('menu.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../links/css/rest_section.css">
</head>
<body>
	<div id="rest_section">
			
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-1"></div> -->
					<div class="col-md-12" style="border-radius:20px;">
				<h1 class="" style="text-align:center;margin-bottom: 20px;">Bid Requests</h1>
				<?php
				require_once('../admin/connectivity.php');
				$result=mysqli_query($con,"select * from bid left join freelancers ON bid.freelancer_id=freelancers.fid left join job_post ON bid.job_id=job_post.pid where bid.job_approval='pending' && bid.client_id=".$_SESSION['clientid']);

				if(mysqli_num_rows($result)==0)
				{
				echo "<div class='alert alert-danger text-center'>No Request Found! </div>";
               	}
				else
				{
				echo "<table class='table table-borderless table-hover'>";
				echo "<tr>";
				echo "<th>Project Name</th>";
				echo "<th>Project Category</th>";

				echo "<th>Freelancer Name</th>";
				echo"<th>Email</th>";
					echo "<th>Category</th>";
				echo "<th>Expertise</th>";
				echo "<th>Status</th>";
				echo "<th>Freelancer Detail</th>";
				echo "<th>Approve</th>";


				


				
			

				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
				
				echo"<tr>";
			
			echo "<td>".$r['project_name']."</td>";
				echo "<td>".$r['project_subcategory']."</td>"; 

				echo "<td>".$r['fname']."</td>";
				echo "<td>".$r['femail']."</td>";
				echo "<td>".$r['sub_category']."</td>";
				echo "<td>".$r['expertise']."</td>";
				echo "<td>".$r['job_approval']."</td>";
	echo "<td>";
				
				echo "<form method='post' action='freelancers_detail.php'>";
				echo "<input type='hidden' name='fid' value='$r[freelancer_id]'>";
				echo "<input type='hidden' name='bid_id' value='$r[bid_id]'>";
				echo "<input type='submit' value='Details' class='btn btn-info'>";
				echo "</form>";
				echo "</td>";
				echo "<td>";
				
				echo "<form method='post' action='job_approve.php'>";
				echo "<input type='hidden' name='fid' value='$r[freelancer_id]'>";
				echo "<input type='hidden' name='bid_id' value='$r[bid_id]'>";
				echo "<input type='submit' value='Approve' class='btn btn-success'>";
				echo "</form>";
				echo "</td>";

				echo "</tr>";
			}
				 
			

				echo"</table>";
			}
			?>
</div>
<!-- <div class="col-md-0"></div> -->

			</div>
		
			
		</div>
</div>
</body>
</html>
<style type="text/css">
	
body
{

}
#rest_section
{
	margin-top: 100px;
	margin-left: 200px;
}
	
</style>