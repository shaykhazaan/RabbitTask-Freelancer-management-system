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
			<h1>Web & Mobile Design</h1>

			<div class="row">

				<div class="col-md-1"></div>
				<div class="col-md-10">
<p>Web development refers to building, creating, and maintaining websites. It includes aspects such as web design, web publishing, web programming, and database management.</p>
<p>
While the terms "web developer" and "web designer" are often used synonymously, they do not mean the same thing. Technically, a web designer only designs website interfaces using HTML and CSS. A web developer may be involved in designing a website, but may also write web scripts in languages such as PHP and ASP. Additionally, a web developer may help maintain and update a database used by a dynamic website.</p>
<p>
Web development includes many types of web content creation. Some examples include hand coding web pages in a text editor, building a website in a program like Dreamweaver, and updating a blog via a blogging website. In recent years, content management systems like WordPress, Drupal, and Joomla have also become popular means of web development. These tools make it easy for anyone to create and edit their own website using a web-based interface.</p>
<p>
While there are several methods of creating websites, there is often a trade-off between simplicity and customization. Therefore, most large businesses do not use content management systems, but instead have a dedicated Web development team that designs and maintains the company's website(s). Small organizations and individuals are more likely to choose a solution like WordPress that provides a basic website template and simplified editing tools.</p>
<p>
NOTE: JavaScript programming is a type of web development that is generally not considered part of web design. However, a web designer may reference JavaScript libraries like jQuery to incorporate dynamic elements into a site's design.</p>
			</div>
				<div class="col-md-1"></div>

		</div>
				<div class="col-md-1"></div>
<?php
echo"<div class='row cards'>";
$result=mysqli_query($con,"select * from freelancers where sub_category='Web & Mobile Design' && status='approved'");
while($r=mysqli_fetch_assoc($result))
{
		

		
			
							echo"<div class='cards'>";
echo"<img src='$r[pic]' class='img-thumbnail profile' style='width:100%;border-radius:50%;border:8px solid #204353''>";
echo"<div>".$r['fname']."</div>";
echo"<div>".$r['expertise']."</div>";


			echo"</div>";
		
			
			
			

		
}
?>
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