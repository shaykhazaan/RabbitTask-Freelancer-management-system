<?php  
require_once('header.php'); 
require_once('menu.php'); 
  require_once('connectivity.php');

    ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
</head>
<body>

  

   <div id="rest_section">
    <h1> Clients  </h1><br>

    <div style="padding: 10px 10px 10px 20px">
        <?php
          foreach (range('A', 'Z') as $column){
             echo "<a href='filter_clients.php?a=$column' id='alp'>  $column </a>". "&nbsp;";
          }   
         ?>
      </div>
    
    <a href="" id='alp'><?php echo  $_GET['a']; ?></a>
      <?php
         $q=$_GET['a'];
        
          $res=mysqli_query($con, "select * from clients where status='approved' && cname like'$q%'"); 
        
      
              if(mysqli_num_rows($res)>0)
              {
                    echo "<table class='table table-striped table-bordered table-hover table-light'>";
                    echo "<tr class='info'>";
                  
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Status</th>";
                    echo "<th>Block</th>";
                    echo "</tr>";

                    echo "</tr>";
                   while($r=mysqli_fetch_assoc($res))
                   {

        echo"<tr>";
        echo "<td>".$r['cid']."</td>";
        echo "<td>".$r['cname']."</td>";
        echo "<td>".$r['cemail']."</td>";
        echo "<td>".$r['status']."</td>";
        echo "<td>";
            echo "<form method='post' action='block_client.php'>";
            echo "<input type='hidden' name='id' value='$r[cid]'>";
            echo "<input type='submit' name='btn' value='Block' class='btn btn-danger'>";
            echo "</form>";
          echo "</td";
        echo"</tr>";
                    }
                echo "</table>";
              

              }
               else {
                echo "<div class='alert alert-danger text-center'>No Record Found! </div>";
               }
              ?>

   </div>
</body>
</html>



<style type="text/css">
  #rest_section
  {
    margin-left: 220px;
    margin-top: 100px;
    background-color:whitesmoke;
    box-sizing: border-box;
    padding: 5px;
font-size: 14px;
  
  }
   #alp{
    font-size: 17px;
    text-decoration: underline;
    padding-left: 14px;
  }
</style>