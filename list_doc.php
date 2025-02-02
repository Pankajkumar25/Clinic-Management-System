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
<center><font size='4px'>Doctor</font></center></div>
			<div class='panel-body'>";
			
            if(isset($_POST['find']) || isset($_REQUEST['id'])  )
			{
				
				if(isset($_POST['find']))
				{$user_id=$_POST['docid'];
			echo"<a href='sreachdoc.php' class='btn btn-info'>back</a><br/>";
				}
				else
				{$user_id=$_REQUEST['id'];
				echo"<a href='sreachdoc.php' class='btn btn-info'>back</a><br/>";
				}
				
				$sql="select * from doctor where id='$user_id' ";

				$query_result=mysqli_query($con,$sql);
				$num=mysqli_num_rows($query_result);
				
				
			if($num>0)
			{
				$row=mysqli_fetch_row($query_result);
				
			  echo"<br/>";
			
			
			$col_count=mysqli_num_fields($query_result);
				echo "<table  class='table table-bordered' bg-primary >";
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
				echo "<center><h2>not found</h2></center>";
			}
		}
		else
		{
			
		
			
			echo"<form action='sreachdoc.php' method='post'>
			
			<div class='row'>
			<label class='col-md-1'>Id:</label>
			<div class='col-md-6'>
			<input type='text' name='docid' class='form-control' placeholder='Find Your Doctor'/></div>
			
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