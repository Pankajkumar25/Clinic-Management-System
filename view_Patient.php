<?php

require_once("connection.php");
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
include_once("leftmenu1.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Find Patients</font></center></div>
			<div class='panel-body'>";
			

			if(isset($_POST['find']) || isset($_REQUEST['id']))
			{
				
				if(isset($_POST['find']))
				{$user_id=$_POST['pid'];
			echo"<a href='view_Patient.php'>back</a><br/>";
				}
				else
				{$user_id=$_REQUEST['id'];
				echo"<a href='viewall.php'>back</a><br/>";
				}
				//echo"pid=$p_id";
				$sql="select * from patient where id='$user_id' or email='$user_id'";
//echo $sql;
				$query_result=mysqli_query($con,$sql);
				$num=mysqli_num_rows($query_result);
				//echo"num=$num";
				
			if($num>0)
			{
				$row=mysqli_fetch_row($query_result);
				$col_count=mysqli_num_fields($query_result);
				/*echo'<table border=1 width=100%>';
				*/
				for($i=0;$i<$col_count;$i++)
				{
					$temp=mysqli_fetch_field($query_result);
					$col_name=$temp->name;
					echo "
					
					<div class='row'>
					<label class='col-md-2'>$col_name</label>
					<div class='col-md-6'>$row[$i]</div></div><br/>";
				}
				//echo "</table>";
			
			}
			else
			{
				echo "<center><h2>not found</h2></center>";
			}
		}
		else
		{
			
		
			
			echo"<form action='view_patient.php' method='post'>
			<div class='row'>
			<label class='col-md-1'>Id:</label>
			<div class='col-md-6'>
			<input type='text' name='pid' class='form-control'/></div>
			
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