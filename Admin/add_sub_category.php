<?php

require_once('header.php');
require_once('menu.php');
require_once('connectivity.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/rest_section.css">
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.css">

</head>
<body>
	<div id="rest_section">
	<div class="container">
		

		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6 add_form" style="background-color:whitesmoke;border-radius: 10px;">
		<h1 style="text-align:center">Add Sub Category</h1><br>
		<form method="post" class="form-group">

			<select name="p_cat_id" class="form-control">
				<?php
				$res=mysqli_query($con,"select * from category");
				while($r=mysqli_fetch_assoc($res))
				{

					echo "<option value='$r[cat_id]'>".$r['cat_name']."</option>";
				}


				?>
				
			</select><br>
			<input type="text" name="sub_cat_name" placeholder="Sub Category" class="form-control"><br>
			<input type="submit" name="btn" value="Add Sub Category" class="form-control btn btn-success"><br><br>
			
			
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

	$res=mysqli_query($con,"insert into sub_category(sub_cat_name,p_cat_id) values('".$_POST['sub_cat_name']."','".$_POST['p_cat_id']."')");
	echo"successfully added";

	if($res==0)
	{

	}
}
 ?>