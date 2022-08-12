<?php

require_once('header.php');
require_once('menu.php');
require_once('admin/connectivity.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="rest_section">
	<?php
$result=mysqli_query($con,"select * from freelancers where fid=".$_SESSION['freelancerid']);

$r=mysqli_fetch_assoc($result);

	echo"<div class='placeholders' id='c'>".$r['prjt_completed']."</div>";
	echo"<div class='placeholders' id='w'>".$r['working_prjt']."</div>";
	echo"<div class='placeholders' id='ic'>".$r['prjt_notcompleted']."</div>";
	echo"<div class='placeholders' id='t'>".$r['amount_earned']."</div>";


?>
<div class="tiles">
	<span id="completed"></span><br>
	<label>Completed Project</label>
</div>
<div class="tiles">
	<span id="working"></span><br>
	<label>Project In Progress</label>
</div>

<div class="tiles">
	<span id="notcompleted"></span><br>
	<label>Incomplete</label>
</div>

<div class="tiles">
	<span id="totalearn"></span><br>
	<label>Total Earned</label>
</div>

</div>
</body>
</html>
<style type="text/css">


#rest_section
{
	padding: 10px;
	margin-top: 200px;
	margin-left: 250px;
	
}
.placeholders
{
/*visibility:hidden;*/
position:absolute;
color: transparent;

}
.tiles
{
	text-align:center;
	width: 150px;
	height: 110px;
	padding: 20px;
	margin: 20px;
	background-color:#204353;
	color:white;
box-sizing: border-box;
display: inline-block;
vertical-align: top;
border-bottom:10px solid #6fda44;
}

</style>
<script type="text/javascript">
	min1=0;
	min2=0;
	min3=0;
	min4=0;

	
	max1=document.getElementById('c').innerText;
	max2=document.getElementById('w').innerText;
	max3=document.getElementById('ic').innerText;
	str=document.getElementById('t').innerText;
	max4=str.substring(2,str.lenght);
	min1=Math.floor(max1 * .8);
	min2=Math.floor(max2 * .8);
	min3=Math.floor(max3 * .8);
	min4=Math.floor(max4 * .8);

	setInterval(projectComplete,150);
	setInterval(workingProject,120);
	setInterval(projectIncomplete,100);		
	setInterval(totalAmountEarned,10);
	

	function projectComplete()
	{
		if(min1<=max1)
		{
			document.getElementById('completed').innerText=min1 + '+';
			min1++;
		}
	}
		function workingProject()
	{
		if(min2<=max2)
		{
			document.getElementById('working').innerText=min2 + '+';
			min2++;
		}
	}
			function projectIncomplete()
	{
		if(min3<=max3)
		{
			document.getElementById('notcompleted').innerText=min3 + '+';
			min3++;
		}
	}
			function totalAmountEarned()
	{
		if(min4<=max4)
		{
			document.getElementById('totalearn').innerText='Rs '+min4 + '+';
			min4++;
		
		}

	}
</script>
