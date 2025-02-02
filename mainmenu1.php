<?php
require_once("profile_info.php");
?>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class='navbar-brand' href='#'>
	  
	  <?php 
	  $email_id=$_SESSION['email_id'];
	  echo"$email_id";
    ?></a></div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class=" "><a href="about.php">ABOUT US <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="contactus.php">CONTACT <span class="sr-only">(current)</span></a></li>
        
      </ul>
    
	  
<ul class="nav navbar-nav navbar-right">
<li><span><h4 class='pull-right'>
<a href='logout.php' class='btn btn-primary'>Logout</a></span>
</h4>
</li>
</ul>	  
	  
	  
	  
	  
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


	
		
