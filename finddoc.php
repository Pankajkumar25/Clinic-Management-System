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
<div class='panel panel-primary min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Find Doctors</font></center></div>
			<div class='panel-body'>";
			
            if(isset($_POST['find']) || isset($_REQUEST['id'])  )
			{
				
				if(isset($_POST['find']))
				{$user_id=$_POST['docid'];
			echo"<a href='finddoc.php' class='btn btn-info'>Back</a><br/>";
			echo"<br/>";
				}
				else
				{$user_id=$_REQUEST['id'];
				echo"<a href='viewalldoc.php' class='btn btn-info'>back</a>";
				}
				
				$sql="select * from doctor where id='$user_id' ";

				$query_result=mysqli_query($con,$sql);
				$num=mysqli_num_rows($query_result);
				
				
			if($num>0)
			{
				$row=mysqli_fetch_row($query_result);
				
				
				
						
			echo"<form action='bookappointment.php' method='post'>
			<div class='row'>
			<label class='col-md-2'>Select Date:</label>
			<div class='col-md-6'>
			<input type='date' name='date' class='form-control'/>
			<input type='hidden' name='did' value='$row[0]'/>
			</div>
			<div class='col-md-2'>
			<input type='submit' value='Book Appointment' class='btn btn-success'/>
			</div>
			</div>
			</form>
			</br>
			";
			
				
				
			
			$col_count=mysqli_num_fields($query_result);
				echo "<table  class='table table-bordered' bg-primary >";
					echo "<tr class='bg-primary'>";
					
				for($i=0;$i<$col_count;$i++)
				{echo"<tr>";
					$temp=mysqli_fetch_field($query_result);
					$col_name=$temp->name;
					echo "<td>$col_name</td>";
					echo "<td>$row[$i]</td>";
				}
				echo "</tr>";
			echo"</table>";
			
			}
			else
			{
				
			echo "	
			<br>
<div class='col-md-12'>
<div class='panel'>
<div class='thumbnail'>
        <div class=' panel-info'>
        <div class='panel-heading'>
        <center><h3>NOT FOUND<center></h3>
        </div>
        </div>
        

</div>
</div>
</div>
";
	
				
				
			
			
			
			}
		}
		else
		{
			
		
			
			echo"<form action='finddoc.php' method='post'>
			
			<div class='row'>
			<label class='col-md-1'>Id:</label>
			<div class='col-md-6'>
			<input type='text' name='docid' class='form-control'/></div>
			
			<div class='col-md-2'>
			<input type='submit' name='find' value='Find' class='btn btn-info'/>
			</div>
			</div>
			</form>
			";
		}

echo"</div>";
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>