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
			<div class='panel-heading'>ionic page</div>
			<div class='panel-body'>
			
			onic is a complete open-source SDK for hybrid mobile app development created by Max Lynch, Ben Sperry, and Adam Bradley of Drifty Co. in 2013.[3] The original version was released in 2013 and built on top of AngularJS and Apache Cordova. However, the latest release was re-built as a set of Web Components, allowing the user to choose any user interface framework, such as Angular, React or Vue.js. It also allows the use of Ionic components with no user interface framework at all.[4] Ionic provides tools and services for developing hybrid mobile, desktop, and progressive web apps based on modern web development technologies and practices, using Web technologies like CSS, HTML5, and Sass. In particular, mobile apps can be built with these Web technologies and then distributed through native app stores to be installed on devices by utilizing Cordova or Capacitor.[5]


Contents
1	History
2	Services and features
3	Supported platforms
4	Performance
5	Installation
6	References
7	External links
History
Ionic was created by Drifty Co. in 2013. After releasing an alpha version of the framework in November 2013, a 1.0 beta was released in March 2014, a 1.0 final in May 2015, and several 2.0 releases in 2016.[citation needed]

Since January 2019, Ionic 4 allows developers to choose other frameworks apart from Angular like React, Vue.js, and web components.[6]

Services and features
Ionic uses Cordova and, more recently, Capacitor plugins to gain access to host operating systems features such as Camera, GPS, Flashlight, etc.[7][8][9] Users can build their apps, and they can then be customized for Android, iOS, Windows, Desktop (with Electron), or modern browsers.[10] Ionic allows app building and deployment by wrapping around the build tool Cordova or Capacitor with a simplified 'ionic' command line tool.[11]

Ionic includes mobile components, typography, interactive paradigms, and an extensible base theme.[12]

Using Web Components, Ionic provides custom components and methods for interacting with them. One such component, virtual scroll, allows users to scroll through a list of thousands of items without any performance hits. Another component, tabs, creates a tabbed interface with support for native-style navigation and history state management.[citation needed]

Besides the SDK, Ionic also provides services that developers can use to enable features, such as code deploys, automated builds. Ionic also provides its own IDE known as Ionic Studio.[citation needed]

Ionic also provides a command-line interface (CLI) to create projects. The CLI also allows developers to add Cordova plugins and additional front-end packages, enable push notifications, generate app Icons and Splash screens, and build native binaries.[13]

Supported platforms
For Android, Ionic supports Android 4.4 and up. For iOS, Ionic supports iOS 10 and up.[14] Ionic 2 supports the Universal Windows Platform for building Windows 10 apps.[15] Ionic Framework, based on Angular.js, supports BlackBerry 10 apps.[16]

Performance
Ionic apps run with a mixture of native code and web code, providing full access to native functionality if necessary, with the bulk of the UI of the app built with standard web technology. Ionic utilizes native hardware acceleration features available in the browser (such as CSS animations), and optimizes rendering (avoiding expensive DOM manipulation). Ionic leverages CSS transitions and transforms for animation as a way to leverage the GPU and maximize available processor time.[citation needed]

Installation
Ionic is an npm module and requires Node.js.[17]

References
			
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