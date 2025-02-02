<?php
require_once("profile_info.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("linkfile1.php");
  ?>
    <script>

function edit_msg()
{
	return confirm("Are you sure to Delete Appointment");
  
}
</script>
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
<center><font size='4px'>My Appointments</font></center></div>
			<div class='panel-body'>";
			
			if (isset($_REQUEST['act']))
			{
				$act=$_REQUEST['act'];
				$id=$_REQUEST['id'];
				
				if ($act==2)
				{
					$sql="update appointment set status='patient_id=$id' where id=$id";
					if(mysqli_query($con,$sql))
					{
						echo"your appointment has been deleted<br/>";
					}
					else
					{
						echo"error in coding";
					}
					
					
				}
				
				
				
				
			}
			
			
			
			$pid=$_SESSION['profile_id'];
			
			$sql="SELECT * FROM appointment where pid=$pid";
			$query=mysqli_query($con,$sql);
			    $num_of_records=mysqli_num_rows($query);
//				echo"num_of_records=$num_of_records<br/>";
			$pageno=0;
			
			if(isset($_REQUEST['pageno']))
				$pageno=$_REQUEST['pageno'];
			$size=3;
			$totalpages=$num_of_records/$size;
			//echo"totalpages=$totalpages<br/>";
			$offset=$pageno * $size;
			$sql="SELECT * FROM appointment where pid=$pid limit $offset,$size";
			//echo"$sql<br/>";
				$query=mysqli_query($con,$sql);
			    $col_num=mysqli_num_fields($query);
				
				
					echo "<table  class='table table-bordered' bg-primary >";
					echo "<tr class='bg-primary'>";
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					echo "<td>$col_name</td>";
					//echo "<label class='col-md-1'>$col_name</label>";
						}
					echo "<td>Delete</td>";
					echo "</tr>";
					while($row_data=mysqli_fetch_array($query))
					{
						echo "<tr>";
					//print_r($row_data);
					//echo "<div class='row'>";

						for($i=0;$i<$col_num;$i++)
						{
				echo "<td>$row_data[$i]</td>";
				//echo "<div class='col-md-1'>$row_data[$i]</div>";
						}
					echo"<td>";
					//	echo "<div class='col-md-3'>	<a href='finddoc.php?id=$row_data[0]' class='btn btn-info'>View Profile</a></div>";
					if($row_data[5]=="0")
					{
						echo"<a href='myappointments.php?pageno=$pageno&act=2&id=$row_data[id]' onclick='return edit_msg()'class='btn btn-danger'>Delete Appointment</a>";
					}	
				
				echo "</td>";
				echo "</tr>";
				
					}
			echo"</table";		
					if($pageno>0)
						
					{
						
					
					$lastpageno=$pageno-1;
					
					
					echo"<a href='myappointments.php?pageno=$lastpageno'>Previous</a>";
					}
				echo"&nbsp;&nbsp;";
				for($i=0,$j=1;$i<$totalpages;$i++,$j++)
					echo"<b><a href='myappointments.php?pageno=$i'>$j</a></b>&nbsp;&nbsp;";
	
					if($pageno<$totalpages-1)
					{
					$pageno++;
	echo"<a href='myappointments.php?pageno=$pageno'>Next</a>";
					}		
			
"</div>";

"</div>";
echo"</div>";
echo "</div>";


//include_once("footer1.php");

?>
</div>
</body>
</html>