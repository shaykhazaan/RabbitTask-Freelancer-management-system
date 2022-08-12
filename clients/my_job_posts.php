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
				<h1 class="" style="text-align:center;margin-bottom: 20px;">My Job Posts</h1>
				<?php
				require_once('../admin/connectivity.php');
				$result=mysqli_query($con,"select * from job_post where client_id=".$_SESSION['clientid']);
if(mysqli_num_rows($result))
	{		
		echo "<table class='table table-borderless table-hover'>";
				echo "<tr>";
				echo "<th>Project Id</th>";
				echo "<th>Project name</th>";
				echo"<th>Project category</th>";
					echo "<th>Sub category</th>";
				echo "<th>Client Id</th>";
				echo "<th>Duration</th>";
				
				echo "<th>Budget</th>";
				echo "<th>Status</th>";


				
			

				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
					if($r['pstatus']=='blocked')
					{
				echo "<tr style='text-decoration:line-through'>";
					}
			else
			{
				echo"<tr>";
			}
			echo "<td>".$r['pid']."</td>";
				echo "<td>".$r['project_name']."</td>";
				echo "<td>".$r['project_category']."</td>";
				echo "<td>".$r['project_subcategory']."</td>"; 

				echo "<td>".$r['client_id']."</td>";
				echo "<td>".$r['duration']." Months</td>";
				echo "<td>".$r['budget']."</td>";
				if($r['pstatus']=='pending')
				{
				echo "<td class='bg bg-info' style='text-transform:capitalize;color:white;'>".$r['pstatus']."</td>";

				}
				else if($r['pstatus']=='approved')
				{
				echo "<td class='bg bg-success' style='text-transform:capitalize;color:white;'>".$r['pstatus']."</td>";

				}
				else
				{
				echo "<td class='bg bg-danger' style='text-transform:capitalize;color:white;text-decoration:none;'>".$r['pstatus']."</td>";
				}

				echo "</tr>";
			}
				 
			

				echo"</table>";
			}
			else {
                echo "<div class='alert alert-danger text-center'>No Job Found! </div>";
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
		margin-top:95px;
		margin-left: 200px;
	}


	
</style>