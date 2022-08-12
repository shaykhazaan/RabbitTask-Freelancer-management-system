<?php
require_once('header.php');
require_once('menu.php');
	require_once('../admin/connectivity.php');
	require_once('../admin/validation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.css">

</head>
<body>

	<div id="rest_section">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" style="">
					
					<form method="post" enctype="multipart/form-data">

						<h1 style="text-align: center;color:white;">Post A Job</h1><br>
        <div class="row frm">
				<div class="col-md-6">
                        <label>Project Name/Title</label>
						<input id="inputTextBox" type="text" name="pname" placeholder="Project Name" class="form-control inputs" required="required" minlength="3" maxlength="50"><br>

						<label>Project Category</label>
						<input id="inputTextBox1" name="pcategory" placeholder="Project Category" value="Software Devlopment" class="form-control inputs" disabled="disabled"><br>

						<label>Detail</label>
						<textarea rows="5" name="details" placeholder="Project Details Minimum 50  Maximum 500 lettres" class="form-control inputs" minlength="50" maxlength="500" required="required"></textarea><br>

						<input type="submit" name="btn" value="Post" class="form-control btn btn-success">
				</div>
						<div class="col-md-6">
							<label>Budget</label>
						<input id="Number" type="text" name="budget" placeholder="Budget in rupees" class="form-control inputs" required="required" minlength="3" maxlength="10" required><br>

						<label>Duration</label>
						<input id="Number1" type="text" name="duration" placeholder="Duration In Months e.g 1,2" class="form-control inputs" required="required" minlength="1" maxlength="2"><br>

						<label>Sub Category</label>
								<select name="sub_category" placeholder="Sub Category" class="form-control inputs" required="required">
							
					<option>--Select Sub Category--</option>
						<?php 
						$result=mysqli_query($con,"select * from sub_category");
						while($r=mysqli_fetch_assoc($result))
						{
						echo"<option>".$r['sub_cat_name']."</option>";
						}
							

							?>
			


						
						</select><br>

						

						
					

					<!-- <input type="file" multiple name="file" class="form-control inputs"><br> -->
						
					</div>
				
					</form>
				</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>

	</div>

</body>
</html>
<style type="text/css">
	
	#rest_section
	{
		margin-top:100px;
		margin-left: 200px;
		font-size: 25px;
		height: 100%;
		background-image: url("../images/bg.jpg");
		background-size: 100%;
	
		z-index: 1;


	}
	.frm
	{
		background-color:black;
		opacity:.8;
		padding: 15px;
		color:white;
		font-size: 25px;
		margin-top: 10px; 
		margin-bottom: 92px;
	}
	.inputs
	{
		opacity: 1;
		background-color: white;
	}
</style>
<?php
if(isset($_POST['btn']))
{
// $source=$_FILES['file']['tmp_name'];
// $ex=pathinfo($source,PATHINFO_EXTENSION);
// $destination='../images'.rand().$_FILES['file']['name'];
// move_uploaded_file($source, $destination);
$result=mysqli_query($con,"insert into job_post (project_name,project_category,client_id,duration,budget,details,project_subcategory) values ('".$_POST['pname']."','".$_POST['pcategory']."',$_SESSION[clientid],'".$_POST['duration']."','".$_POST['budget']."','".$_POST['details']."','".$_POST['sub_category']."')");
 

 if($result==0)
				  {

				  	echo "<script>alert('Oops! Something Went Wrong.');</script>";
				  }
				  else
				  {
				  	header('location:my_job_posts.php');
				  }

					


}


?>