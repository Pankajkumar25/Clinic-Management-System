<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("link_file.php");
  ?>
   </head>
  <body>
 <div class="container"> <!--container |container-fluid -->


<?php
include_once("head.php");
include_once("mainmenu.php");
echo "<div class='row'>";
echo "<div class='col-md-3'>";
include_once("leftmenu.php");
echo "</div>";

echo "<div class='col-md-6'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>new Page1</div>
			<div class='panel-body'>new page1 skdjhfkdh fksdhkfhsdhfsdhfdskhfksdh fhsdkfshkhfskdhfsjhskfhsdhkfshdjkf</div>
			
		
	</div>";

echo "</div>";


echo "<div class='col-md-3'>";
include_once("add_window.php");
echo "</div>";

echo "</div>";

include_once("footer.php");

?>
</div>

</body>
</html>