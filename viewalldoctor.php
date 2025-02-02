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
 <div class="container"> <!--container |container-fluid -->

<?php

include_once("head1.php");
include_once("mainmenu1.php");
echo "<div class='row'>";


echo"<div class='col-md-12'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='4px'>View all Doctors</font></center></div>
			<div class='panel-body'>";
			$sql="SELECT * FROM doctor";
			$query=mysqli_query($con,$sql);
			    $num_of_records=mysqli_num_rows($query);
				//echo"num_of_records=$num_of_records<br/>";
			$pageno=0;
			
			if(isset($_REQUEST['pageno']))
				$pageno=$_REQUEST['pageno'];
			$size=4;
			$totalpages=$num_of_records/$size;
			//echo"totalpages=$totalpages<br/>";
			$offset=$pageno * $size;
			$sql="SELECT * FROM doctor limit $offset,$size";
			//echo"$sql<br/>";
				$query=mysqli_query($con,$sql);
			    $col_num=mysqli_num_fields($query);
				
					
					echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					//echo "<label class='col-md-1'>$col_name</label>";
						}
					echo "</div>";
					//$row_data=mysqli_fetch_array($query);
					
					while($row_data=mysqli_fetch_array($query))
					{
						//echo"<div class='row'>";
						echo"<div class='col-md-4'>";
						echo"<div class='panel panel-info'>";
						echo"<div class='panel-heading'>";
						echo"doctor_id=$row_data[0]";
						
						echo"</div>";
						
						echo"<div class='panel-body'>";
						echo"doctor_name=$row_data[1]<br/>";
						echo"doctor_email=$row_data[2]<br/>";
						
						echo"</div>";
						echo"</div>";
						echo"</div>";
						//echo"</div>";
						
					//print_r($row_data);
					/*echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
				echo "<div class='col-md-1'>$row_data[$i]</div>";
						}
						echo "<div class='col-md-1'>
						<a href='finddoc.php?id=$row_data[0]' class='btn btn-info'>View Profile</a></div>";
				
				echo "</div><br/>";*/
					}
					echo"<br/>";
					if($pageno>0)
					{
						
					
					$lastpageno=$pageno-1;
					
					echo"<a href='viewalldoctor.php?pageno=$lastpageno'>Previous</a>";}
				echo"&nbsp;&nbsp;";
				for($i=0,$j=1;$i<$totalpages;$i++,$j++)
					echo"<b><a href='viewalldoctor.php?pageno=$i'>$j</a></b>&nbsp;&nbsp;";
	
					if($pageno<$totalpages-1)
					{
					$pageno++;
	echo"<a href='viewalldoctor.php?pageno=$pageno'>Next</a>";
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