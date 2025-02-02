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
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='4px'>View All Doctors</font></center></div>
			<div class='panel-body'>";
			
			
$pageno=0;
if(isset($_REQUEST['pageno']))
$pageno=$_REQUEST['pageno'];

$size=4;
$offset=$pageno*$size;		

//$sql="SELECT id,name FROM patient ";
$sql="SELECT id,name,address,gender FROM doctor";
//$sql="SELECT id,name FROM patient";

			
$query=mysqli_query($con,$sql);
$total_rows=mysqli_num_rows($query);
$total_pages=round($total_rows/$size);

$sql1="SELECT id,name,address,gender FROM doctor limit $offset,$size ";

//$sql="SELECT id,name,address,gender FROM doctor limit $offset,$size";
//echo "<br/>size=$size pageno=$pageno offset=$offset<br/>";
//echo $sql;

$query_result= mysqli_query($con,$sql1);
$num=mysqli_num_rows($query_result);
$no_of_cols=mysqli_num_fields($query_result);

$col_list=Array();

for($c=0;$c<$no_of_cols;$c++)
{
	
	$temp=mysqli_fetch_field($query_result);
	//echo $temp->name;
	$col_list[$c]=$temp->name;
	//echo "<hr/>";
}

while($row_data=mysqli_fetch_assoc($query_result) )
{
	echo "<div class='col-md-6'>";
	echo "<div class='panel panel-primary'>";
	echo"<div class=' panel-heading'>Doctor Data
	</div>";
	echo "<table class='table table-bordered'>";
	for($c=0;$c<count($col_list);$c++)
	{
		$col_name=$col_list[$c];
		if($col_name)
		
		echo "<tr><th>$col_name</b></th><td>$row_data[$col_name]</td></tr>";	
		else
		
	echo "<tr><th>$col_name</th><td>$row_data[$col_name]</td></tr>";
	
	}
	//echo "<tr><th>Cover Image:</th><td><img src='c1.jpg' width='100' height='100'/></td></tr>";
	echo "<tr><th>Profile:</th><td>
<a href='clinicfinddoc.php?id=$row_data[id]' class='btn btn-info'>View Profile</a></div></td></tr>";
	
	echo "</table>";
	echo "</div>";

//echo "<center>";


echo "</div>";


}
echo "<center>";
if($pageno>0)
{
$lastpageno=$pageno-1;
echo "<a href='clinicviewalldoc.php?pageno=$lastpageno' class='btn btn-info'>Previous</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

for($i=0,$j=1;$i<$total_pages;$i++,$j++)
{
	echo "<a href='clinicviewalldoc.php?pageno=$i'>$j</a> &nbsp;&nbsp;";
}


if($pageno<$total_pages-1)
{
$pageno++;
echo "<a href='clinicviewalldoc.php?pageno=$pageno' class='btn btn-info'>Next</a>";
}
echo "</center>";



echo "

</div>
</div>
";
			
			
			
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>


