<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.css">
</head>
<body>
	<div id="rest_section">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="background-color:whitesmoke;">
					<form method="post" enctype="multipart/form-data" >

						<h3 style="text-align: center"> Update Profile</h3>
				

						<input type="text" name="pname" placeholder="Project Name" class="form-control inputs"><br>
						

						<input type="text" name="pcategory" placeholder="Project Category" class="form-control inputs"><br>

						<input type="text" name="duration" placeholder="In Months e.g 1,2" class="form-control inputs"><br>
						<input type="text" name="budget" placeholder="e.g $1-$20" class="form-control inputs"><br>

						<input type="textarea" name="details" placeholder="Project Details" class="form-control inputs"><br>
						<input type="text" name="sub_category" placeholder="Sub Category" class="form-control inputs"><br>

						<input type="text" name="frontend" placeholder="Front End" class="form-control inputs"><br>

						<input type="text" name="backend" placeholder="Back End" class="form-control inputs"><br>

						<input type="text" name="database" placeholder="DataBase" class="form-control inputs"><br>

						
						

					<input type="file" multiple name="file" class="form-control inputs"><br>
						<input type="submit" name="btn" value="Post A JOb" class="form-control btn btn-success inputs">
				
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>

	</div>

</body>
</html>