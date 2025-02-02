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
   
   <script>
   function call()
   {
	   alert('ARE YOU SURE TO BOOK THIS SLOT FOR YOUR APPOINTMENT');
   }
   
   
   </script>
   
  <body>
 <div class="container-fluid"> <!--container |container-fluid -->

<?php

include_once("head1.php");
include_once("mainmenu1.php");
echo "<div class='row'>";
echo "<div class='col-md-3 '>";
include_once("clinicleftmenu.php");
echo "</div>" ;
echo"<div class='col-md-9'>
<div class='panel panel-primary min_h'>
			<div class='panel-heading'>
<center><font size='4px'>Book Appointment</font></center></div>
			<div class='panel-body'>";

		if(isset($_REQUEST['id']))
	
	{
	echo "	
<div class='col-md-12'>
<div class='panel'>
<div class='thumbnail'>
        <div class='panel-success'>
        <div class='panel-heading'>
        <center><h3>";
		

		$id=$_REQUEST['id'];
		echo"Slot Added successfully your id=$id";
		
	

		echo"
		<center></h3>
		
        </div>
        </div>
        

</div>
</div>
</div>
";

	}
			
if(isset($_POST['did']))
{
	$did=$_POST['did'];
	$sql="select * from doctor where id=$did";
	$b_date=$_POST['date'];
	//echo $b_date;
	echo "	
<div class='col-md-12'>
<div class='panel'>
<div class='thumbnail'>
        <div class='panel-success'>
        <div class='panel-heading'>
        <center><h3>$b_date<center></h3>
		
        </div>
        </div>
        

</div>
</div>
</div>
";

	
	$query= mysqli_query($con,$sql);
	$row_data=mysqli_fetch_assoc($query);
	//print_r($row_data);
	 $working_days=$row_data['workingdays'];
	$m_stime=$row_data['m_stime'];
	$m_etime=$row_data['m_etime'];
	$e_stime=$row_data['e_stime'];
	$e_etime=$row_data['e_etime'];
	$c_time=$row_data['time'];



$temp=explode("-",$b_date);
$b_date=$temp[2]."-".$temp[1]."-".$temp[0];
$sql="SELECT time FROM `appointment` WHERE did=$did and date='$b_date'";
//echo "$sql";
$query= mysqli_query($con,$sql);
$r=0;
$app_list=array();
while($temp=mysqli_fetch_array($query))
{	$app_list[$r]=$temp[0];
$r++;
}
//print_r($app_list);
//exit;
$date=date_create($b_date);
$c_day= date_format($date,"D");

//echo "<hr/>c_day=$c_day";
//exit;


	$working_days=explode("/",$working_days);
	//echo "<br/>";
//	print_r( $working_days);
	echo "<br/>";


echo "	
<div class='col-md-6'>
<div class='panel panel-primary'>
<div class='thumbnail'>
        <div class='panel panel-info'>
        <div class='panel-heading'>
        <center><h3>Morning Slot<center></h5>
        </div>
        </div>
        <center><h5>";
		
if(in_array($c_day,$working_days))
	{	

		$m=0;
		if($m<10)
			$m="0".$m;
	
	
		for($s=$m_stime;$s<$m_etime;$s++)
		{
			for($m=0;$m<60; $m+=$c_time)
			{
		
		$s1=$s.":$m:00";
			
		
			$startTime = date("27-05-2022 $s1");		
			$temp = strtotime("+15 minutes",strtotime($startTime));
			$se=date('h:i:sa',$temp);
			
			$ap_time1=$s1." to ".$se;
			
			$ap_time=$s1."_to_".$se;
				if(in_array($ap_time,$app_list) && count($app_list)>0)
					echo "$ap_time1 book<hr/>";
				else	
					echo "<a href='data1.php?did=$did&ap_time=$ap_time&b_date=$b_date' onclick='call()'>$ap_time1</a><hr/>";


				}
		}


	 
	}else
	{echo "not found working_days:";
	print_r($working_days);

	}

		
	echo"	<center></h3>
        
        

</div>
</div>
</div>
";

echo "	
<div class='col-md-6'>
<div class='panel panel-primary'>
<div class='thumbnail'>
        <div class='panel panel-info'>
        <div class='panel-heading'>
        <center><h3>Evining Slot<center></h5>
        </div>
        </div>
        <center><h5>";

if(in_array($c_day,$working_days))
	{	

		$m=0;
		if($m<10)
			$m="0".$m;
	
	
		for($s=$e_stime;$s<$e_etime;$s++)
		{
			for($m=0;$m<60; $m+=$c_time)
			{
		
		$s1=$s.":$m:00";
			
		
			$startTime = date("27-05-2022 $s1");		
			$temp = strtotime("+15 minutes",strtotime($startTime));
			$se=date('h:i:sa',$temp);
			
			
			$ap_time1=$s1." to ".$se;
			
			$ap_time=$s1."_to_".$se;
			if(in_array($ap_time,$app_list) && count($app_list)>0)
					echo "$ap_time1 book<hr/>";
				else	
					echo "<a href='data1.php?did=$did&ap_time=$ap_time&b_date=$b_date' onclick='call()'>$ap_time1</a><hr/>";

			
						
			}
		}


	 
	}else
	{echo "not found working_days:";
	print_r($working_days);

	}
	echo"	<center></h3>
        
        

</div>
</div>
</div>
";

echo "</div>";
		/*$s="08:00:00";
			$startTime = date("2022-05-25 $s");
	
		echo '<br/>Starting Time: '.$startTime;

	$endTime = strtotime("+15 minutes",strtotime($startTime));

echo "<br/>new time.".date('h:i:sa',$endTime);
echo "<hr/>stime=$m_stime<hr/>";
echo "<hr/>"; */
	
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
