<?php
session_start();
if(!isset($_SESSION['profile_id']))
{
	header("Location:index.php");
}
else
{$profile_id=$_SESSION['profile_id'];

require_once("connection.php");
}

?>