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
		<h1 style="text-align: center;">Job Details</h1><br>
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<?php
								require_once('connectivity.php');
							$result=mysqli_query($con,"select * from job_post where pid=".$_POST['did']);
								$r=mysqli_fetch_assoc($result);
						echo"<table class='table table-bordered table-hover'>";
						echo"<tr>";
								echo"<td>Project Id</td>";
								echo"<td>".$r['pid']."</td>";

							echo"</tr>";
						echo"<tr>";
								echo"<td>Client Id</td>";
								echo"<td>".$r['client_id']."</td>";

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
							echo"<tr>";
								echo"<td>Is Project Active</td>";
								echo"<td>".$r['is_active']."</td>";

							echo"</tr>";

						echo"</table>";	
						?>	
									
					</div>
					
				
</div>
<div class="col-md-3"></div>
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
		margin-top:150px;
		margin-left: 200px;
		font-size: 25px;

	}

	#profile_pic
	{
		width:100%;
	}

</style>