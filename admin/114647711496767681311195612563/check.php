<?php
session_start();
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
if(!IS_AJAX) {die('<h1>Restricted access</h1>');}

error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../config.php");

switch(mysqli_real_escape_string($conn, $_POST['go']))
{
case 10:
{
	$attr = mysqli_real_escape_string($conn, $_POST['attr']);
	$result = mysqli_query($conn,"SELECT * FROM workshops WHERE workshop_name = '$attr'");
	$check=mysqli_num_rows($result);
	if($check)
	{
		echo "Workshop name already exists!";
	}
	else
	{
		echo "Available";
	}
	break;
}

}

?>