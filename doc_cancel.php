<?php
//session_start();
//$_SESSION['did']=30;
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
$did=$_SESSION['profile_id'];
echo"<div class='col-md-9'>
<div class='panel panel-primary min_h'>
			<div class='panel-heading'>
<center><font size='4px'>View and delete appointment</font></center></div>
			
			<div class='panel-body'>";
			
			/*
			if(isset($_REQUEST['DELETE']))
				
				{
					
					$date=date("d-m-Y");
			
			$ql="DELETE FROM `appointment` WHERE date='$date'";
					if(mysqli_query($con,$ql))
					{
						//$num=mysqli_num_fields($query_result);
					ECHO"$ql";
					}
				}
			*/
			
			
			
			echo"
			
			<form action='doc_cancel.php' method='post'>
			
			<div class='row'>
			<label class='col-md-2'>Select Date</label>
			<div class='col-md-5'>
			<input type='date' name='date' class='form-control'/>
			</div>
			<input type='submit' value='Find' name='find' class='btn btn-danger'/></div>
			</div>			
			</form>
				
			";
if(isset($_REQUEST['case']))
{
$case=$_REQUEST['case'];
$date=$_REQUEST['date'];
if($case=="all")
{
	$code=date("d/m/20y")."-$did";
	$sql="update  `appointment` set status='$code' where date='$date' and did=$did";
	if(mysqli_query($con,$sql))
	echo"all apointments has been deleted";
	else
	echo"error <br/> $sql";
	
}	
	
	}
else if(isset($_POST['date']))
{	
$date=$_POST['date'];
$temp=explode("-",$date);
$date=$temp[2]."-".$temp[1]."-".$temp[0];

$date2=date("d-m-20y");	
$date1=$date;

$str1=strtotime($date1);
//echo "date1=$date1 str1=$str1";

$str2=strtotime($date2);
//echo "<br/>date2=$date2 str2=$str2";

$diff=$str1-$str2;
//echo "<br/>diff=$diff";
$days=$diff/(60*60*24);
//echo "<br/>days=$days";

if($days>-1)
{

		$where_con="where did=$did and date='$date'";
			echo "Date:$date";

			
			$sql="SELECT * FROM appointment  $where_con ";
			echo $sql;
			echo "<br/>";
		$query=mysqli_query($con,$sql);
			    $col_num=mysqli_num_fields($query);
				$num=mysqli_num_rows($query);
				if($num>0)
				{
					
					echo "<a href='doc_cancel.php?date=$date&case=all' class='btn btn-info'>$num Delete All</a>";
					
					echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
							$temp=mysqli_fetch_field($query);
							$col_name=$temp->name;
					echo "<label class='col-md-1'>$col_name</label>";
						}
					echo "</div>";
					
					while($row_data=mysqli_fetch_array($query))
					{
					//print_r($row_data);
					echo "<div class='row'>";
						for($i=0;$i<$col_num;$i++)
						{
				echo "<div class='col-md-1'>$row_data[$i]</div>";
						}
						//echo "<div class='col-md-3'>
						//<a href='finddoc.php?id=$row_data[0]' class='btn btn-info'>View Profile</a></div>";
				
				echo "</div><br/>";
					}
				}
				else
					echo "<br/>not found";
					
}
else
	echo "can not cancel";
}			
"</div>";
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>
</div>
</body>
</html>