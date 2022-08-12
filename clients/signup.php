<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../links/fontawesome/css/all.css">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div id="signup_section">
				<h3 style="text-align: center;font-size: 25px;"><span style="color:#6fda44;">Sign</span><span style="color: white;">Up</span></h3><br><br>
					<form method="post">
						<div id="input_email">
							<input type="text" name="email" placeholder="Email"  class="form-control inputs" required=""  />
						</div><br>

						<div id="input_pass">
							<input type="password" name="pass" placeholder="Password" class="form-control inputs" required >
						</div><br>

						<div id="button_signup">
						<input type="submit" name="btn" value="SignUp" class="form-control btn btn inputs" required >
					</div><br>
						

					</form>
</div>
</div>
<div class="col-md-3"></div>

	</div>
</div>
</body>
</html>
<?php

if(isset($_POST['btn']))
{

require_once("../admin/connectivity.php");

$hash=password_hash($_POST['pass'],PASSWORD_DEFAULT);
$r=mysqli_query($con,"insert into clients (cemail,cpass) values ('".$_POST['email']."','$hash')");
if($r==1)
{
	$to_email=$_POST['email'];
	$subject="Rabbit Task Team";
	$body="Let's get started on Rabbit Task,the website that helps companies like yours hire remote talent .Use Rabbit Task to find the professionals you need for everything from one-time project to long term work";
	$header="From: abrarhussain12911@gmail.com";
	if(mail( $to_email, $subject, $body, $header))
	{
				  	echo"<script>alert('Signing up successfully');</script>";
		echo "Email successfully sended to ".$to_email;
	}
	else
	{
				  	echo"<script>alert('Something Went Wrong');</script>";
		
	}
	//header("location:login.php");
}
else
{
	?>
	<script type="text/javascript">
	alert("Email Already Exist");
	</script>
<?php
	header("location:signup.php");
}


}

?>
<style type="text/css">
body
{
	background-size: 100%;
	background-repeat: no-repeat;
	background-image: url("../images/client_login.jpg");
	
}
	#signup_section
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

	#button_signup
	{
		background-color: #6fda44;
		
		position: relative;
		font-size:25px;
		font-weight:bold;
		text-shadow: 1px 1px 1px black;
		color:#204353;
	
	}
	#button_signup::after
	{
		content: "\f304";
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