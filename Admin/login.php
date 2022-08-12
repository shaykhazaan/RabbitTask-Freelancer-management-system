<?php 
require_once('small_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../links/fontawesome/css/all.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="login_section">

					<h1  id="login_heading">
						<span style="color:#6fda44;">Log</span>
						<span style="color:white">In</span>
					</h1>

					<form method="post">

						<div id="input_email">
							<input type="text" name="email" placeholder="Email" class="form-control inputs"  />
						</div><br>

						<div id="input_pass">
							<input type="password" name="pass" placeholder="Password" class="form-control inputs">
						</div><br>

						<div  id="button_submit">
							<input type="submit" name="btn_submit" value="LogIn" class="form-control btn inputs">
						</div>

					</form>
			</div>
		</div>
		<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>
<?php


if(isset($_POST['btn_submit']))
{
	require_once('connectivity.php');

$result=mysqli_query($con,"select * from admin where email='".$_POST['email']."' && pass='".$_POST['pass']."'");
$t=mysqli_num_rows($result);
$r=mysqli_fetch_assoc($result);
session_start();
$_SESSION['validadmin']=$r['email'];


if($t==1)

{
	header("location:dashboard.php");
}
else
{
	echo "<script>alert('Invalid User');</script>";
	header("location:login.php");
}
}

?>
<style type="text/css">
body
{
	background-image: url("../images/login.jpg");
	background-size: 100%;
}
	#login_section
	{
		
		margin-top: 200px;
		
		padding:50px;
		background-color:rgba(20,43,53,0.5);
		text-shadow: 1px 1px 1px black;
		box-shadow: 2px 2px 2px black;
		
	}
	#login_heading
	{
	font-family: 'Audiowide', cursive;
	text-align: center;
	font-weight: bolder;
	}
	.inputs
	{
		/*width: 100%;*/
		/*height:50px;*/
		font-size: 20px;
		text-indent: 30px;
		font-weight:bold;
		

		box-shadow: 2px 2px 2px  black;

	}
	#input_email
	{
		position: relative;
	}
	#input_email::after
	{
		content: "\f007";
		font-family: "Font Awesome 5 Free";
		font-weight:900;

		font-size: 30px;
		color:black;
		position: absolute;
		top:5px;
		right:30px;
		color:#204353;
	}
	#button_submit
	{
		position: relative;
		font-size:25px;
		font-weight:bold;
		text-shadow: 1px 1px 1px black;
		color:#204353;
		background-color:#6fda44;
	}
	#button_submit::after
	{
		content: "\f2f6";
		font-family: "Font Awesome 5 Free";
		font-weight:900;
		font-size: 30px;
		color:black;
		position: absolute;
		top:2px;
		right:170px;
		color:#204353;
	}

	#input_pass
	{
		position: relative;
	}
	#input_pass::after
	{
		content: "\f023";
		font-family: "Font Awesome 5 Free";
		font-weight:900;
		font-size: 30px;
		color:black;
		position: absolute;
		top:5px;
		right:30px;
		color:#204353;
	}

</style>