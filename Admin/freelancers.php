

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
require_once('header.php');
require_once('menu.php');

?>
	<div id="rest_section">
		
	
			<div class="container-fluid">
				<h1 class="">Freelancers</h1>
		
				<?php
			echo"<div style='padding: 20px 10px 10px 20px'>";
        
          foreach (range('A', 'Z') as $column){
             echo "<a href='filter_freelancers.php?a=$column' id='alp'>  $column </a>". "&nbsp;";
         }
         
      echo"</div>";


				require_once('connectivity.php');
				$result=mysqli_query($con,"select * from freelancers where status='approved'");

          $limit = 5;
        
         $count = mysqli_num_rows($result);
         $totalpages=$count/$limit;

         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} ;
            $page--;
            $offset = $limit * $page;
         }else {
            $page =1 ;
            $offset = 0;
         }
         //$left_rec = $rec_count - ($page * $rec_limit);

          $result = mysqli_query( $con, "select * from freelancers where status='approved' limit $offset, $limit" );

           if(mysqli_num_rows($result)>0)
           {

				echo "<table class='table table-striped table-bordered table-hover table-dark'>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>Category</th>";
				echo "<th>Status</th>";
				echo "<th>Block</th>";
				echo "</tr>";
				while($r=mysqli_fetch_assoc($result))
				{
				echo "<tr>";

				echo "<td>".$r['fid']."</td>";
				echo "<td>".$r['fname']."</td>";
				echo "<td>".$r['femail']."</td>";
				echo "<td>".$r['sub_category']."</td>";

				echo "<td>".$r['status']."</td>";
				echo "<td>";
				echo "<form method='post' action='block_freelancer.php'>";
				echo "<input type='hidden' name='id' value='$r[fid]'>";
				echo "<input type='submit'  value='Block' class='btn btn-danger'>";
				echo "</form>";
				echo "</td";
				echo "</tr>";
			}
             
	echo"</table>";


			    $i=0;
              echo "<ul class='pagination'>";
                while($i<$totalpages) 
                 {
                  $i++;
                  echo "<li>"."<a href='freelancers.php?page=$i' >". $i."</a>"." </li> "."&nbsp;&nbsp;";
                 }
              echo "</ul>";
			}
			  else {
                echo "<div class='alert alert-danger text-center'>No Record Found! </div>";
               }
			?>



			</div>
		
			
		
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
