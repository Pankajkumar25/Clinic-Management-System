<?php require_once("profile_info.php");?>
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
include_once("clinicleftmenu.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>main head </div>
			<div class='panel-body'>main body
			</div>
			
		
	</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>