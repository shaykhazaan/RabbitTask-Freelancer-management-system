<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php

require_once('header.php');
require_once('menu.php');


	?>
	<div id="rest_section">
		<h1 style="text-align: justify;">Blocked Jobs</h1><br>
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<?php
								require_once('connectivity.php');
								$result=mysqli_query($con,"select * from job_post where pstatus='blocked'");
								if(mysqli_num_rows($result))
								{
				echo "<table class='table table-bordered table-hover'>";

					echo "<tr>";
						echo "<th>Project Id</th>";
						echo "<th>Project name</th>";
						echo"<th>Project category</th>";
						echo "<th>Sub category</th>";
						echo "<th>Client Id</th>";
						echo "<th>Duration</th>";
						echo "<th>Budget</th>";
						echo "<th>Status</th>";
						echo "<th>Detail</th>";
					echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
				echo "<tr>";
					echo "<td>".$r['pid']."</td>";
					echo "<td>".$r['project_name']."</td>";
					echo "<td>".$r['project_category']."</td>";
					echo "<td>".$r['project_subcategory']."</td>"; 
					echo "<td>".$r['client_id']."</td>";
					echo "<td>".$r['duration']." Months</td>";
					echo "<td>".$r['budget']."</td>";

					 echo "<td>";
					 echo "<form method='post' name='form_block' action='unblock_jobs.php'>";
					 echo "<input type='hidden' name='bid' value='$r[pid]'>";
					 echo "<input type='submit' name='btn_unblock' value='UnBlock' class='btn btn-secondary'>";
					 echo "</form>";
					 echo "</td>";
				 
					 echo "<td>";
					 echo "<form method='post' name='form_details' action='job_details.php' >";
					 echo "<input type='hidden' name='did' value='$r[pid]'>";
					 echo "<input type='submit' name='btn_details' value='Details' class='btn btn-info'>";
					 echo "</form>";
					 echo "</td>";

				echo "</tr>";
			}

				echo"</table>";
			}
			else {
                echo "<div class='alert alert-danger text-center'>No Record Found! </div>";
               }
			?>
							
									
					</div>
					
				

</div>
<div class="col-md-1"></div>
		</div>
		</div>
	</div>

</body>
</html>
<style type="text/css">
body
{
	background-color:whitesmoke;
}
	#rest_section
	{
		margin-left: 220px;
		margin-top: 100px;
	

	}

	#profile_pic
	{
		width:100%;
	}

</style>