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
echo "<div class='row '>";
echo "<div class='col-md-3 '>";
include_once("leftmenu1.php");
echo "</div>" ;

echo"<div class='col-md-6 '>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>Computer Graphics </div>
			<div class='panel-body'>
			Computer graphics is a sub-field of computer science which studies methods for digitally synthesizing and manipulating visual content. Although the term often refers to the study of three-dimensional computer graphics, it also encompasses two-dimensional graphics and image processing. The individuals who serve as professional designers for computers graphics are known as 'Graphics Programmers', who often are computer programmers with skills in computer graphics design. [1]


Contents
1	Overview
2	History
3	Subfields
3.1	Geometry
3.2	Animation
3.3	Rendering
4	Notable researchers
5	Applications for their use
6	See also
7	References
</div>";
			
		
	echo"</div>";
echo"</div>";

echo "<div class='col-md-3'>";
include_once("addwindow1.php");
echo "</div>";

echo "</div>";

include_once("footer1.php");

?>
</div>
</body>
</html>