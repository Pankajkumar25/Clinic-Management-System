<?php
require_once("connection.php")
if(isset($_POST['find']))
{
	$id=$_POST['id'];
	echo"<a href='find.php'>Back</a><br/>";
	echo "id=$id<hr/>";
$sql="select * from device where id=$id";
//$sql="select 'stu_name','class' from student where id=$id";

$query_result=mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);
$col_num=mysqli_num_fields($query_result);
echo"num of cols=$col_num";
if($num>0)
{
	$row=mysqli_fetch_row($query_result);
	
	for($i=0;$i<$col_num;$i++)
	{
      $temp=mysqli_fetch_field($query_result);
			$col_name=$temp->name;
		if($col_name=="qr_path")
           echo "<tr><td>col no=$i  </td><td> $col_name</td><td><img src='$row[$i]'/></td></tr>";
		else
			echo "<tr><td>col no=$i </td><td> $col_name</td><td>$row[$i]</td></tr>";
	}
}
else
	echo"not found";
}
else
{

echo "<form action='find.php' method='post'>

<table>
<tr><td>enter your id </td>
<td><input type='text' name='id'/></td>
<td><input type='submit' name='find' value='Find'/>
</td></tr>
</table>
</form>";
}
?>