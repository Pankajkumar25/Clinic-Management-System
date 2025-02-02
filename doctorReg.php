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

<div class='modal modal-md' role='dialog' id='a1' >
		<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-info'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><u><font size='5px'>Registration</font></u></center>
		</div>
		<div class='modal-body'>


<center><img src='docreglogo.png' class='img-circle'/></center>
			";
			
if(isset($_REQUEST['id']))
{$id=$_REQUEST['id'];
	echo "<center><h3>successfully saved & profile id =$id</center></h3>";	

}			
			
echo"<form action='data1.php' id='registration-form' method='post'>
				
<div class='row'>
<label class='col-md-3'>Name:</label>
<div class='col-md-6'><input type='text' id='name' name='name' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Email:</label>
<div class='col-md-6'><input type='text' id='email' name='email' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Mobile:</label>
<div class='col-md-6'><input type='text' id='phoneno' name='phoneno' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Address:</label>
<div class='col-md-6'>
<textarea name='address' id='address' rows=5 cols=53 class='form-control'></textarea></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Gender:</label>
<div class='col-md-6'>
<input type='radio' name='gender' id='gender1' value='male'/>Male 
<input type='radio' name='gender' id='gender2' value='female'/>Female
<input type='radio' name='gender' id='gender3' value='Prefer not to say'/>Prefer not to say
</div> 
</div>  
<br/>


<div class='row'>
<label class='col-md-3'>Specialist In:</label>
<div class='col-md-6'>
<input type='checkbox' name='chb[]' id='chb1' value='Allergy and asthma'/>Allergy and asthma</br>
<input type='checkbox' name='chb[]' id='chb2' value='Anesthesiology'/>Ansethesiology</br>
<input type='checkbox' name='chb[]' id='chb3' value='Cardiology'/>Cardiology</br>
<input type='checkbox' name='chb[]' id='chb4' value='Dermatology'/>Dermatology</br>
<input type='checkbox' name='chb[]' id='chb5' value='Endocrinology'/>Endocrinology</br>
<input type='checkbox' name='chb[]' id='chb6' value='Gastroenterology'/>Gastroenterology</br>
<input type='checkbox' name='chb[]' id='chb7' value='Hematology'/>Hematology</br>
<input type='checkbox' name='chb[]' id='chb8' value='Immunology'/>Immunology</br>
<input type='checkbox' name='chb[]' id='chb9' value='Radiology'/>Radiology</br>
</div>
</div>
<br/>
";
$sys_day=date('D');
//echo "system_day=$sys_day";
echo "

<div class='row'>
<label class='col-md-3'>Available On Days:</label>
<div class='col-md-6' >
<input type='checkbox' name='days[]' id='chb1' value='Monday'/>Monday</br>
<input type='checkbox' name='days[]' id='chb2' value='Tuesday'/>Tuesday</br>
<input type='checkbox' name='days[]' id='chb3' value='Wednesday'/>Wednesday</br>
<input type='checkbox' name='days[]' id='chb4' value='Thursday'/>Thursday</br>
<input type='checkbox' name='days[]' id='chb5' value='Friday'/>Friday</br>
<input type='checkbox' name='days[]' id='chb6' value='Saturday'/>Saturday</br>
<input type='checkbox' name='days[]' id='chb7' value='Sunday'/>Sunday</br>
</div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>Shift:</label>
<div class='col-md-6'>
<input type='checkbox' name='morning' id='chb1' value='Morning'/>Morning &nbsp;&nbsp;
Strat time
<select name='mor1' id='dd'>
<option value='09'>09</option> 
<option value='10'>10</option> 
<option value='11'>11</option> 
<option value='12'>12</option> 
</select>

End time
<select name='mor2' id='dd'>
<option value='09'>09</option> 
<option value='10'>10</option> 
<option value='11'>11</option> 
<option value='12'>12</option> 
</select>
</div></div>


<div class='row'>
<div class='col-md-offset-3 col-md-6'>
<input type='checkbox' name='evening' id='chb2' value='Evening'/>Evening &nbsp;&nbsp;
Start time
<select name='eve1' id='dd'>
<option value='15'>15</option> 
<option value='16'>16</option> 
<option value='17'>17</option> 
<option value='18'>18</option> 
</select>

End time
<select name='eve2' id='dd'>
<option value='15'>15</option> 
<option value='16'>16</option> 
<option value='17'>17</option> 
<option value='18'>18</option> 
</select>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Checkup Time:</label>
<div class='col-md-6'>
<select name='ctime' id='dd'>
<option value='05'>05</option> 
<option value='10'>10</option> 
<option value='15'>15</option> 
<option value='20'>20</option> 
<option value='25'>25</option> 
<option value='30'>30</option> 
</select>
</div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>Upload Image:</label>
<input type='file' name='user_image'/>
</div>
<br/>
			

<div class='row'>
<div class='col-md-offset-3 col-md-1'><input type='submit' name='DReg' value='Save' class='btn btn-info'/></div>

<div class='col-md-1'><input type='reset' name='reset' value='Reset' class='btn btn-info'/></div>
</div>


</form>";

   

			
		echo"</div>";			
		
echo"</div>";
echo"</div>";
echo "</div>";


include_once("footer1.php");

?>

</div>

<script src="assets/js/jquery-1.7.1.min.js"></script> 

<script src="assets/js/jquery.validate.js"></script> 


<script>

$(document).ready(function(){


		$('#registration-form').validate({
	    rules: {
	       name: {
	        required: true
	      },
		  
		 username: {
	        minlength: 6,
	        required: true
	      },
		  
		  password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
		  
	      email: {
	        required: true,
	        email: true
	      },
		  
	     
		   address: {
	      	minlength: 10,
	        required: true
	      },
		   
		   address2: {
	      	minlength: 10,
	        required: true
	      },
		   
		   phoneno: {
           minlength:10,
		   required: true
		   },


			   
		agree:{
			required:true
		},
		 upload: {
        required: true,
        regex: "^^.*\.(jpg|JPG|gif|GIF|doc|DOC|pdf|PDF|xls|png)$"
		
    }
		  
	    },
		/*
		messages: {
			upload:
			{
			regex: "not of specified type"
			},
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
  },*/
		
		/*	highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
				$(element).closest('.control-group').removeClass('success').addClass('icon');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}*/
	  });

}); // end document.ready
</script>
</body>
</html>