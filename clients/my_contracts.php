<?php
require_once('header.php');
require_once('menu.php');
require_once('../admin/connectivity.php');

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
				<h1 class="" style="text-align:center;margin-bottom: 20px;">My Contracts</h1>
				<?php
				$result=mysqli_query($con,"select * from contract where client_id=".$_SESSION['clientid']);
				if(mysqli_num_rows($result))
				{
				echo "<table class='table table-borderless table-hover'>";
				echo "<tr>";
				echo "<th>Progect Name</th>";
				echo "<th>Freelancer Name</th>";
				echo"<th>Duration</th>";
					echo "<th>Budget</th>";
				echo "<th>Payment Status</th>";
				echo "<th>Progress</th>";
				// echo"<th>";
// 		$s='25'.'%';
// 		$w='100'.'%';
// 		echo"<div class='progress'>";
//   echo"<div class='progress-bar' role='progressbar' style='width: $w;' aria-valuenow='$s' aria-valuemin='0' aria-valuemax='100'>$s</div>";
// echo"</div>";
// 	echo"</th>";	
				echo "<th>Contract Date</th>";
				
				// echo "<th>Date Of Delivery</th>";
				echo "<th>Status</th>";
				echo "<th>Assign</th>";

				echo "</tr>";
					
				while($r=mysqli_fetch_assoc($result))
				{
					$frln=mysqli_query($con,"select * from freelancers where fid=".$r['freelancer_id']);
					$f=mysqli_fetch_assoc($frln);
					$prjt=mysqli_query($con,"select * from job_post where pid=".$r['project_id']);
					$p=mysqli_fetch_assoc($prjt);

					echo"<tr>";
			
				echo "<td>".$p['project_name']."</td>";
				echo "<td>".$f['fname']."</td>";
				echo "<td>".$r['duration']." Months</td>";
				echo "<td>".$r['budget']."</td>"; 

				echo "<td>".$r['payment']."</td>";
				echo "<td>".$r['progress']."</td>";
				echo "<td>".$r['date_of_contract']."</td>";
				// echo "<td>".$r['Date Of Contract']."</td>";

				echo "<td>".$r['project_status']."</td>";

echo"<td>";
echo"<form method='post' action='assign_project.php'>";

						echo"<input type='hidden' name='contract_id' value='$r[contract_id]'>";
						echo"<input type='submit' class='btn btn-info' name='assign' value='Assign'>";
					echo"</form>";

				echo "</tr>";
			}
				 
			

				echo"</table>";
			}
			else {
                echo "<div class='alert alert-danger text-center'>No Contract Found! </div>";
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

#rest_section
{
	margin-top: 100px;
	margin-left: 200px;
}

	
body
{

}
	
</style>