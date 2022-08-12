<?php
require_once('header.php');
require_once('menu.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="rest_section">
		<div class="container">
		<?php
		require_once('connectivity.php');
		$result=mysqli_fecth_assoc($con,"Select * from freelancers where status='pending'");

		echo "<table class="">";
				echo "<tr>";
				echo "<th>ID</th>";
				echo"<th>Email></th>";
				echo "<th>Approve</th>";
				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
				echo "<tr>";

				echo "<td>$r['fid']</td>";
				echo "<td>$r['femail']</td>";
				echo "<form method='post' action='approve.php'>";
				echo "<input type='hidden' value='$r[fid]'>";
				echo "<input type='submit' value='Approve';
				echo "</form";
				echo "</tr>";
			}

				echo"</table>";

		?>
		<div>
	</div>

</body>
</html>