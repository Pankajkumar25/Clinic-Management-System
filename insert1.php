<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("linkfile1.php");
  ?>
   </head>
  <body>
 <div class="container"> <!--container |container-fluid -->

<?php

include_once("head1.php");
include_once("mainmenu1.php");
echo "<div class='row'>";
echo "<div class='col-md-3 '>";
include_once("leftmenu1.php");
echo "</div>" ;

echo"<div class='col-md-9'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>controls</div>
			<div class='panel-body'>";
			echo "<form  id='registration-form' action='data.php' method='post' enctype='multipart/form-data'>";
			echo"<div class='form-group'>
			<label class='col-md-3'>Email Id</label>
			<div class='col-md-3'><input type='text' id='email1'name='email1' class='form-control'/></div>
			</div>
			";
		
			echo"<div class='form-group'>
			<label class='col-md-3'>User Name</label>
			<div class='col-md-3'><input type='text' id='username1' name='username1' class='form-control'/><br/></div>
			</div>
			";

			echo"<div class='form-group'>
			<label class='col-md-3'>Address</label>
			<textarea name='address1' id='address1' rows=5 cols=22></textarea>
			</div>";
			
			echo"<div class='form-group'>
			<label class='col-md-3'>Gender</label>
			<input type='radio' name='gender' checked id='gender1' value='male'/>Male 
            <input type='radio' name='gender' id='gender2' value='female'/>Female</td></tr>
            </div>";
			
			echo"<div class='form-group'>
			<label class='col-md-3'>DOB</label>
			<input type='date' name='dob'>
			</div>";
			
		echo"<div class='form-group'>
			<label class='col-md-3'>hidden</label>
			<input type='hidden' name='hidden1' value='spic'>
			</div>";

echo"<div class='form-group'>
<label class='col-md-3'>Subjects</label>
<input type='checkbox' name='chb[]' id='chb1' value='php'/>php
<input type='checkbox' name='chb[]' id='chb2' value='java'/>java
<input type='checkbox' name='chb[]' id='chb3' value='C++'/>C++
<input type='checkbox' name='chb[]' id='chb4' value='C'/>C</td></tr>
</div>";



echo "<div class='form-group'>
<label class='col-md-3'>BloodG</label>
<select name='list' id='dd'>
<option value='A+'>A+</option> 
<option value='B+'>B+</option> 
<option value='AB+'>AB+</option> 
<option value='O-'>O-</option> 
<option value='A-'>A-</option> 
<option value='B-'>B-</option> 
<option value='AB-'>AB-</option> 
<option value='O-'>O-</option> 

</div>";
			
			
						echo"<div class='form-group'>
			<label class='col-md-3'>image</label>
			<input type='file' name='user_image'>
			</div>";

			
	        echo"<div class='form-group'>
			<div class='col-md-3'><input type='submit' name='submit1' class='btn btn-info'/></div>
			</div>
			";
			
echo "</form>";
		
			
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
		  
		 username1: {
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
		  
	      email1: {
	        required: true,
	        email: true
	      },
		  
	     
		   address1: {
	      	minlength: 10,
	        required: true
	      },
		   
		   address2: {
	      	minlength: 10,
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