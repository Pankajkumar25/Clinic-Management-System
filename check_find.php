<?php
session_start();
$_SESSION['did']=30;
require_once("connection.php");
?>

<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("linkfile1.php");
  ?>
   </head>
  <body>
 <div class="container-fluid"> <!--container |container-fluid -->

<?php

include_once("head1.php");
include_once("mainmenu1.php");
echo "<div class='row '>";
echo "<div class='col-md-3 '>";
include_once("leftmenu1.php");
echo "</div>" ;
$did=$_SESSION['did'];

echo"<div class='col-md-6 '>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>checkbox delete case</div>
			<div class='panel-body'>main body</div>";
			
			if(isset($_REQUEST['find1']))
			{
			$date=$_POST['date'];
			
			$chb=$_POST['chb'];
			//echo"$chb";
			//print_r($chb);
			$emp_list=implode(",",$chb);
			//echo"$emp_list";
			
			$code=date("d/m/20y")."-$did";
			//echo"<br/>$code";
	$sql="update  `appointment` set status='$code' where date='$date' and did=$did";
	if(mysqli_query($con,$sql))
	{
	echo"selected apointments has been updated ";
	$id=mysqli_insert_id($con);
	header("Location:checkbox_delete.php?id=$id");
	}
	
	else
	echo"error <br/> $sql";
	
			
			}
			
			
		echo"
	</div>";
echo"</div>";

echo "<div class='col-md-3'>";
include_once("addwindow1.php");
echo "</div>";

echo "</div>";

include_once("footer1.php");

?>
</div>
</body>
</html>