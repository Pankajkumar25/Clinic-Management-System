<?php
require_once("profile_info.php");
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
echo "<div class='row'>";
echo "<div class='col-md-3 '>";
include_once("patleftmenu.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Patient History</font></center></div>
			<div class='panel-body'>
			<label class='col-md-1'>Id :</label>
			<div class='col-md-6'>
			<input type='text' name='aaa' class='form-control'/></div>
			
			
			<input type='button' value='Search' class='btn btn-info'/>
			
			</div>
			
			
			
			
			
		
	</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>