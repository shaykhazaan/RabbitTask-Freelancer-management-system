<<?php 
require_once('header.php');
require_once('menu.php');


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../links/css/rest_section.css">
</head>
<body>
<div id="rest_section">
<div class="container" >

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 add_form" style="background-color:whitesmoke;border-radius: 10px;">
		<h1 style="text-align:center">Add Category</h1><br>
		<form method="post" class="form-group">

			<input type="text" name="cat_name" placeholder="Category Name" style='text-indent:30px;' class="form-control"><br>
			<input type="submit" name="btn" value="Add Category" class="form-control btn btn-success"><br><br>
			<a href="add_sub_category.php" style='color:white' class="form-control btn btn-info">Add Sub Category</a>
			
		</form>
		
	</div>
	<div class="col-md-3"></div>
</div>	


</div>
</div>
</body>
</html>
<?php 

if(isset($_POST['btn']))
{

	require_once('connectivity.php');
	$res=mysqli_query($con,"insert into category(cat_name) values('".$_POST['cat_name']."')");
	echo"successfully added";

	if($res==0)
	{

	}
}
 ?>
  <style type="text/css">
 	
 	#rest_section
	{
		margin-top:150px;
		margin-left: 250px;
	

	}
 </style>
