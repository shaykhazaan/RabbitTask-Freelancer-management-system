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
		<h1>Blocked Clients</h1>

		<div class="container">
		<?php
		require_once('connectivity.php');
		$result=mysqli_query($con,"Select * from clients where status='blocked'");
if(mysqli_num_rows($result))
{
		echo "<table class='table table-bordered table-hover'>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo"<th>Email</th>";
				echo "<th>Date Of Join</th>";
				echo "<th>Status</th>";
				echo "<th>Approve</th>";
				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
					
				echo "<tr>";
				echo "<td>".$r['cid']."</td>";
				echo "<td>".$r['cemail']."</td>";
				echo "<td>".$r['doj']."</td>";
				echo "<td>".$r['status']."</td>";
				echo "<td>";
				echo "<form method='post' action='unblock_client.php'>";
				echo "<input type='hidden' name='id' value='$r[cid]'>";
				echo "<input type='submit' value='Unblock' class='btn btn-secondary'>";
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
		<div>
	</div>

</body>
</html>
<style type="text/css">
#rest_section
{
	margin-left: 220px;
		margin-top: 100px;
		font-size: 14px;
		background-color:whitesmoke;
		box-sizing: border-box;
		padding: 5px;
}
</style>