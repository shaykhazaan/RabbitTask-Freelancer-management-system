<?php
require_once('header.php');
require_once('menu.php');
require_once('admin/connectivity.php');
if (!(isset($_SESSION['validfreelancer'])))
{
header('location:login.php');
}

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="links/bootstrap/css/rest_section.css"> -->
	

</head>
<body>
<div id="rest_section">

<!-- <div class="row">
	<div class="col-md-5"> -->
		<?php
$ret_frln=mysqli_query($con,"select * from freelancers where fid=".$_SESSION['freelancerid']);
$f=mysqli_fetch_assoc($ret_frln);
		
		echo"<label>Name :".$f['fname']."</label><br>";
		echo"<label>Address :".$f['address']."</label><br>";
		echo"<label>Category :".$f['sub_category']."</label><br>";
		echo"<label>Expertise :".$f['expertise']."</label><br>";
		echo"<label>Qualification :".$f['qualification']."</label><br>";
		echo"<label>Phone :".$f['phone']."</label><br><br>";

      

		?>

		<form>
	
		<label>Inquiry*</label>
		<textarea rows="5" name="intro" placeholder="Introduce yourself to get this project" class="form-control inputs"></textarea><br>
		<input type="submit" class="btn btn-success" value="Confirm" name="btn">

	</form>
	

</div>
</body>
</html>

<style type="text/css">
#rest_section
{
	padding: 10px;
	margin-top: 200px;
	margin-left: 250px;

	
}
	
.Frln_detail
{
	background-color:#1d4354;
	color:white;
	font-size: 15px;
	font-weight: bolder;
	letter-spacing: 2px;
	padding: 20px;
}

</style>
<?php
if(isset($_GET['btn']))
	
{


	$result=mysqli_query($con,"insert into bid (job_id,client_id,freelancer_id,intro_of_frln) values (".$_SESSION['pid_for_bid'].",".$_SESSION['cid_for_bid'].",".$_SESSION['freelancerid'].",'".$_GET['intro']."')");

	$r=mysqli_query($con,"update bid_status set bid_request='close' where freelancer_id=".$_SESSION['freelancerid']);

	echo "insert into bid (job_id,client_id,freelancer_id,intro_of_frln) values (".$_SESSION['pid_for_bid'].",".$_SESSION['cid_for_bid'].",".$_SESSION['freelancerid'].",'".$_GET['intro']."')";

	
	 // header('location:my_bid_requests.php');
}


?>