 <?php
require_once('../admin/small_header.php');

?>
<script type="text/javascript">
	
function captcha()
{
	document.getElementById("msg").visibility="hidden";

x=Math.floor(Math.random()*10);
y=Math.floor(Math.random()*10);

document.getElementById("clabel").innerText=x + " " + "+" + " " + y +" "+ "=";

}

function validcaptcha()
{

	num1=x+y;
num2=document.getElementById("ctext").value;
if(num1==num2)
{
	return true;	
}

else
{
	document.getElementById("msg").style.visibility="visible";
	return false;
}

}


</script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../links/fontawesome/css/all.css">
	 <script src="../links/jquery.js"></script>
  <script src="../links/bootstrap/js/bootstrap.min.js"></script>

</head>
<body onload="captcha()">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="login_section">
					<h1 id="login_heading"><span style="color:#6fda44;">Log</span><span style="color:white">In</span></h1><br><br>

					<form method="post" onsubmit="return validcaptcha()">
						<div id="input_email"><input type="text" name="email" placeholder="Email" class="form-control inputs"  /></div><br>
						<div id="input_pass"><input type="password" name="pass" placeholder="Password" class="form-control inputs"></div><br>
						<div id="wraper_capcha" class="form-control"><label id="clabel"></label><input id="ctext" type="text" name="" required> <button type="button" onclick="captcha()" id="refresh"><i class="fa fa-sync-alt"></i></button></div>
						<div id="msg">Invalid Capcha</div>
						<div id="button_login"><input type="submit" name="btn" value="LogIn" class="form-control btn inputs"></div><br>
						
						<div id="button_signup"><a href="signup.php" class="form-control btn btn-info inputs" style="text-decoration: none;">SignUp</a><dvi>
						<!-- <input type="text"  name="email" placeholder="Email" class="form-control inputs" /><br>
						<input type="password" name="pass" placeholder="Password" class="form-control inputs"><br>
						<input type="submit" name="btn" value="LogIn" class="form-control btn btn-info inputs" ; "><br><br> -->
						

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

$t=0;

							


 	require_once('../admin/connectivity.php');


  $result=mysqli_query($con,"select * from clients");
 
			  while($r=mysqli_fetch_assoc($result))
			 {
			 	
			 	
					 	if($_POST['email']==$r['cemail'] && password_verify($_POST['pass'],$r['cpass']))
							{
								 if (isset($_SESSION['validclient']))
									{
										
										echo"<script>alert('Already Logged In');</script>";
										$t=2;
										break;
										
								 	}
					else
				{
								
											$t=1;
										
											
											$_SESSION['validclient']=$r['cemail'];
											$_SESSION['clientname']=$r['cname'];
											$_SESSION['clientid']=$r['cid'];
											$_SESSION['cstatus']=$r['status'];
											$_SESSION['pic']=$r['pic'];
								  			 header("location:dashboard.php");
							}
							  	
								

				}		
				}		 
	            if($t==0)
				  {

				  	echo "<script>alert('Invalid Email / Password');</script>";
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
	#button_login
	{
		position: relative;
		font-size:25px;
		font-weight:bold;
		text-shadow: 1px 1px 1px black;
		color:#204353;
		background-color:#6fda44;
	}
	#button_login::after
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
	#button_signup
	{
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
	#wraper_capcha
{
	background-color: transparent;
	border:none;
}

	#clabel{
		font-size: 15px;
		padding: 5px;
		text-align: center;
		color:black;
		letter-spacing: 2px;
	}
	#ctext
	{
		width: 10%;
		margin-right: 5px;

	}

	#msg
	{
		color:red;
		margin-left: 30px;
		visibility: hidden;
	}

</style>