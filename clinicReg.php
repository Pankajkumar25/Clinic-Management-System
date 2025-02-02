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

<input type='button' value='Clinic Registration' class='btn btn-info' data-toggle='modal' data-target='#a1'/>

<div class='modal modal-md' role='dialog' id='a1' >
	<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-info'><center><font size='3px'>Registration</font></center></div>
		<div class='modal-body'>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Name</label>
<div class='col-md-6'><input type='text' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Email</label>
<div class='col-md-6'><input type='text' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Phone No</label>
<div class='col-md-6'><input type='text' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Pin Code</label>
<div class='col-md-6'><input type='text' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Location</label>
<div class='col-md-6'><textarea name='textarea' rows=4 cols=22 class='form-control'></textarea></div>
</div>
<br/>

<center><input type='button' value='Register' class='btn btn-info'/></center>
</div>";
			
echo "</div>";
echo "</div>";
echo "</div>";


include_once("mainmenu1.php");
echo "<div class='row'>";
echo "<div class='col-md-3'>";
include_once("leftmenu1.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>main head</div>
			<div class='panel-body'>main body</div>
			"</div>";
echo"</div>";

include_once("footer1.php");

?>
</div>
</body>
</html>