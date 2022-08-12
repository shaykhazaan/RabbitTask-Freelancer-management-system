<?php
require_once('header.php');
require_once('admin/connectivity.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="links/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="links/fontawesome/css/all.css">
</head>
<body>
	<div id="rest-section">

		<div class="container-fluid">

			<div class="row" style="background-color: #204353;color:white;padding:20px">

				<div class="col-md"></div>

				<div class="col-md-5">
					<p class="text" style="color:#6fda44;">In Demand Talent On Demand.<sup>&trade;</sup></p>
					<p class="text"> Rabbit Task Is How.<sup>&trade;</sup></p>
				</div>

				<div class="col-md-5"><img class="img-thumbnail" src="images/index.png" style="background-color:#204353;border:none;width: 450px; ">
				</div>

				<div class="col-md"></div>

		</div>

		<div class="row" style="background-color:whitesmoke">

			<div class="col-md"></div>

			<div class="col-md-2 category" tabindex="6">
				<a href="web_development.php" class="box_links">
			
				<div class="upper-box"><i class="fab fa-accusoft fa-7x"></i></div>
				<div class="lower-box">Web develop</div>
				</a>

			</div>
			

			<div class="col-md-2 category" tabindex="7">
				<a href="android_development.php" class="box_links">
				<div class="upper-box"><i class="fab fa-android fa-7x"></i></div>
				<div class="lower-box">Android Development</div>
				</a>
			</div>

			<div class="col-md-2 category" tabindex="8">

				<a href="desktop_software_development.php" class="box_links">	
				<div class="upper-box"><i class="fas fa-desktop fa-7x"></i></div>
				<div class="lower-box">Desktop Software Development</div>
			</a>
			</div>

			<div class="col-md-2 category" tabindex="9">
			<a href="mobile_app_development.php" class="box_links">
				<div class="upper-box"><i class="fas fa-dice-d6 fa-7x"></i></div>
				<div class="lower-box">Mobile App Development</div>
			</a>
			</div>

			<div class="col-md"></div>
		</div>

		<div class="row" style="background-color:whitesmoke">

			<div class="col-md"></div>

			<div class="col-md-2 category" tabindex="10">
				<a href="game_development.php" class="box_links">
				<div class="upper-box"><i class="fas fa-gamepad fa-7x"></i></div>
				<div class="lower-box">Game Development</div>
			</a>
			</div>
			<div class="col-md-2 category" tabindex="11">

				<a href="web_mobile_design.php" class="box_links">
				<div class="upper-box"><i class="fas fa-mobile fa-7x"></i></div>
				<div class="lower-box">Web & Mobile Design</div>
			</a>
			</div>

			<div class="col-md-2 category" tabindex="12">
				<a href="ecommerce_development.php" class="box_links">
				<div class="upper-box"><i class="fas fa-shopping-basket fa-7x"></i></div>
				<div class="lower-box">Ecommerce Development</div>
			</a>
			</div>

			<div class="col-md-2 category" tabindex="13">

				<a href="web_development.php" class="box_links">
				<div class="upper-box"><i class="fab fa-intercom fa-7x"></i></div>
				<div class="lower-box">Web develop</div>
			</a>
			</div>
			
			<div class="col-md"></div>

		</div>
		

	
	

<h1 style="text-align: center;">Our Clients</h1><br>
	<div class="row">
 
<?php
$result=mysqli_query($con,"select * from clients where status='approved'");
while($r=mysqli_fetch_assoc($result))
{
echo"<div class='col-md-4'>";		
$pic=substr($r['pic'],3,);
			
echo"<div class='cards'>";
echo"<img src='$pic' class='img-thumbnail profile' style='width:100%;border-radius:50%;border:8px solid #204353'>";
echo"<div style='text-transform:capitalize;'>".$r['cname']."</div>";
echo"<div style='text-transform:capitalize;'>".$r['country']."</div>";


			echo"</div>";	
			echo"</div>";	
}
?>
</div>
</div>
</div>

</div>
			

		

	<script type="text/javascript" href="links/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require_once('footer.php');
?>
<style type="text/css">
#rest-section
{

	margin-top:180px;
	position: 
	z-index: 1;
}
.cards
{
	width:300px;
	border:none;
	margin-bottom: 30px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	display:line-block;
}


.category
{
	/*background-color: red;*/
	padding: 10px;
	margin: 20px;

}
.text
{
	font-size: 65px;
	font-family: times-new-roman;
	font-weight: bold;
}

.box_links
{
	text-decoration: none;
	color:#204353;
}
.box_links:hover
{
	color:#204353;
}
.upper-box
{
	background-color:#204353;
	color: white;
	padding: 10px;
	color:#6fda44;
	text-align: center;
	box-sizing: border-box;

}
.lower-box
{
	background-color:white;
	box-sizing: border-box;
	padding: 20px;
	text-align: center;
	font-weight: bolder;
	box-shadow: 2px 2px 3px grey;
}

.box
{
	text-decoration: none;
	color:#204353;
}
.box:hover
{
	color:#204353;
}
.upper-box:hover
{
	background-color:#6fda44;
	color:#204353;  
}
</style>