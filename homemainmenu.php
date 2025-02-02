 <nav class="navbar" >
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class='navbar-brand font-color'  href='index.php'>HOME</a></div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav " >
         </ul>
	  

<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle font-color" data-toggle="dropdown" role="button" >
LOGIN/SIGN UP<span class="caret"></span></a>	
<ul class="dropdown-menu">
<li><a data-toggle='modal' data-target='#clinicmodal'>Clinic Registration<a></li>
<li><a data-toggle='modal' data-target='#doctormodal'>Doctor Registration<a></li>
<li><a data-toggle='modal' data-target='#patientmodal'>Patient Registration<a></li>
<li><a data-toggle='modal' data-target='#modal'>Login</a></li>

</li>
</ul>
</nav>
  
	  
	  
<?php
if(isset($_SESSION['email_id']))
{
$email_id=$_SESSION['email_id'];
$profile_id=$_SESSION['profile_id'];

}

  
 
echo"<!--****************************Clinic Registration modal *******************************************-->

 		<div class='modal modal-md' role='dialog' id='clinicmodal' >
		<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-primary'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><u><font size='5px'> Clinic Registration</font></u></center>
		</div>
		<div class='modal-body'>
<center><img src='cliniclogo.png'/></center>
		<form action='data1.php' method='post'>
			
<input type='hidden' name='user_type' value='clinic' class='form-control'/>


<div class='row'>
<label class='col-md-offset-1 col-md-2'>Name</label>
<div class='col-md-6'><input type='text' name='name' class='form-control' required/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Email</label>
<div class='col-md-6'><input type='email' name='email' class='form-control'required/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Password</label>
<div class='col-md-6'><input type='password' name='password' class='form-control' required/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Phone No</label>
<div class='col-md-6'><input type='text' name='phoneno' class='form-control' required/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Pin Code</label>
<div class='col-md-6'><input type='text' name='code' class='form-control' required/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Location</label>
<div class='col-md-6'><textarea name='location' rows=4 cols=22 class='form-control' required></textarea></div>
</div>
<br/>


<div class='row'>
<div class='col-md-offset-4 col-md-2'>
<input type='submit' name='clinicreg' value='Register' class='btn btn-info'/>
</div>

<div class='col-md-2'>
<input type='reset' name='reset' value='Reset' class='btn btn-danger' />
</div></div>
<br/>
</form>

<div class='modal-footer'>
<button type='button' class='btn btn-default' data-dismiss='modal'>close</button>
</div>

</div>
</div>
</div>
</div>

<!--********************************** Login Modal ********************************************-->


	<div class='modal modal-md' role='dialog' id='modal' >
	<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-primary'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><font size='5px'><u>Login</u></font></center>
		</div>
		<div class='modal-body bg-info'>
		<form action='data1.php' method='post'>
			
<div class='row'>
<label class='col-md-offset-1 col-md-2'>UserName</label>
<div class='col-md-6'><input type='text' name='userid' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Password</label>
<div class='col-md-6'><input type='password' name='password' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-offset-1 col-md-2'>User type</label>
<div class='col-md-6'>
<select name='usertype' class='form-control'>
<option value='Clinic'>Clinic</option>
<option value='Doctor'>Doctor</option>
<option value='Patient'>Patient</option>
</select>
</div>
</div>
<br/>

<div class='row'>
<div class='col-md-offset-4 col-md-2'>
<input type='submit' name='login' value='Login' class='btn btn-info'/>

</div>

<div class='col-md-2'>
<input type='reset' name='reset' value='Reset' class='btn btn-danger'/>
</div>
</div>
<br/>

</form>

<div class='modal-footer'>
<button type='button' class='btn btn-default' data-dismiss='modal'>close</button>
</div>

</div>
</div>
</div>
</div>


<!--********************************* Forget Modal ******************************************************-->
<div class='modal modal-md' role='dialog' id='a3' >
	<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-info'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><font size='5px'><u>Forgot Password</u></font></center>
		
		
		</div>
		<div class='modal-body'>
		<form action='data1.php' method='post'>
			

<div class='row'>
<label class='col-md-offset-1 col-md-2'>Email</label>
<div class='col-md-6'><input type='text' name='userid' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<div class='col-md-offset-5 col-md-2'>
<input type='submit' name='forgot' value='Forgot' class='btn btn-info'/>
</div>
</div>
</form>
</div>
</div>
</div>
</div> 

<!-- ****************************Doctor Reg Modal*****************************************-->

<div class='modal modal-md' role='dialog' id='doctormodal' >
		<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-primary'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><u><font size='5px'> Doctor Registration</font></u></center>
		</div>
		<div class='modal-body'>


<center><img src='docreglogo.png' width='90px' class='img-circle'/></center>
			";
			
if(isset($_REQUEST['id']))
{$id=$_REQUEST['id'];
	echo "<center><h3>successfully saved & profile id =$id</center></h3>";	

}			
			
echo"<form action='data1.php' id='registration-form' method='post'>

<input type='hidden' name='user_type' value='doctor' class='form-control'/>

<div class='row'>
<label class='col-md-3'>Name:</label>
<div class='col-md-8'><input type='text' id='name' name='name' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Email:</label>
<div class='col-md-8'><input type='text' id='email' name='email' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Password:</label>
<div class='col-md-8'><input type='password' id='password' name='password' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Mobile:</label>
<div class='col-md-8'><input type='text' id='phoneno' name='phoneno' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Address:</label>
<div class='col-md-8'>
<textarea name='address' id='address' rows=5 cols=53 class='form-control'></textarea></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Gender:</label>
<div class='col-md-8'>
<input type='radio' name='gender' id='gender1' value='male'/>Male 
<input type='radio' name='gender' id='gender2' value='female'/>Female
<input type='radio' name='gender' id='gender3' value='Prefer not to say'/>Prefer not to say
</div> 
</div>  
<br/>


<div class='row'>
<label class='col-md-3'>Specialist In:</label>
<div class='col-md-8'>
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
<div class='col-md-8' >
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
<div class='col-md-8'>
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
<div class='col-md-offset-3 col-md-8'>
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
<div class='col-md-8'>
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
<div class='col-md-offset-3 col-md-2'><input type='submit' name='DReg' value='Register' class='btn btn-info'/></div>

<div class='col-md-1'><input type='reset' name='reset' value='Reset' class='btn btn-danger'/></div>
</div>
</form>
</div>
</div>
</div>
</div>


<!-- ********************************Patient Reg Modal********************************************-->

<div class='modal modal-md' role='dialog' id='patientmodal' >
		<div class='modal-dialog'>
		<div class='modal-content'>
		<div class='modal-header bg-primary'>
		<a href='' class='close' data-dismiss='modal'>&times;</a>
		<center><u><font size='5px'>Patient Registration</font></u></center>
		</div>
		<div class='modal-body'>


<center><img src='patreglogo.png' width='80px' class='img-circle'/></center>
			";
			
if(isset($_REQUEST['id']))
{$id=$_REQUEST['id'];
	echo "<center><h3>successfully saved & profile id =$id</center></h3>";	

}			
			
echo"<form action='data1.php' method='post' enctype='multipart/form-data'>

<input type='hidden' name='user_type' value='patient' class='form-control'/>

<div class='row'>
<label class='col-md-3'>Name:</label>
<div class='col-md-8'><input type='text' id='name' name='name' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Email:</label>
<div class='col-md-8'><input type='text' id='email' name='email' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Password:</label>
<div class='col-md-8'><input type='password' id='password' name='password' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Mobile:</label>
<div class='col-md-8'><input type='text' id='phoneno' name='phoneno' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Address:</label>
<div class='col-md-8'>
<textarea name='address' id='address' rows=5 cols=53 class='form-control'></textarea></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Gender:</label>
<div class='col-md-8'>
<input type='radio' name='gender' checked id='gender1' value='male'/>Male 
<input type='radio' name='gender' id='gender2' value='female'/>Female
<input type='radio' name='gender' id='gender3' value='Prefer not to say'/>Prefer not to say
</div>
</div>   
<br/>


<div class='row'>	
<label class='col-md-3'>DOB:</label>
<div class='col-md-8'>
<input type='date' name='dob' class='form-control'/></div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Pin Code:</label>
<div class='col-md-8'><input type='text' name='code' class='form-control'/></div>
</div>
<br/>


<div class='row'>
<label class='col-md-3'>City:</label>
<div class='col-md-8'>
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
<div class='col-md-8'>
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
<div class='col-md-8'>
<select name='treatment' id='dd' class='form-control'>
<option value='Allergy and asthma'>Allergy and asthma</option>
<option value='Anesthesiology -- general anesthesia or spinal block for surgeries and some forms of pain control
'>Anesthesiology -- general anesthesia or spinal block for surgeries and some forms of pain control
</option>
<option value='Cardiology -- heart disorders
'>Cardiology -- heart disorders
</option>
<option value='Dermatology -- skin disorders
'>Dermatology -- skin disorders
</option>
<option value='Endocrinology -- hormonal and metabolic disorders, including diabetes
'>Endocrinology -- hormonal and metabolic disorders, including diabetes
</option>
<option value='Gastroenterology -- digestive system disorders
'>Gastroenterology -- digestive system disorders
</option>
<option value='General surgery -- common surgeries involving any part of the body
'>General surgery -- common surgeries involving any part of the body
</option>
<option value='Hematology -- blood disorders'>Hematology -- blood disorders</option>
<option value='
Immunology -- disorders of the immune system'>
Immunology -- disorders of the immune system</option>
<option value='Infectious disease -- infections affecting the tissues of any part of the body
'>Infectious disease -- infections affecting the tissues of any part of the body
</option>
<option value='Nephrology -- kidney disorders
'>Nephrology -- kidney disorders
</option>
<option value='Neurology -- nervous system disorders
'>Neurology -- nervous system disorders
</option>
<option value='Obstetrics/gynecology -- pregnancy and women's reproductive disorders
'>Obstetrics/gynecology -- pregnancy and women's reproductive disorders
</option>
<option value='Oncology -- cancer treatment
'>Oncology -- cancer treatment
</option>
<option value='Ophthalmology -- eye disorders and surgery
'>Ophthalmology -- eye disorders and surgery
</option>
<option value='Orthopedics -- bone and connective tissue disorders
'>Orthopedics -- bone and connective tissue disorders
</option>
<option value='Otorhinolaryngology -- ear, nose, and throat (ENT) disorders
'>Otorhinolaryngology -- ear, nose, and throat (ENT) disorders
</option>
<option value='Physical therapy and rehabilitative medicine -- for disorders such as low back injury, spinal cord injuries, and stroke
'>Physical therapy and rehabilitative medicine -- for disorders such as low back injury, spinal cord injuries, and stroke
</option>
<option value='Psychiatry -- emotional or mental disorders
'>Psychiatry -- emotional or mental disorders
</option>
<option value='Pulmonary (lung) -- respiratory tract disorders
'>Pulmonary (lung) -- respiratory tract disorders
</option>
<option value='Radiology -- x-rays and related procedures (such as ultrasound, CT, and MRI)
'>Radiology -- x-rays and related procedures (such as ultrasound, CT, and MRI)
</option>
<option value='Rheumatology -- pain and other symptoms related to joints and other parts of the musculoskeletal system
'>Rheumatology -- pain and other symptoms related to joints and other parts of the musculoskeletal system
</option>
<option value='Urology -- disorders of the male reproductive system and urinary tract and the female urinary tract
'>Urology -- disorders of the male reproductive system and urinary tract and the female urinary tract
</option>
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
<div class='col-md-offset-3 col-md-2'><input type='submit' name='PReg' value='Register' class='btn btn-info'/></div>

<div class='col-md-1'><input type='reset' name='reset1' value='Reset' class='btn btn-danger'/></div>
</div>
</form>
</div>
</div>
</div>
</div>

";
?>
	  
<!--	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
	  
-->
    </div> 

	</div>  
</nav>


