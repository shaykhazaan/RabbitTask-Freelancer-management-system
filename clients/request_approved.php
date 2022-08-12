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
				<h1 class="" style="text-align:center;margin-bottom: 20px;">Approved Requests</h1>
				<?php
				require_once('../admin/connectivity.php');
				$result=mysqli_query($con,"select * from bid left join freelancers ON bid.freelancer_id=freelancers.fid left join job_post ON bid.job_id=job_post.pid where bid.job_approval='approved' && bid.client_id=".$_SESSION['clientid']);

if(mysqli_num_rows($result))
{
				echo "<table class='table table-borderless table-hover'>";
				echo "<tr>";
				echo "<th>Project Name</th>";
				echo "<th>Project Category</th>";

				echo "<th>Freelancer Name</th>";
				echo"<th>Email</th>";
					echo "<th>Category</th>";
				echo "<th>Expertise</th>";
				echo "<th>Request</th>";

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
				
				

				echo "</tr>";
			}
				 
			

				echo"</table>";
			
		}
		else {
                echo "<div class='alert alert-danger text-center'>No Request Found! </div>";
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