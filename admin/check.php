<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
if(!IS_AJAX) {die('<h1>Restricted access</h1>');}

error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../config.php");
switch(mysqli_real_escape_string($conn, $_POST['go']))
{
case 7:
{
	$soc = mysqli_real_escape_string($conn, $_POST['soc']);
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE email = '$soc'");
	$check=mysqli_num_rows($result);
	if($check)
	{
		echo "O God! you are right here..";
	}
	else
	{
		echo "We don't know you..";
	}
	break;
}

case 8:
{
	$soc1 = mysqli_real_escape_string($conn, $_POST['soc1']);
	$soc2 = mysqli_real_escape_string($conn, $_POST['soc2']);
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE email = '$soc2' AND password='$soc1'");
	$check=mysqli_num_rows($result);
	if($check)
	{
		$check=$result->fetch_array();
		echo $check[2];
	}
	else
	{
		echo "Not yet..";
	}
	break;
}
case 9:
{	$st=rand(100000000,10000000000)."9676768131".rand(100000000,10000000000);
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE email = 'techera@techera.org.in'");
	$se=$result->fetch_array();
	rename($se[2],$st);
	$result = mysqli_query($conn,"UPDATE admin SET folder='$st' WHERE email ='techera@techera.org.in'");
	$check=mysqli_num_rows($result);
	if($check)
	{
		echo "yee ha...";
	}
	else
	{
		echo "Not yet..";
	}
	break;
}

}
?>