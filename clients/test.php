<?php
session_start();
echo date("y/m/d/h/m/s/ms");

if (isset($_SESSION['validclient']))
{
	echo"<script>alert('Already Logged In');</script>";
	  echo "<div class='alert alert-danger text-center'>Wrong Email/Password </div>";
}
?>
<script type="text/javascript">
	
function capcha()
{

x=Math.floor(Math.random()*10);
y=Math.floor(Math.random()*10);

document.getElementById("clabel").innerText=x + " " + "+" + " " + y + "=";



}

function validcapcha()
{
 num1=x+y;
 num2=parseInt(document.getElementById("ctext").value);


	alert("yyyyy");
if(num1==num2)
{
	alert("tttttttt");

document.write("true");

	// return true;

}

else
{
	alert("fffff");

	// document.getElementById("msg").visibility="visible";
document.write("false");

	// return false;

}

}


</script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../links/bootstrap/css/bootstrap.min.css">
</head>
<body onload="capcha()">
	<div id="clabel"></div>
	<form onsubmit="return">
	<input type="text" id="ctext" name="aa">
	<button type="button" id="cap" onclick="validcapcha()">abcd</button>
	<input type="submit" value="submit" name="">
	<form>
		<?php
		$s='25'.'%';
		$w='25'.'%';
		echo"<div class='progress'>";
  echo"<div class='progress-bar' role='progressbar' style='width: $w;' aria-valuenow='$s' aria-valuemin='0' aria-valuemax='100'>$s</div>";
echo"</div>";
	?>	

</body>
</html>