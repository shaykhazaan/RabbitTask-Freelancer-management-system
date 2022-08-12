<?php 
require_once('../admin/connectivity.php');
$result=mysqli_query($con,"select * from clients where cid=".$_SESSION['clientid']);
$r=mysqli_fetch_assoc($result);
$_SESSION['cstatus']=$r['status'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/fontawesome/css/all.css">
</head>
<body>
	<div id="left-side">
		<div id="profile">
		<img src=<?php echo $_SESSION['pic'] ?> id="client_profile_pic" >
		<?php if($_SESSION['clientname']=='N/A') 
		 {
			echo "<span>".$_SESSION['validclient']."</span>";
		}
		else
		{
			echo "<span style='text-transform:capitalize;color:white'>".$_SESSION['clientname']."</span>";

		}
		?>
		</div>
		<ul id="menu">
			<li><a href="dashboard.php"><i class="fas fa-home icons"></i> Dashboard</a></li>
			<li><a href="client_profile.php"><i class="fas fa-user icons"></i> My Profile</a></li>
			<?php

			if($r['cname']=='N/A'  || $r['address']=='N/A' || $r['phno']=='N/A' || $r['country']=='N/A')
			{
				echo"<li><a href='update_profile.php'>Update Your Profile</a></li>";
			}
			else if($_SESSION['cstatus']=='pending')
			{
			echo"<li><a href='status.php'>Check Your Status</a></li>";

			}
			
			else if($_SESSION['cstatus']=='approved')

		{
			echo"<li><a href='post_job.php'>Post A Job</a></li>";
			echo"<li><a href='my_job_posts.php'>My Job Posts</a></li>";
			echo"<li><a href='bid_requests.php'>Bid Requests</a></li>";
			echo"<li><a href='request_approved.php'>Approved Requests</a></li>";
			echo"<li><a href='request_rejected.php'>Rejected Requests</a></li>";

			echo"<li><a href='my_contracts.php'>My Contracts</a></li>";
		}
			?>
			<li><a href="logout.php">LogOut</a></li>
		</ul>




	</div>
		


</body>
</html>
<style type="text/css">
	body
	{
		margin:0;
	}
	
	#left-side
	{
		width: 200px;
		padding: 25px;
		font-size: 14px;
		position: fixed;
		left: 0px;
		top: 0px;
		bottom: 0px;
		box-sizing: border-box;
		background-color:#1d4354;


	}
	#profile
	{
		text-align: center;
		width: 100%;
		height: 200px;
		margin-bottom: 20px;
	}
	#client_profile_pic
	{
		width:100%;
		height:150px;
		background-image: url('../images/admin_bg.png');
		background-size: 100%;
		background-repeat: no-repeat;
		border-radius: 90px;
		
	}

	
	#menu
	{
		margin:0;
		padding: 0;
		color:#6fda44;
		list-style: none;

	}
	#menu>li
	{
		margin-bottom: 20px;
		border-bottom: 1px solid white;

	}
	#menu>li:hover
	{
		transform: scale(1.01);

	}
	#menu>li:active
	{
		color: whitesmoke;
	}
	#menu>li>a
	{
		text-decoration: none;
		color:white;
	}

</style>