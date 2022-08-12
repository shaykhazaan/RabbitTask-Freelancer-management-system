<?php
require_once('permission.php');
require_once('header.php');
require_once('menu.php');
require_once('admin/validation.php');
require_once('admin/connectivity.php');
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
			
			<div class="col-md-1"></div>
			
<?php
$result=mysqli_query($con,"select * from freelancers where fid=".$_SESSION['freelancerid']);
$f=mysqli_fetch_assoc($result);

?>
<div class="col-md-5 frm">
				<form class="form-group" method="post">
					<span>Name</span><input id="inputTextBox" class="form-control" type="text" name="fname" placeholder="User Name" value="<?php echo$f['fname'] ?>" required="required" ><br>
						<span>Country</span><input id="inputTextBox1" type="text" class="form-control" name="country" placeholder="Country" value="<?php echo$f['country'] ?>" required="required" ><br>
					<span>Address</span><input id="inputTextBox2" class="form-control" type="text" name="address" placeholder="Address" value="<?php echo$f['address'] ?>" required="required" ><br>
					<span>Phone</span><input id="Number" class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo$f['phone'] ?>" required="required" ><br>

					<input type="submit" name="btn" value="Update" class="form-control btn btn-info inputs">
				</div>

				<div class="col-md-5 frm">
					<span>Qualification</span><input id="inputTextBox3" class="form-control" type="text" name="qualification" placeholder="Qualification" value="<?php echo$f['qualification'] ?>" required="required" ><br>
			
					<span>Gender</span><input id="inputTextBox4"  type="text" name="gender" class="form-control" value="<?php echo$f['gender'] ?>" required="required" ><br>
					
					
					<span>Category</span><input id="inputTextBox5" type="text" class="form-control" name="sub_category" value="<?php echo$f['sub_category'] ?>" required="required" ><br>

			
							<span>Expertise</span><input id="inputTextBox6" type="text" class="form-control" name="expertise" value="<?php echo$f['expertise'] ?>" required="required" ><br>

			
					

				</div>

				

						
					
						
						
					
					

				</form>
				
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
	margin-top:200px; 
}
.frm
{
	background-color: rgba(0,0,0,.7);
	padding: 20px;
	box-sizing: border-box;
	color:white;
}

</style>
<?php

if(isset($_POST['btn']))
{
	
// 	require_once('admin/connectivity.php');
// $source=$_FILES['file']['tmp_name'];
// //$ex=pathinfo($source,PATHINFO_EXTENSION);
// $destination='images/'.rand().$_FILES['file']['name'];
// move_uploaded_file($source, $destination);
$result=mysqli_query($con,"update freelancers set fname='".$_POST['fname']."',
					address='".$_POST['address']."',
					gender='".$_POST['gender']."',
					phone='".$_POST['phone']."',
					qualification='".$_POST['qualification']."',
					expertise='".$_POST['expertise']."',
					country='".$_POST['country']."',
					sub_category='".$_POST['sub_category']."'

				  where fid=".$_SESSION['freelancerid']);

$_SESSION['freelancercategory']=$r['sub_category'];
$_SESSION['validfreelancer']=$r['femail'];
	 header('location:user_profile.php');

}
?>