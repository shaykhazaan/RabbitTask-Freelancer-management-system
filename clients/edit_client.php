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

</head>
<body>

<div id="rest_section">
	<div class="container">
<h1 style="text-align:center">Edit Profile</h1>
		<div class="row">
			
			<div class="col-md-1"></div>
			
<?php
$result=mysqli_query($con,"select * from clients where cid=".$_SESSION['clientid']);
$c=mysqli_fetch_assoc($result);

?>
<div class="col-md-5 frm">
				<form class="form-group" method="post">
					<span>Name</span><input id="inputTextBox" class="form-control" type="text" name="name" placeholder="User Name" value="<?php echo$c['cname'] ?>" required="required" ><br>
						<span>Email</span><input  type="text" class="form-control" name="email" placeholder="Country" value="<?php echo$c['cemail'] ?>" required="required"><br>
					<span>Address</span><input id="inputTextBox1" class="form-control" type="text" name="address" placeholder="Address" value="<?php echo$c['address'] ?>" required="required"><br>
					
					<input type="submit" name="btn" value="Update" class="form-control btn btn-info inputs">
				</div>

				
				<div class="col-md-5 frm">
					<span>Phone</span><input id="Number" class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo$c['phno'] ?>" required="required"><br>
					<span>Gender</span><input id="inputTextBox2"  type="text" name="gender" class="form-control" value="<?php echo$c['gender'] ?>" required="reqiured"><br>
					<span>Country</span><input id="inputTextBox3" type="text" name="country" class="form-control" value="<?php echo$c['country'] ?>" required="required">

				</div>
			
					
					
					
					

			
					

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
	margin-top:140px;
	margin-left:210px;  
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
$result=mysqli_query($con,"update clients set cemail='".$_POST['email']."',
					 cname='".$_POST['name']."',
					address='".$_POST['address']."',
					phno='".$_POST['phone']."',
					gender='".$_POST['gender']."',
					country='".$_POST['country']."'
                    where cid=".$_SESSION['clientid']);

	
	$_SESSION['validclient']=$r['cemail'];
	$_SESSION['clientname']=$r['cname'];

	  header('location:client_profile.php');

}
?>