<?php
session_start();
echo "data page</br/>";
$con_status=require_once("connection.php");
if($con_status==false)
	exit;


if (isset($_POST['DPre']))
{
	$illness=$_POST['illness'];
	$diagnosis=$_POST['diagnosis'];
	$restriction=$_POST['restriction'];
	echo $pid=$_POST['pid'];
	echo "<br/>";
	echo $apid=$_POST['apid'];
	echo "<br/>";
echo"illness=$illness<br/>";	
echo"diagnosis=$diagnosis<br/>";	
echo"restriction=$restriction<br/>";	

$sql="insert into doc_pre(apid,pid,illness,diagnosis,restriction) values($apid,$pid,'$illness','$diagnosis','$restriction')";
//echo "<br/>$sql";

if(mysqli_query($con,$sql))    //direct insert into mysql
{


$sql="UPDATE appointment SET status = 1 WHERE id = $apid";
mysqli_query($con,$sql);
	$id=mysqli_insert_id($con);


	header("Location:print.php?id=$id");
	echo "<br/>saved";
}
else
echo "<br/>$sql";
}


else if(isset($_REQUEST['ap_time']))
{
	echo $ap_time=$_REQUEST['ap_time'];
	echo "<br/>";
	echo $did=$_REQUEST['did'];
	echo $b_date=$_REQUEST['b_date'];

	$pid=$_SESSION['profile_id'];
$sql="insert into appointment(pid,did,time,date) values($pid,'$did','$ap_time','$b_date')";
echo "<br/>$sql";

if (mysqli_query($con,$sql))
{
	echo"saved";
	$id=mysqli_insert_id($con);
	header("Location:bookappointment.php?id=$id");
}
else{
	
	echo"sql error $sql";
}

	
}

/*
else if(isset($_POST['submit']))
{
	echo "insert case<br/>";
$email_value=$_POST['email'];
$username_value=$_POST['username'];
echo "email=$email_value<br/>";
echo "username=$username_value<br/>";


$sql="insert into user(email,username) values('$email_value','$username_value')";
echo "<br/>$sql";
}
else if(isset($_POST['submit1']))
{
	echo "insert1 case<br/>";
	$email_val=$_POST['email1'];
	$username_val=$_POST['username1'];
	$address_val=$_POST['address1'];
	$gender_val=$_POST['gender'];
	$dob=$_POST['dob'];
	$list=$_POST['list'];
	$chb_list_item=$_POST['chb'];
 
    echo "emai1l=$email_val<br/>";
	echo "username1=$username_val<br/>";
	echo "address1=$address_val<br/>";
	echo "gender=$gender_val<br/>";
	echo "list=$list<br/>";
	echo "dob=$dob<br/>";
}
*/



//**************** Main Reg ****************//

else if(isset($_POST['clinicreg']) ||isset($_POST['DReg']) ||isset($_POST['PReg']))
{
	//echo"clinicprofile";
$user_type=$_POST['user_type'];
$table_name=$user_type;
echo"user type=$user_type </br> $table_name";

$email_id=$_POST['email'];
$phoneno_val=$_POST['phoneno'];
$user_name=$_POST['name'];

$sql="select * from user where email='$email_id' or phoneno='$phoneno_val'";
$query= mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
echo "$sql<br/>num=$num";
//exit;
if($num==0)
{
	
	
	if(isset($_POST['clinicreg']))
	{
    $username_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=$_POST['password'];
	$phoneno_val=$_POST['phoneno'];
	$pincode_val=$_POST['code'];
	$location_val=$_POST['location'];
	$sql="INSERT INTO $table_name(name,pincode,location)
	values('$username_val','$pincode_val','$location_val')";
	}
else if(isset($_POST['DReg']))	
{
	$username_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=$_POST['password'];
	$phoneno_val=$_POST['phoneno'];
	$address_val=$_POST['address'];
	$gender=$_POST['gender'];
	$morning=$_POST['morning'];
	$m_stime=$_POST['mor1'];
	$m_etime=$_POST['mor2'];
	$evening=$_POST['evening'];
	$e_stime=$_POST['eve1'];
	$e_etime=$_POST['eve2'];
	$ctime=$_POST['ctime'];
	$chb_list_item=$_POST['chb'];
	
	$chb_data="";
	
	$len= count($chb_list_item);
	for($i=0;$i<count($chb_list_item);$i++)
	{$chb_value=$chb_list_item[$i];
//echo "<br/>$i=$chb_value";
//$chb_value_data =$chb_value_data.$chb_value;
$chb_data .=$chb_value;


if($i<count($chb_list_item)-1)
$chb_data =$chb_data."/";
	}
	echo "specialist=$chb_data";
	
	

$chb_list_item=$_POST['days'];
	$chb_value_data="";
	
	$len= count($chb_list_item);
	for($i=0;$i<count($chb_list_item);$i++)
	{$chb_value=$chb_list_item[$i];
//echo "<br/>$i=$chb_value";
//$chb_value_data =$chb_value_data.$chb_value;
$chb_value_data .=substr($chb_value,0,3);


if($i<count($chb_list_item)-1)
$chb_value_data =$chb_value_data."/";
	}
	//echo "days=$chb_value_data";
	
//	print_r($chb_value_data);
//	exit;

$sql="INSERT INTO $table_name(name,address,gender,morning,m_stime,m_etime,evening,e_stime,e_etime,time,specialist,workingdays) 
values('$username_val','$address_val','$gender','$morning','$m_stime','$m_etime','$evening','$e_stime','$e_etime','$ctime','$chb_value_data','$chb_data')";
}
else if(isset($_POST['PReg']))
{
//echo "Patientprofile";
    $username_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=$_POST['password'];
	$phoneno_val=$_POST['phoneno'];
	$address_val=$_POST['address'];
	$gender_val=$_POST['gender'];
	$dob_val=$_POST['dob'];
	$temp=explode("-",$dob_val);
	$dob_val=$temp[2]."-".$temp[1]."-".$temp[0];
	$code_val=$_POST['code'];
	$city_val=$_POST['city'];
	$bloodg_val=$_POST['bloodg'];
	$treatment_val=$_POST['treatment'];

$sql="INSERT INTO $table_name(name,address,gender,dob,code,city,bloodg,treatment) 
values('$username_val','$address_val','$gender_val','$dob_val','$code_val','$city_val','$bloodg_val','$treatment_val')";
}	  
echo "$sql";


if(mysqli_query($con,$sql))
{
	$ref_id=mysqli_insert_id($con);
	echo "ref_id=$ref_id";
	$sql="insert into  user(email,phoneno,password,ref_id,usertype) value('$email_id','$phoneno_val','$password_val',$ref_id,'$user_type')";
	if(mysqli_query($con,$sql))
		header("Location:index.php?id=$ref_id");
	else
		echo "Error :$sql";
	
}
else
echo "error=".$sql;	
}
else
header("Location:index.php?c=1");
//	echo"already regi";

}

else if(isset($_POST['login']))
{
//echo "login case<br/>";
$username_val=$_POST['userid'];	
$user_password=$_POST['password'];	
$usertype_val=$_POST['usertype'];

$sql="select id,password,status,email,ref_id from user where id='$username_val' or email='$username_val' and usertype='$usertype_val'";
//echo "$sql<br/>";

$query_result=mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);

if($num>0)
{
	//echo "found";
$row_data=mysqli_fetch_row($query_result);
	echo "databse password=".$databse_password=$row_data[1];
//echo "databse_password=$databse_password";
//echo "<br/userpassword=$user_password";
	//
if($databse_password==$user_password)
{
	echo "login page";
	
	$_SESSION['profile_id']=$row_data[4];
	$_SESSION['email_id']=$row_data[3];
	$_SESSION['user_type']=$usertype_val;
	//echo "$usertype_val"; 
	if($usertype_val=='Doctor')
	{
	header("Location:docprofile.php");
	}
	else if($usertype_val=='Clinic')
	{
	 header("Location:clinicprofile.php");
	}

	else if($usertype_val=='Patient')
	{
	header("Location:patprofile.php");
	}

}
else
	 header("Location:index.php?userid=$userid&case=1");
}
else
{
	header("Location:index.php?userid=$userid&case=2");
}
     
}

	/*
	
	if($password_val==$password_val && $usertype_val='Doctor')	
	{
		
	header("Location:profile.php?userid=$username_val&case=1");
	}
	else if($password_val==$password_val && $usertype_val='patient')
		
		{
			header("Location:profile.php?userid=$username_val&case=2");
		}
		*/

	
		//		header("Location:index.php?caseno=101");



/*
else if(isset($_POST['clinicreg1']))
{
	echo "register case<br/>";
	$username_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=base64_encode( $_POST['password']);
	$phoneno_val=$_POST['phoneno'];
	$pincode_val=$_POST['code'];
	$location_val=$_POST['location'];

	
	
	echo "name=$username_val<br/>";
	echo "email=$email_val<br/>";
	echo "password=$password_val<br/>";
	echo "phoneno=$phoneno_val<br/>";
	echo "code=$pincode_val<br/>";
	echo "location=$location_val<br/>";

	
$sql="insert into user(name,email,password,phoneno,pincode,location) values('$username_val','$email_val','$password_val','$phoneno_val','$pincode_val','$location_val')";
//echo "<br/>$sql";

if(mysqli_query($con,$sql))    //direct insert into mysql
{
	echo "<br/>saved";
	$id=mysqli_insert_id($con);
header("Location:index.php?id=$id");
}
else
echo "<br/>$sql";

}	


else if(isset($_POST['DReg']))
{
	echo "DoctorReg case<br/>";
	$name_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=$_POST['password'];
	$phoneno_val=$_POST['phoneno'];
	$address_val=$_POST['address'];
	$gender=$_POST['gender'];
	$time=$_POST['time'];
	$morning=$_POST['morning'];
	$m_stime=$_POST['mor1'];
	$m_etime=$_POST['mor2'];
	$evening=$_POST['evening'];
	$e_stime=$_POST['eve1'];
	$e_etime=$_POST['eve2'];
	$ctime=$_POST['ctime'];
	$chb_list_item=$_POST['chb'];
	
	$chb_data="";
	
	$len= count($chb_list_item);
	for($i=0;$i<count($chb_list_item);$i++)
	{$chb_value=$chb_list_item[$i];
//echo "<br/>$i=$chb_value";
//$chb_value_data =$chb_value_data.$chb_value;
$chb_data .=$chb_value;


if($i<count($chb_list_item)-1)
$chb_data =$chb_data."/";
	}
	echo "specialist=$chb_data";
	
	

$chb_list_item=$_POST['days'];
	$chb_value_data="";
	
	$len= count($chb_list_item);
	for($i=0;$i<count($chb_list_item);$i++)
	{$chb_value=$chb_list_item[$i];
//echo "<br/>$i=$chb_value";
//$chb_value_data =$chb_value_data.$chb_value;
$chb_value_data .=substr($chb_value,0,3);


if($i<count($chb_list_item)-1)
$chb_value_data =$chb_value_data."/";
	}
	//echo "days=$chb_value_data";
	
//	print_r($chb_value_data);
//	exit;

    echo "name=$name_val<br/>";
	echo "email=$email_val<br/>";
	echo "password=$password_val<br/>";
	echo "phoneno=$phoneno_val<br/>";
	echo "address=$address_val<br/>";
	echo "gender=$gender<br/>";
	echo "time=$time<br/>";
	echo "morning=$morning<br/>";
	echo "mor1=$start_time<br/>";
	echo "mor2=$end_time<br/>";
	echo "evening=$evening<br/>";
	echo "eve1=$start_teve<br/>";
	echo "eve2=$end_teve<br/>";
	echo "ctime=$ctime<br/>";
	
$sql="insert into doctor(name,email,password,phoneno,address,gender,time,morning,m_stime,m_etime,evening,e_stime,e_etime,workingdays,specialist) values('$name_val','$email_val','$password_val','$phoneno_val','$address_val','$gender','$ctime','$morning','$m_stime','$m_etime','$evening','$e_stime','$e_etime','$chb_value_data','$chb_data')";
echo"<br/>$sql";

if(mysqli_query($con,$sql))    //direct insert into mysql
{
	$id=mysqli_insert_id($con);
	header("Location:doctor.php?id=$id");
	echo "<br/>saved";
}
else
echo "<br/>$sql";
}

else if(isset($_POST['PReg']))
{
	echo "patientReg case<br/>";
	$name_val=$_POST['name'];
	$email_val=$_POST['email'];
	$password_val=$_POST['password'];
	$phoneno_val=$_POST['phoneno'];
	$address_val=$_POST['address'];
	$gender_val=$_POST['gender'];
	$dob_val=$_POST['dob'];
	$temp=explode("-",$dob_val);
	$dob_val=$temp[2]."-".$temp[1]."-".$temp[0];
	$code_val=$_POST['code'];
	$city_val=$_POST['city'];
	$bloodg_val=$_POST['bloodg'];
	$treatment_val=$_POST['treatment'];
	
	
	echo "name=$name_val<br/>";
	echo "email=$email_val<br/>";
	echo "password=$password_val<br/>";
	echo "phoneno=$phoneno_val<br/>";
	echo "address=$address_val<br/>";
	echo "gender=$gender_val<br/>";
	echo "dob=$dob_val<br/>";
	echo "code=$code_val<br/>";
	echo "city=$city_val<br/>";
	echo "bloodg=$bloodg_val<br/>";
	echo "treatment=$treatment_val<br/>";
	
$sql="insert into patient(name,email,password,phoneno,address,gender,dob,code,city,bloodg,treatment) values('$name_val','$email_val','$password_val','$phoneno_val','$address_val','$gender_val','$dob_val','$code_val','$city_val','$bloodg_val','$treatment_val')";
//echo"<br/>$sql";

if(mysqli_query($con,$sql))    //direct insert into mysql
{
	
	$file=$_FILES['user_image'];
	$file_name=$file['name'];
	$file_path=$file['tmp_name'];
	
	echo"file=$file_path";
	echo"file=$file_name";
	
	$id=mysqli_insert_id($con);
	
	$temp=explode(".",$file_name);
	$len=count($temp);
	
	$new_path="images/$id".".".$temp[$len-1];
	if(move_uploaded_file($file_path,$new_path))
	{
		$update_query="update patient set upload_img='$new_path' where id='$id'";
		//ECHO"$update_query";
		if(mysqli_query($con,$update_query))
		{
			header("Location:patient.php?id=$id");
		}
	}
	
	
	//header("Location:patient.php?id=$id");
	//echo "<br/>saved";
}
else
echo "<br/>$sql";
}




/*	$user_image_file=$_FILES['user_image'];
	
	
	$hidden1=$_POST['hidden1'];

$sql="insert into insert1(email_id,username,gender) values('$email_val','$username_val','$gender_val')";
$sql="insert into data1(name,email,phone no) values('$email_val','$username_val','$phoneno_val')";

if(mysqli_query($con,$sql))

	echo "saved";
else
echo "<br/>$sql";	
}*/
?>