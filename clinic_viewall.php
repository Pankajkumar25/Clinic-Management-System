<?php include("profile_info.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php  
 require("linkfile1.php");
 ?>
</head>
<body>

<div class="container-fluid">


<?php
ob_start();
//require_once("mysqli_connection.php");
include("head1.php");
include("mainmenu1.php");
echo "<br/>";
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("docleftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-primary'>
<div class='panel-heading'>



<label>
View   
</label>

</div>
<div class='panel-body min_h'>
";


if(isset($_REQUEST['act1']))
{
	$act1=$_REQUEST['act1'];
	$id=$_REQUEST['id'];
	//echo "act=$act& id=$id";
	
	if($act1==3)
	{
		$query="select * from clinic where id=$id ";
	//echo "<br/>$query";
	$query_result=mysqli_query($con,$query);
	$num=mysqli_num_rows($query_result);
	//echo "<br/>num=$num<br/>";
	if($num>0)
	{		
		$row_data=mysqli_fetch_row($query_result);
		//echo "<br/>$row_data[1]<br/>$row_data[2]";
		//print_r($row_data);	
		echo "<table class='table'>";
		//echo "<tr><th>Profiles:</th><td><img src='$row_data[11]' width='100' height='100' class='img-circle'/></td></tr>";

		//echo "<tr><th>Preview Image</th><td><a href='$row_data[11]'><img src='$row_data[11]'></a></td></tr>";		
		echo "<tr><th>Id:</th><td>$row_data[0]</td></tr>";
		echo "<tr><th>Name:</th><td>$row_data[1]</td></tr>";
		echo "<tr><th>pincode:</th><td>$row_data[2]</td></tr>";
		echo "<tr><th>Location:</th><td>$row_data[3]</td></tr>";
		
		echo "</table>";
		
		
	
}
	}

echo"</table>";
//echo "<center><h2 class='bg-info'>Total Profiles:$num</h2></center><br/>";
}
else
{
	echo "<center>Not Found</center>";
}
		if(mysqli_query($con,$query))
		{
			//echo"Your data is show successfully";
			//header("Location:find_patient.php?caseno=2&id=$id");
			
		}
    else
	{ 	
		//echo "error<br/>$sql";
	}
	



echo"

<a href='clinicprofile.php'>
<div class='btn btn-success'>
BACK</div>   
</a>

</div>
</div>
";


echo "</div>";

echo "</div>";


include("footer1.php");


?>


</div>

</body>

</html>