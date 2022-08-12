<?php
require_once('header.php');
require_once('admin/connectivity.php');
require_once('admin/validation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

<div id="rest_section">
	<div class="container">

		<div class="row">
			
			<div class="col"></div>
			<div class="col-md-5">
				<form class="form-group" method="post" enctype="multipart/form-data">
					<input id="inputTextBox" class="form-control" type="text" name="fname" placeholder="User Name" required><br>
						<select class="form-control" name="country">

							<option>-----Country-----</option>
							<?php 
						$result=mysqli_query($con,"select * from country");
						while($r=mysqli_fetch_assoc($result))
						{
						echo"<option>".$r['country_name']."</option>";
						}
							

							?>

					</select><br>
					<input id="inputTextBox1" required class="form-control" type="text" name="address" placeholder="Address"><br>
					<input id="Number" required class="form-control" type="text" name="phone" placeholder="Phone"><br>
					<input id="inputTextBox2" required class="form-control" type="text" name="qualification" placeholder="Qualification"><br>
					<div class="row">
					<div class="col-md-4"><input  type="radio" name="gender" value="Male" checked>Male</div>
					<div class="col-md-4"><input type="radio" name="gender" value="Female">Female</div>
					<div class="col-md-4"><input type="radio" name="gender" value="Other">Other</div>
				</div><br>
					<input disabled type="text" class="form-control" name="category" value="Software Development"><br>
					 
					
					<select class="form-control" name="sub_category"><br>

				
			<option>--Select Sub Category--</option>
						<?php 
						$result=mysqli_query($con,"select * from sub_category");
						while($r=mysqli_fetch_assoc($result))
						{
						echo"<option>".$r['sub_cat_name']."</option>";
						}
							

							?>
					</select><br>
							<select class="form-control" name="expertise"><br>

				
			<option>Expertise</option>
					<option>Full Stack Developer</option>
					<option>Front End Developer</option>
					<option>Back End Developer</option>
					


					</select><br>
					

				

					<span class="inputs" style="color:black"> Choose Profile Picture</span><br>
					<input type="file" name="file" class="form-control inputs"><br><br>

						<input type="submit" name="btn" value="create" class="form-control btn btn-info inputs">
					
						
						
					
					

				</form>
				
			</div>
			<div class="col"></div>


		</div>



	</div>
	

</div>
</body>
</html>
<style type="text/css">
	
#rest_section
{
	margin-top:200px; 
}

</style>
<?php

if(isset($_POST['btn']))
{
	
	require_once('admin/connectivity.php');
$source=$_FILES['file']['tmp_name'];
//$ex=pathinfo($source,PATHINFO_EXTENSION);
$destination='images/'.rand().$_FILES['file']['name'];
move_uploaded_file($source, $destination);
$result=mysqli_query($con,"update freelancers set fname='".$_POST['fname']."',
					address='".$_POST['address']."',
					gender='".$_POST['gender']."',
					phone='".$_POST['phone']."',
					qualification='".$_POST['qualification']."',
					expertise='".$_POST['expertise']."',
					country='".$_POST['country']."',
					category='".$_POST['category']."',
					sub_category='".$_POST['sub_category']."',

					pic='$destination' where fid=".$_SESSION['freelancerid']);
$_SESSION['freelancerpic']=$destination;

	header('location:user_profile.php');
}