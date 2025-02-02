<?php require_once("connection.php");?>

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
echo "<div class='row'>";
echo "<div class='col-md-3 '>";
include_once("leftmenu1.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='4x'>View all Patient</font></center></div>
			<div class='panel-body'>";
			
				$sql="SELECT id,name,email FROM patient";
				$query=mysqli_query($con,$sql);
			    $num=mysqli_num_rows($query);
				$col_num=mysqli_num_fields($query);
				if($num>0)
				{
					
					echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					echo "<label class='col-md-2'>$col_name</label>";
						}
					echo "</div>";
					
					while($row_data=mysqli_fetch_array($query))
					{
					//print_r($row_data);
					echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
				echo "<div class='col-md-2'>$row_data[$i]</div>";
						}
						echo "<div class='col-md-2'><a href='view_patient.php?id=$row_data[0]' class='btn btn-info'>View Profile</a></div>";
				echo "</div><br/>";
					}
	
				}
				else
				echo "not found<br/>$sql";	
			
			echo"
			</div>";
			
		
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>