<?php
echo "data page</br/>";
if(isset($_POST['submit']))
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
/*
// CASE 1
	$chb_value_data="";
	
	$len= count($chb_list_item);
	for($i=0;$i<count($chb_list_item);$i++)
	{$chb_value=$chb_list_item[$i];
//echo "<br/>$i=$chb_value";
//$chb_value_data =$chb_value_data.$chb_value;
$chb_value_data .=$chb_value;



if($i<count($chb_list_item)-1)
$chb_value_data =$chb_value_data."/";

}
*/

$chb_value_data=implode("/",$chb_list_item);

	echo "<hr/>$chb_list_item =  <br/>$chb_value_data<hr/>";
	
	echo "emai1l=$email_val<br/>";
	echo "username1=$username_val<br/>";
	echo "address1=$address_val<br/>";
	echo "gender=$gender_val<br/>";
	echo "list=$list<br/>";
	echo "dob=$dob<br/>";
	
	
	$user_image_file=$_FILES['user_image'];
	
	echo "user image_file=$user_image_file";
echo "<br/>image name=".$user_image_file['name'];
echo "<br/>image name=".$_FILES['user_image']['name'];

echo "<br/>image size=".$user_image_file['size'];
echo "<br/>image type=".$user_image_file['type'];
echo "<br/>image error=".$user_image_file['error'];	
echo "<br/>image path=".$user_image_file['tmp_name'];

echo"<hr/>";
print_r($user_image_file);
	$hidden1=$_POST['hidden1'];
	echo "<br/>hidden1=$hidden1";
$sql="insert into data(email1,username1,address1) values('$email_val','$username_val','$address_val')";
echo "<br/>$sql";	
}
?>