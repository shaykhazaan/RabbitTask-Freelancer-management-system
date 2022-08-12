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
		<h1>New Jobs</h1><br>
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<?php
								require_once('connectivity.php');
								$result=mysqli_query($con,"select * from job_post where pstatus='pending'");
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
				echo "<th>Approve</th>";
				echo "<th>Block</th>";

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
				$_SESSION['job_post']=$r['pid'];

				 // echo "<td>";
				 // echo "<form method='post' action='approve_job_post.php'>";
				 // echo "<input type='hidden' name='id' value='$r[pid]'>";
				 // echo "<input type='submit' name='btn' value='Approve' class='btn btn-success'>";
				 // echo "</form";
				 // echo "</td>";
				 
				 // echo "<td>";
				 // echo "<form method='post' action='block_job_post.php'>";
				 // echo "<input type='hidden' name='id' value='$r[pid]'>";
				 // echo "<input type='submit' name='btn' value='Block' class='btn btn-danger'>";
				 // echo "</form";
				 // echo "</td>";

				 echo "<td>";
				 echo "<form method='post' name='form_approve' action='approve_job_post.php'>";
				 echo "<input type='hidden' name='aid' value='$r[pid]'>";
				 echo "<input type='submit' name='btn_approve' value='Approve' class='btn btn-success'>";
				 
				 echo "</form>";
				 echo "</td>";
				 echo "<td>";
				 echo "<form method='post' name='form_block' action='block_job_post.php'>";
				 echo "<input type='hidden' name='bid' value='$r[pid]'>";
				 echo "<input type='submit' name='btn_block' value='Block' class='btn btn-danger'>";
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
	font-size: 14px;

	}

	#profile_pic
	{
		width:100%;
	}

</style>