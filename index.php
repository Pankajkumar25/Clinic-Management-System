
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

if(isset($_REQUEST['id']))
{ 
		
		echo"<center><font size='10px'><b>Register Successfull</b></font></center>";
}

if(isset($_REQUEST['c']))
{ 
		
		echo"<center><font size='10px'><b>Already Register</b></font></center>";
}

$msg="";
if(isset($_REQUEST['case']))
{
	$caseno=$_REQUEST['case'];
	if($caseno==1)
		$msg="Password Miss Match";
	if($caseno==2)
		$msg="User Not Found";
}
echo"<div class='row'>
<div class='col-md-12'>
<center><font size='5px'><b>$msg</b></font></center></div></div>";

include_once("homemainmenu.php");
//echo "<div class='row'>";
//echo "<div class='col-md-3 '>";
//include_once("leftmenu1.php");
//echo "</div>" ;

echo"<div class='col-md-12'>
			<div class='panel-body bg-img home-min-h'>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			
			<div class='row col-md-offset-5'>
			<label class='col-md-offset-2'>
			<h4 style='color:white;'> THE BEST CLINIC EVER </h4>
			</label>
			</br>
			
			<label class='col-md-offset-1'>
			<h3 style='color:white;'> WE CARE FOR YOUR HEALTH</h3>
			</label>
			
			</div>
			
			</div>";
"</div>";
echo"</div>";
echo"</div>";
echo"<br/>";

include_once("footer1.php");

?>
</div>
</body>
</html>