<?php
require_once('header.php');
require_once('menu.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div id="rest_section">
		<h1>Blocked Freelancers</h1>
		
		<div class="container">
		<?php
		require_once('connectivity.php');
		$result=mysqli_query($con,"Select * from freelancers where status='blocked'");

		echo "<table class='table table-bordered table-hover'>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo"<th>Email</th>";
				echo "<th>Date Of Join</th>";
					echo "<th>Type</th>";

					echo "<th>Status</th>";
				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
					
				echo "<tr>";
				echo "<td>".$r['fid']."</td>";
				echo "<td>".$r['femail']."</td>";
				echo "<td>".$r['doj']."</td>";
				echo "<td>".$r['type']."</td>";

				echo "<td>".$r['status']."</td>";

				
			}

				echo"</table>";

		?>
		<div>
	</div>

</body>
</html>
<style type="text/css">
#rest_section
{
	margin-left: 300px;
		margin-top: 140px;
		background-color:whitesmoke;
		box-sizing: border-box;
		padding: 5px;
</style>