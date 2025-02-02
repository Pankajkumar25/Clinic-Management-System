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
include_once("docleftmenu.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-primary min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Print</font></center></div>
			<div class='panel-body'>";
			
			$sql="SELECT id,apid,pid,illness,diagnosis,restriction FROM doc_pre";
				$query=mysqli_query($con,$sql);
			    $num=mysqli_num_rows($query);
				$col_num=mysqli_num_fields($query);
				if($num>0)
				{
					
					
						echo "<table  class='table table-bordered' bg-primary >";
					echo "<tr class='bg-primary'>";
					
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					echo "<td>$col_name</td>";
						}
					echo "<td>Print</td>";
					echo "</tr>";
					
					while($row_data=mysqli_fetch_array($query))
					{
					//print_r($row_data);
					echo "<tr>";
						for($i=0;$i<$col_num;$i++)
						{
				echo "<td>$row_data[$i]</td>";
						}
						echo "<td>
						<a href='view_print.php?id=$row_data[0]' class='btn btn-info'>View Print</a></td>";
				//echo "</div><br/>";
					echo"</tr>";	
	}
	
						echo "</table>";	}
			
				else
				echo "not found<br/>$sql";	
			
echo"</div>";
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>