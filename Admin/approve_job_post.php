	<?php
	session_start();
require_once('connectivity.php');
$r=mysqli_query($con,"update job_post set pstatus='approved' where pid=".$_POST['aid']);
$joinfp=mysqli_query($con,"select * from freelancers join job_post ON freelancers.sub_category= job_post.project_subcategory where pid=".$_POST['aid']."&& freelancers.status='approved'");



while($retfp=mysqli_fetch_assoc($joinfp))
{

$s=mysqli_query($con,"Insert into bid_status (project_id,bsclient_id,freelancer_id) values (".$retfp['pid'].",".$retfp['client_id'].",".$retfp['fid'].")");


				$to_email=$retfp['femail'];				
				$subject="Rabbit Task Team";
  				$body="Let's get started on Rabbit Task,the website that helps freelancer like you hire remote talent .Use Rabbit Task to find the professionals you need for everything from one-time project to long term work";
 				$header="From: abrarhussain12911@gmail.com";
 				if(mail( $to_email, $subject, $body, $header))
				{
					echo "Email successfully sended to ".$to_email;
				}

 			
 	}
if($s!=0)
{
	header("location:approved_jobs.php");
}

	
else
{
	header("location:../error.php");
}

	?>
