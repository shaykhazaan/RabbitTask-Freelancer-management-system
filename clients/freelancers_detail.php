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
		<h1 style="text-align: center;">Freelancer's Detail</h1><br>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<?php
								require_once('../admin/connectivity.php');
								$result=mysqli_query($con,"select * from freelancers join bid on freelancers.fid=bid.freelancer_id where freelancers.fid=".$_POST['fid']."&& bid.bid_id=".$_POST['bid_id']);
								$r=mysqli_fetch_assoc($result);
						echo"<table class='table table-borderless table-hover'>";
							echo"<tr>";
								echo"<td>Name</td>";
								echo"<td>".$r['fname']."</td>";

							echo"</tr>";
							
							echo"<tr>";
								echo"<td>Address</td>";
								echo"<td>".$r['address']."</td>";
							echo"</tr>";

								echo"<tr>";
								echo"<td>Gender</td>";
								echo"<td>".$r['gender']."</td>";

							

							echo"</tr>";
							echo"<tr>";
								echo"<td>Ph No.</td>";
								echo"<td>".$r['phone']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Email</td>";
								echo"<td>".$r['femail']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Qualification</td>";
								echo"<td>".$r['qualification']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Category</td>";
								echo"<td>".$r['sub_category']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Expertise</td>";
								echo"<td>".$r['expertise']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Proposal</td>";
								echo"<td>".$r['intro_of_frln']."</td>";
							echo"</tr>";
							echo"<tr>";
								echo"<td>Completed Project</td>";
								echo"<td>".$r['prjt_completed']."</td>";

							echo"</tr>";
							
							echo"<tr>";
								echo"<td>Country</td>";
								echo"<td>".$r['country']."</td>";

							echo"</tr>";

						echo"</table>";	
						?>	
									
					</div>
					
				<div class="col-md-4">
				<?php
				$pic='../'.$r['pic'];
				echo"<img class='img-thumbnail' id='user_profile_pic' src='$pic'>";
				?>
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
		margin-top:100px;
		margin-left: 200px;
		font-size: 20px;
		font-family: times new roman;

	}



</style>