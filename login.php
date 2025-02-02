<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("linkfile1.php");
  ?>
   </head>
  <body>
 <div class="container"> <!--container |container-fluid -->

<?php

include_once("head1.php");
include_once("mainmenu1.php");
echo "<div class='row '>";
echo "<div class='col-md-3'>";
include_once("leftmenu1.php");
echo"</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'><center><font size='4px'>login</font></center></div>
			<div class='panel-body'>
			
<div class='row'>
<label class='col-md-offset-1 col-md-2'>Username</label>
<div class='col-md-6'><input type='text' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Password</label>
<div class='col-md-6'><input type='password' class='form-control'/></div>
</div>
<br/>
			
<center><input type='button' value='Login' class='btn btn-info'/></center>
</div>	
			
</div>";		
echo"</div>";
echo"</div>";



include_once("footer1.php");

?>
</div>
</body>
</html>