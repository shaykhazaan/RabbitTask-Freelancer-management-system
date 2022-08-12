<?php
require_once('admin/connectivity.php');
session_start();

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="links/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div id="header-body">
	<nav class="navbar navbar-expand-md navbar-dark"  style="background-color: #204353;color:white;" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand heading" href="#"><img src="images/logo.png" style="width:80px;" /><span style="color:#6fda44;font-size: 35px;">Rabbit</span><span style="color:white;font-size: 35px;">Task</span><br></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0" id="menu">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" tabindex="1" href="index.php">Home</a>
          </li>
          <?php if(isset($_SESSION['validfreelancer']) && $_SESSION['fstatus']=='approved')
		{
	        echo"<li class='nav-item'>";
            echo"<a class='nav-link' href='new_projects.php' tabindex='2'>New Projects</a>";
          echo"</li>";
           echo"<li class='nav-item'>";
            echo"<a class='nav-link' href='dashboard.php' tabindex='2'>Dashboard</a>";
          echo"</li>";
      }
      if(!(isset($_SESSION['validfreelancer'])))
      {
            echo"<li class='nav-item'>";
            echo"<a class='nav-link' href='signup.php' tabindex='4'>Signup</a>";
            echo"</li>";

             echo"<li class='nav-item dropdown'>";
            echo"<a class='nav-link dropdown-toggle' href='#' id='dropdown04' tabindex='5'
            data-bs-toggle='dropdown' aria-expanded='false'>Login</a>";
            echo"<ul class='dropdown-menu' aria-labelledby='dropdown04'>";
              echo"<li><a class='dropdown-item' href='login.php'>Freelancer</a></li>";
              echo"<li><a class='dropdown-item' href='clients/login.php'>Client</a></li>";
              // <li><a class="dropdown-item" href="#">Something else here</a></li> 
            echo"</ul>
          </li>";

      }
      

         
         if(isset($_SESSION['validfreelancer']))
         {
          echo"<li class='nav-item'>";
            echo"<a class='nav-link' href='logout.php'>Logout</a>";
          echo"</li>";
        }
          ?>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-md navbar-light bg-light" style="font-weight:bold;box-shadow: 2px 2px 2px grey;" aria-label="Fourth navbar example">
    <div class="container-fluid">
    
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0"  id="expanded-menu">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="web_development.php">Web Development</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="desktop_software_development.php">Desktop & Software Development</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="game_development.php">Game Development</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web_mobile_design.php">Web & Mobile Design</a>
          
          </li>
            <li class="nav-item">
            <a class="nav-link" href="ecommerce_development.php">Ecommerce Development</a>
          
          </li>  <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
	</div>
<script type="text/javascript" src="links/jquery.js"></script>

<script type="text/javascript" src="links/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<style type="text/css">
	
body
{
	margin:0;

}
#header-body
{
  position:fixed;
  top:0px;
  left: 0px;
  right: 0px;
  z-index: 200;
}

#header
{

	height: 100px;
	
	/*position: fixed;
	left: 0px;
	top: 0px;
	right: 0px;*/
	box-sizing: border-box;
	color:white;
	background-color:#1d4354;
	z-index: 200;


}
.heading
{
	

	font-size: 50px;
	font-family: 'Roboto Mono', monospace;
	margin-left: 100px;
	font-weight:bold;


}
#logo
{
	width:20px;
	height: 100px;
}
#menu
{
margin-left: auto;
margin-right: auto;
}
#menu>li
{
	margin-left: 10px;
}
#menu>li>a
{
	color:white;
}
#expanded-menu>li>a
{
  margin-right: 30px;
  font-size: 15px;
}

</style>