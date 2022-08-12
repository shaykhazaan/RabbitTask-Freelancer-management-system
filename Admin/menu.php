<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../links/fontawesome/css/all.css">

</head>
<body>
	<div id="left-side">
		<div id="profile">

			<img src="../images/admin.png" id="logo" style="width:170px;height:180px">
			<span></span>
		</div>
		<ul id="menu">
			<li>
				
				<a href="dashboard.php"><i class="fas fa-home icons"></i>&nbsp; Dashboard
				</a>
			</li>

			<li>
				
				<a href="freelancers.php"><i class="fas fa-user icons"></i>&nbsp; Freelancers
				</a>
			</li>

			<li>
				
				<a href="new_freelancers.php"><i class="fas fa-user-plus icons"></i>&nbsp; New Freelancers
				</a>
			</li>

			<li>
				
				<a href="blocked_freelancers.php"><i class="fas fa-user-slash icons"></i>&nbsp;Blocked Freelancers
				</a>
			</li>

			<li>
				
				<a href="clients.php"><i class="fas fa-user-tie icons"></i>&nbsp; Clients
				</a>
			</li>

			<li>
				
				<a href="new_clients.php"><i class="fas fa-user-check icons"></i>&nbsp; New Clients</a>
			</li>

			<li>
				
				<a href="blocked_clients.php"><i class="fas fa-user-lock icons"></i>&nbsp; Blocked Clients
				</a>
			</li>

			<li>
				
				<a href="new_job_posts.php"><i class="fas fa-book-reader icons"></i>&nbsp; New Jobs</a>
			</li>

			<li>
				
				<a href="blocked_jobs.php"><i class="fas fa-exclamation-triangle icons"></i>&nbsp; Blocked Jobs
				</a>
			</li>

			<li>
				<a href="approved_jobs.php">
				<i class="fas fa-briefcase icons"></i>&nbsp; Approved Jobs
				</a>
			</li>

			<li>
				<a href="add_items.php">
					<i class="fas fa-plus-square icons"></i>&nbsp; Add Items
				</a>
				</li>

			<li>
				<a href="logout.php"><i class="fas fa-sign-out-alt icons"></i>&nbsp; LogOut
				</a>
			</li>
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
		width: 220px;
		padding: 25px;
		font-size: 15px;	
		position: fixed;
		left: 0px;
		top: 0px;
		bottom: 0px;
		background-color:#204353;
		box-sizing: border-box;


	}
	#profile
	{
		text-align: center;
		width: 100%;
		height: 200px;
		margin-bottom: 10px;
	}
	#logo
	{
		border-radius: 90px;
		
	}
.icons
{
	color:#6fda44;
}

	#menu
	{
		margin:0;
		padding: 0;
		
		list-style: none;

	}
	#menu>li
	{
		margin-bottom: 15px;
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
	#db
	{
		position: relative;
	}
	#db::before
	{
		font-family: "Font Awesome 5 Free";
		content: "\f0c4";
		position: absolute;
		font-size: 20px;

	}
	

</style>