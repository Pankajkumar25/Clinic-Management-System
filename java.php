<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  
  include_once("link_file.php");
  ?>
   </head>
  <body>
 <div class="container"> <!--container |container-fluid -->


<?php
include_once("head.php");
include_once("mainmenu.php");
echo "<div class='row'>";
echo "<div class='col-md-3'>";
include_once("leftmenu.php");
echo "</div>";

echo "<div class='col-md-6'>
<div class='panel panel-info min_h'>
			<div class='panel-heading'>java page </div>
			<div class='panel-body'>
			
			Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA),[17] meaning that compiled Java code can run on all platforms that support Java without the need to recompile.[18] Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub,[19][20] particularly for client–server web applications, with a reported 9 million developers.[21]

Java was originally developed by James Gosling at Sun Microsystems and released in May 1995 as a core component of Sun Microsystems' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GPL-2.0-only license. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open-source software and used by most developers and is the default JVM for almost all Linux distributions.

As of March 2022, Java 18 is the latest version, while Java 17, 11 and 8 are the current long-term support (LTS) versions. Oracle released the last zero-cost public update for the legacy version Java 8 LTS in January 2019 for commercial use, although it will otherwise still support Java 8 with public updates for personal use indefinitely. Other vendors have begun to offer zero-cost builds of OpenJDK 8 and 11 that are still receiving security and other upgrades.
			
			
			</div>
			
		
	</div>";

echo "</div>";


echo "<div class='col-md-3'>";
include_once("add_window.php");
echo "</div>";

echo "</div>";

include_once("footer.php");

?>
</div>

</body>
</html>