<?php
//error_reporting(0);
//echo "connection file<br/>";
$server="localhost";
$dbuserid="root";
$dbpassword="";
$database="firstdb";
$con=mysqli_connect($server,$dbuserid,$dbpassword,$database);
if($con)
{
//echo"database connected";	
return true;
}
else
{
	echo "database connection error ";
return false;
	}


?>