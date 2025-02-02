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
include_once("patleftmenu.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>
<center><font size='6px'><u>Patient Profile</u></font></center></div>
			<div class='panel-body'>
<center><img src='patreglogo.png' class='img-circle'/></center>
			";
			
if(isset($_REQUEST['id']))
{$id=$_REQUEST['id'];
	echo "<center><h3>successfully saved & profile id =$id</center></h3>";	

}			
			
echo"<form action='data1.php' method='post' enctype='multipart/form-data'>

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
<input type='radio' name='gender' checked id='gender1' value='male'/>Male 
<input type='radio' name='gender' id='gender2' value='female'/>Female
<input type='radio' name='gender' id='gender3' value='Prefer not to say'/>Prefer not to say
</div>
</div>   
<br/>


<div class='row'>	
<label class='col-md-3'>DOB:</label>
<div class='col-md-6'>
<input type='date' name='dob' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Pin Code:</label>
<div class='col-md-6'><input type='text' name='code' class='form-control'/></div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>City:</label>
<div class='col-md-6'>
<select name='city' id='dd' class='form-control'>
<option value='Chandigarh'>Chandigarh</option> 
<option value='Mohali'>Mohali</option> 
<option value='Panchkula'>Panchkula</option> 
<option value='Ziarkpur'>Ziarkpur</option> 
<option value='Delhi'>Delhi</option> 
</select>
</div>
</div>
<br/>



<div class='row'>
<label class='col-md-3'>Blood Group:</label>
<div class='col-md-6'>
<select name='bloodg' id='dd' class='form-control'>
<option value='A+'>A+</option> 
<option value='B+'>B+</option> 
<option value='AB+'>AB+</option> 
<option value='O-'>O-</option> 
<option value='A-'>A-</option> 
<option value='B-'>B-</option> 
<option value='AB-'>AB-</option> 
<option value='O-'>O-</option>
</select>
</div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>Specify treatment:</label>
<div class='col-md-6'>
<select name='treatment' id='dd' class='form-control'>
<option value='Allergy and asthma'>Allergy and asthma</option> 
<option value='Anesthesiology'>Anesthesiology</option> 
<option value='Cardiology'>Cardiology</option> 
<option value='Dermatology'>Dermatology</option> 
<option value='Endocrinology'>Endocrinology</option> 
<option value='Gastroenterology'>Gastroenterology</option> 
<option value='Hematology'>Hematology</option> 
<option value='Immunology'>Immunology</option>
<option value='Radiology'>Radiology</option>
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
<div class='col-md-offset-3 col-md-1'><input type='submit' name='PReg' value='Save' class='btn btn-info'/></div>

<div class='col-md-1'><input type='reset' name='reset1' value='Reset' class='btn btn-info'/></div>
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