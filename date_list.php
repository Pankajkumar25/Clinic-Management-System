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
<center><font size='4px'>View all patients according to date</font></center></div>
			<div class='panel-body'>";
			
			if(isset($_REQUEST['act']))
			{
				$act=$_REQUEST['act'];
				$id=$_REQUEST['id'];
				
				if($act==1)
				{
					$sql="update appointment set status='prescribed' where id=$id";
					if(mysqli_query($con,$sql))
					{
						echo"status updated";
					}
					else
					{
						echo"query error";
					}
					
				}
				
				
			}
			
			
			
			$did=30;
			$date=date("d-m-Y");
			$sql="SELECT id,pid,time,status FROM appointment where did='$did' and date='$date'";
				
				$query=mysqli_query($con,$sql);
			    $num=mysqli_num_rows($query);
				$col_num=mysqli_num_fields($query);
				if($num>0)
				{
				
						echo "<table  class='table table-bordered' bg-primary >";
					
					echo "<tr class='bg-info'>";
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					echo "<td>$col_name</td>";
						}
					echo "<td>Prescribe</td>";

					echo "</tr>";
					
					while($row_data=mysqli_fetch_array($query))
					{
					//print_r($row_data);
					echo "<tr>";
						for($i=0;$i<$col_num;$i++)
						{
							if($i==1)
							{
								$sql1="SELECT name,gender FROM `patient` WHERE id='$row_data[1]'";
								$query1=mysqli_query($con,$sql1);
								$row_data1=mysqli_fetch_row($query1);
								echo "<td>$row_data1[0] ($row_data1[1])</td>";

							}
							else
						echo "<td>$row_data[$i]</td>";
					
			
						}
						
						
					if($row_data[3]==0)
					{
		//				echo"<br/>";
		//				echo"<br/>";
						
						
							echo "<td><a href='doc_prescription.php?id=$row_data[id]&act=1' class='btn btn-success'>Prescribe</a></td>";
						
						//echo "<div class='col-md-3'><a href='doc_prescription.php?id=$row_data[0]&act=3' class='btn btn-info'>Not Come</a></div>";
					}
					else
					{
						echo "done ";
					}
						echo"<tr/>";
					}
					
		echo "</table>";
				}
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