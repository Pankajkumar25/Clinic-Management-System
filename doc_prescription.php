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
include_once("docleftmenu.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-primary min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Doctor Prescription</font></center></div>
			<div class='panel-body'>";
					
					if(isset($_REQUEST['id']))
						$id=$_REQUEST['id'];
					$sql1="SELECT id,name,gender,dob FROM `patient` WHERE id=(SELECT pid FROM appointment where id=$id)";
				//	echo $sql1;
echo "<br/>";					
							$query1=mysqli_query($con,$sql1);
								$row_data1=mysqli_fetch_row($query1);
						//print_r($query1);
echo"<form action='data1.php' method='post'>


<input type='hidden' name='apid' value=$id />
<input type='hidden' name='pid' value=$row_data1[0] />



<div class='col-md-12'>
<div class='panel panel'>
<div class='thumbnail'>
        <div class=' panel-info'>
        <div class='panel-heading'>
        <center><h3>Patient Record<center></h3>
        </div>
        </div>
</div>
</div>
</div>

<div class='row'>
<label class='col-md-1'>Id:</label>
<div class='col-md-4'>$row_data1[0]</div>

<div class='row'>
<label class='col-md-1'>Name:</label>
<div class='col-md-4'>$row_data1[1]</div></div>
</div>

<div class='row'>
<label class='col-md-1'>DOB:</label>
<div class='col-md-4'>$row_data1[3]</div>

<div class='row'>	
<label class='col-md-1'>Gender:</label>
<div class='col-md-4'>$row_data1[2]</div>
</div></div>
<br><br>


<u><font size='4px'>Doctor Note:-</font></u>
<br/><br/>

<div class='row'>
<label class='col-md-2'>Illness/Injury</label>
<div class='col-md-8'>
<textarea name='illness' id='illness' rows=3 cols=53 class='form-control'></textarea></div>
</div>
<br/>

<div class='row'>
<label class='col-md-2'>Diagnosis</label>
<div class='col-md-8'>
<textarea name='diagnosis' id='diagnosis' rows=3 cols=53 class='form-control'></textarea></div>
</div>
<br/>


<div class='row'>
<label class='col-md-2'>Restrictions</label>
<div class='col-md-8'>
<textarea name='restriction' id='restriction' rows=3 cols=53 class='form-control'></textarea></div>
</div>
<br/>

  
<div class='row'>
<div class='col-md-12'>
<center><input type='submit' name='DPre' value='Submit' class='btn btn-info'/> &nbsp;&nbsp;&nbsp; 
<input type='reset'  value='Reset' class='btn btn-danger'/>
</center></div>
</div>

</form>";			

echo"</div>";
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>