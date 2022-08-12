<?php
require_once('header.php');
require_once('menu.php');
require_once('../admin/connectivity.php');
if (!(isset($_SESSION['validfreelancer'])))
{
header('location:login.php');
}


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
				
				echo "<th>Date Of Delivery</th>";
				echo "<th>Status</th>";
				echo "</tr>";
					$result=mysqli_query($con,"select * from contract where client_id=".$_SESSION['freelancerid']);
				while($r=mysqli_fetch_assoc($result))
				{
					$clnt=mysqli_query($con,"select * from clients where fid=".$r['client_id']);
					$c=mysqli_fetch_assoc($clnt);
					$prjt=mysqli_query($con,"select * from job_posts where pid=".$r['project_id']);
					$p=mysqli_fetch_assoc($frln);

					echo"<tr>";
			
				echo "<td>".$p['pname']."</td>";
				echo "<td>".$c['cname']."</td>";
				echo "<td>".$r['duration']."</td>";
				echo "<td>".$r['budget']."</td>"; 

				echo "<td>".$r['payment']."</td>";
				echo "<td>".$r['progress']." Months</td>";
				echo "<td>".$r['doc']."</td>";
				echo "<td>".$r['project_status']."</td>";


				echo "</tr>";
			}
				 
			

				echo"</table>";
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