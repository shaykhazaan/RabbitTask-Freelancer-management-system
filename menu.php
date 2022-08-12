<?php
	require_once('permission.php');		
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

	
			<div class="left-side">
				<div id="profile">
					

			<img id="user_profile_pic" class="img-thumbnail" src=<?php echo $_SESSION['freelancerpic']; ?> alt="Not Uploaded Yet"><br>
			<span style="color:white"><?php echo $_SESSION['validfreelancer'] ?></span>
		</div>
		<ul id="menu_items">
			<li><a href="dashboard.php"><i class="fas fa-home icons"></i> Dashboard</a></li>
			<li><a href="user_profile.php"><i class="fas fa-user icons"></i> My Profile</a></li>
			<?php

$result=mysqli_query($con,"select * from freelancers where femail='".$_SESSION['validfreelancer']."'");
$r=mysqli_fetch_assoc($result);

			if($r['fname']=='N/A' || $r['address']=='N/A' || $r['phone']=='N/A' || $r['expertise']=='N/A' || $r['gender']=='N/A' || $r['qualification']=='N/A' || $r['category']=='N/A' | $r['sub_category']=='N/A' || $r['country']=='N/A')
			{
			
				echo"<li><a href='user_detail_form.php'><i class='fas fa-user icons'></i>Update Your Profile</a></li>";
			}
			 if($_SESSION['fstatus']=='pending')
			{
			echo"<li><a href='clients/status.php'><i class='fas fa-shield-alt icons'></i> Check Your Status</a></li>";

			}
			
			else if($_SESSION['fstatus']=='approved')

		{
			echo"<li><a href='new_projects.php'><i class='fas fa-plus icons'></i> New Projects</a></li>";
			echo"<li><a href='my_job_posts.php'>Working Projects</a></li>";
			echo"<li><a href='my_contracts.php'><i class='fab fa-angellist icons'></i> Completed Projects</a></li>";
			echo"<li><a href='my_contracts.php'>My Total Earning</a></li>";
			echo"<li><a href='my_contracts.php'><i class='fas fa-star-half-alt icons'></i> Reviews</a></li>";


		}
			?>
			<li><a href="logout.php"><i class='fas fa-sign-out-alt icons'></i>LogOut</a></li>
		</ul>


</div>

		
</div>


</body>
</html>
<style type="text/css">
	
body
	{
		margin:0;
		background-image: url("images/freelancer.jpg");
		background-size: 100%;
	}
	
	.left-side
	{
		width: 200px;
		position: fixed;
		top: 150px;
		left: 0px;
		bottom:0px;
		padding: 10px;
		font-size: 14px;
		height:auto;
		box-sizing: border-box;
		/*background-color:#1d4354;*/


	}
	#profile
	{
		text-align: center;
		width: 100%;
		height: 180px;
		text-align:center;
		margin-bottom: 5px;
	}
	#user_profile_pic
	{
		width:150px;
		height:150px;
		background-size: 100%;
		border:5px solid #204353;
		background-color:transparent;
		border-radius: 50%;
		
	}
#menu_items
	{
		margin:0;
		padding: 0;
		color:#6fda44;
		list-style: none;

	}
	#menu_items>li
	{
		margin-bottom: 5px;
		border-bottom: 3px solid #6fda44;
		width:200px;
		padding: 5px;
background-color: #204353;
/*opacity: 0.8;*/
	}
	#menu_items>li:hover
	{
		transform: scale(1.01);


	}
	#menu_items>li:active
	{
		color: whitesmoke;
	}
	#menu_items>li>a
	{
		text-decoration: none;
		color:white;
		
		
	}
	.icons
	{
		color:#6fda44;
	}
</style>