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

include("head1.php");
include("mainmenu1.php");
echo "<br/>";
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("patleftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-primary'>
<div class='panel-heading'>
Find doctor according to location and view profile
</div>
<div class='panel-body min_h'>";



if(isset($_POST['find']))
{
	echo "<a href='sreachdoc.php' class='close'><button class='text-primary'>&times;</button></a>";
	echo "<br/>";
	$id=$_POST['id'];
	//echo "case 2<br/>";
	//echo "empid=$empid";
	$query="select id,name,specialist,time from doctor where id like'%$id%' or name like'%$id%' or address like '%$id%' or time like '%$id%' or specialist like '%$id%' ";
	//echo "<br/>$query";

	$query_result=mysqli_query($con,$query);
		$num=mysqli_num_rows($query_result);
	$no_of_cols=mysqli_num_fields($query_result);

		
	if($num>0)
{
$col_list=Array();

for($c=0;$c<$no_of_cols;$c++)
{
	
	$temp=mysqli_fetch_field($query_result);
	//echo $temp->name;
	$col_list[$c]=$temp->name;
	//echo "<hr/>";
}

//print_r($col_list);

//echo "num:$num<br/>";
echo"</br>";
echo "<table  class='table table-bordered' bg-primary >";
					echo "<tr class='bg-primary'>";

for($c=0;$c<count($col_list);$c++)
echo "<th>$col_list[$c]</th>";
echo "<td><b>View Profile</b></td>";
echo "</tr>";

while($row_data=mysqli_fetch_assoc($query_result) )

{
	
	echo "<tr>";
	for($c=0;$c<count($col_list);$c++)
	{$col_name=$col_list[$c];
		echo "<td>$row_data[$col_name]</td>";
	
		}

		echo"<td><a href='list_doc.php?&act1=3&id=$row_data[id]'class='btn btn-primary'>View</a></td>";
	
	//echo "<td>$row_data[id]</td>";
	//echo "<td>$row_data[dname]</td>";
	echo "</tr>";
	//print_r($row_data);
	
}
echo"</table>";
}
	else
		{
			
			echo"not found";
			//header("Location:sr_time.php");
		}
		
	
	
}
else
{
echo "<form action='sreachdoc.php' method='post'>
<div class='row'>
<div class='col-md-3'>Search in the area</div>
<div class='col-md-7'>
<input type='text' name='id' class='form-control'  placeholder='Search'/>
</div>
<div class='col-md-2'>
<input type='submit' value='Find' name='find' class='btn btn-info'/>
</div>
</div>
</form>";
}

echo "</div>
</div>
";
echo "</div>";

echo "</div>";


include("footer1.php");


?>
</div>
</body>
</html>