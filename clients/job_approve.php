	<?php
	session_start();
require_once('../admin/connectivity.php');


$result=mysqli_query($con,"select * from bid left join job_post ON bid.job_id=job_post.pid where bid.client_id=".$_SESSION['clientid']." && bid.bid_id=".$_POST['bid_id']);

$retfp=mysqli_fetch_assoc($result);


$s=mysqli_query($con,"Insert into contract (project_id,client_id,freelancer_id,duration,budget) values (".$retfp['job_id'].",".$retfp['client_id'].",".$retfp['freelancer_id'].",".$retfp['duration'].",'".$retfp['budget']."')");

$Jobstatus=mysqli_query($con,"update  job_post set is_active=1 where pid=".$retfp['pid']);
$bidcancel=mysqli_query($con,"update  bid set job_approval='approved' where freelancer_id=".$retfp['freelancer_id']." && job_id=".$retfp['job_id']);

$bidcancel=mysqli_query($con,"update  bid set job_approval='cancel' where freelancer_id!=".$retfp['freelancer_id']." && job_id=".$retfp['job_id']);


				// $to_email=$retfp['femail'];				
				// $subject="Rabbit Task Team";
  		// 		$body="Let's get started on Rabbit Task,the website that helps freelancer like you hire remote talent .Use Rabbit Task to find the professionals you need for everything from one-time project to long term work";
 			// 	$header="From: abrarhussain12911@gmail.com";
 			// 	if(mail( $to_email, $subject, $body, $header))
				// {
				// 	echo "Email successfully sended to ".$to_email;
				// }

 			
 	
if($s!=0)
{
	header("my_contracts.php");
}

	
else
{
	header("location:../error.php");
}

	?>
