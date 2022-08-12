<?php
	require_once('header.php');
	require_once('menu.php');
	require_once('../admin/connectivity.php');
	require_once('../admin/validation.php');

	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
	<?php
	?>
</head>
<body>
	
	<div id="rest_section">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 frm-update">
					<form method="post" enctype="multipart/form-data" >

						<h3 style="text-align:center; color:white"> Update Profile</h3><br>
				

						<input id="inputTextBox" type="text" name="name" placeholder="User Name" class="form-control inputs"><br>

						<inpux1 id="inputTextBox1" type="text" name="address" placeholder="Address" class="form-control inputs"><br>
						<input type="radio" name="gender" value="male" style=""><span class="inputs" style="color:white;font-size: 20px;"> Male</span>

						<input type="radio" name="gender" value="female" style="margin-left: 10px;"><span class="inputs" style="color:white;font-size: 20px;"> Female</span>
						<input type="radio" name="gender" value="other" style="margin-left: 10px;"><span class="inputs" style="color:white;font-size: 20px;"> Other</span><br><br>

						<input id="Number" type="text" name="phno" placeholder="Phone Number" class="form-control inputs"><br>
						<input id="inputTextBox2" type="text" name="company_name" placeholder="Company Name (Optional)" class="form-control inputs"><br>
						
						<select name="country" class="form-control inputs">
						<option>------Country------</option>
						<option>India</option>

						<option>Pakistan</option>

						<option>Italy</option>

						<option>England</option>
						<option>Bangladesh</option>



					</select><br>
					<span class="inputs" style="color:white"> Upload Picture</span><br><br>
					<input type="file" name="file" class="form-control inputs"><br>
						<input type="submit" name="btn" value="create" class="form-control btn btn-info inputs">
				
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>

	</div>

</body>
</html>
<style type="text/css">
	#rest_section
	{
		margin-left: 300px;
		margin-top: 100px;
		
		box-sizing: border-box;
		padding: 5px;
	}
	.inputs
	{
		font-size: 20px;
		height: 40px;
		text-indent: 35px;
	}
	.frm-update
	{
		background-color: #1d4354;
		padding-top: 30px;
		padding: 30px;
	}
</style>
<?php

if(isset($_POST['btn']))
{
	
	
$source=$_FILES['file']['tmp_name'];
//$ex=pathinfo($source,PATHINFO_EXTENSION);
$destination='../images/'.rand().$_FILES['file']['name'];
move_uploaded_file($source, $destination);
$result=mysqli_query($con,"update clients set cname='".$_POST['name']."',
					address='".$_POST['address']."',
					gender=".$_POST['gender'].",
					phno='".$_POST['phno']."',
					
					country='".$_POST['country']."',
					pic='$destination' where cid=".$_SESSION['clientid']);
$_SESSION['pic']=$destination;


	header("location:client_profile.php");

}

?>