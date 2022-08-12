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
		<h1 style="text-align: center;">My Profile</h1><br>
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<?php
								require_once('admin/connectivity.php');
								$result=mysqli_query($con,"select * from freelancers where fid=".$_SESSION['freelancerid']);
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
								echo"<td>Category</td>";
								echo"<td>".$r['sub_category']."</td>";

							echo"</tr>";
							echo"<tr>";
								echo"<td>Expertise</td>";
								echo"<td>".$r['expertise']."</td>";

							echo"</tr>";
							
							echo"<tr>";
								echo"<td>Country</td>";
								echo"<td>".$r['country']."</td>";

							echo"</tr>";


						echo"</table>";	
						?>	
									
					</div>
					
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-4">
					<form method="post" action="edit_freelancer.php">
						<input type="hidden" name="fid" value="<?php echo $_SESSION['freelancerid'] ?>">
						<input type="submit" class="btn btn-info" name="Edit" value="Edit">
					</form>
				</div>
				<div class="col-md-6">
	
						<button type="button" class="btn btn-primary" name="change" onclick="funDisplay();">
							Change Profile Pic
						</button><br><br>
						<div id="change_profile">
							<form method="post" class="form-group" enctype="multipart/form-data">
								<input type="file" name="file" class="from-control" id="file_input"><br><br>
								<input type="submit" name="btn_upload" value="Upload" class="btn btn-secondary" onclick="funHide();">
							</form>
						</div>
				
				</div>
				<div class="col-md-1"></div>
				<!-- <?php
				// echo"<img class='img-thumbnail' id='user_profile_pic' src='$r[pic]'>";
				?> -->
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
		margin-top:160px;
		margin-left: 200px;
		font-size: 20px;
		font-family: times new roman;

	}
	#file_input
	{
		color:white;
	}

	#change_profile
{

	visibility:hidden;
}



</style>
<script type="text/javascript">
<script type="text/javascript">
	
	 i=0;
	function funDisplay()
	{ 
		
		
		document.getElementById('change_profile').style.visibility='visible';
	}
	function funHide()
	{
		document.getElementById('change_profile').style.visibility='hide';
		
	}
	
</script>
	
</script>
<?php
if(isset($_POST['btn_upload']))
{
	
	require_once('admin/connectivity.php');
$source=$_FILES['file']['tmp_name'];
//$ex=pathinfo($source,PATHINFO_EXTENSION);
$destination='images/'.rand().$_FILES['file']['name'];
move_uploaded_file($source, $destination);
$result=mysqli_query($con,"update freelancers pic='$destination' where fid=".$_SESSION['freelancerid']);
$_SESSION['freelancerpic']=$destination;

	header('location:user_profile.php');
}
?>