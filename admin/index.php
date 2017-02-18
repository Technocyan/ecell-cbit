<?php session_start();
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("../functions.php");
require_once("../config.php");

?>
<!DOCTYPE html>
<html>
<title>Tech Era</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src="../js/ajax.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/ajax.validation.js"></script>
<script src="../js/sree.js"></script>
<script src="../new.js"></script>
<script src="admin.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.s_sidenav a,.s_sidenav h4 {font-weight:bold}
</style>
<body class="s_cyan s_content" style="max-width:1600px">

<div class="s_top s_container ">
  <ul class="s_navbar s_white s_wide s_padding-8 s_card-2 ">
    <li>
      <a href="#home" class="s_left s_cyan s_card-8 s_animate-zoom"><b>TECH</b> Era</a>
    </li>
	
    <li class="s_center s_hide-small">
      <a href="#" class="s_center"><b>Welcome Admin</b></a>
    </li>
	
  </ul>
</div>

<div id="notification" class="s_center s_red s_text-white s_padding s_round" style="display:none;"></div>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="s_overlay s_hide-large s_animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="s_main s_sand" style="margin-left:300px">

  <div class="s_container s_padding-large" style="margin-bottom:32px;margin-top:3.7em;">
	<div class="s_row">
		<div class="s_col m2">
			</br></br>
		</div>
		<div class="s_col m7 s_padding">
			<div class="s_container s_card-2 s_white s_margin-bottom">
				<h2 class="s_text-grey s_padding-16"><i class="	fa fa-desktop fa-fw s_margin-right s_xlarge s_text-cyan"></i> Login</h2>
				<input id="logmail" class="s_input s_padding s_margin-bottom s_border s_round" placeholder="Please enter your email" />
				<input id="logkey"  style="display:none;"  class="s_input s_padding s_margin-bottom s_border s_round" placeholder="Please enter your secret key" />
			</div>
		</div>
	</div>
	<div class="s_row-padding">
  
    </div>
  
  </div>
<br>

<div class="s_progress-container " style="height:5px;width:20%;">
  <div id="myBar" class="s_progressbar s_theme" style="width:100%"></div>
</div>

<div class="s_row-padding s_border">
    <div class="s_col l6 m6 s_margin-bottom">
      <div class="s_display-container">
        <p>Copyright &copy; 2016.<a target="_blank" href="http://www.technocyan.com/copyright/"><b class="s_text-cyan s_hover-text-blue">TECHNOCyan</b></a></br> All rights reserved.</br>
		<a class="s_hover-text-blue" target="_blank" href="http://www.cbit.ac.in">Chaitanya Bharati Institute of Technology</a> | <a target="_blank" class="s_hover-text-blue" href="#" >Spons_Company</a> </br>
<a class="s_hover-text-blue" target="_blank" href="http://www.technocyan.com/accessibility/">Accessibility</a> |<a class="s_hover-text-blue" target="_blank" href="http://www.technocyan.com/text/"> Text </a>| <a class="s_hover-text-blue" href="http://www.technocyan.com/web_communications/">Web Communications</a></p>
      </div>
    </div>
    <div class="s_col l6 m6 s_margin-bottom">
      <div class="s_display-container">
        
      </div>
    </div>
</div>



<footer class="s_center  s_padding">
  <p class="s_text-cyan">Proudly Powered by <a target="_blank" href="http://www.technocyan.com" title="TECHNOCyan" target="_blank" class="s_hover-text-blue">	&reg;TECHNOCyan</a></p>
</footer>


</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}


// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("s_show") == -1) {
        x.className += " s_show";
        x.previousElementSibling.className += " s_theme-d1";
    } else {
        x.className = x.className.replace("s_show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" s_theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("s_show") == -1) {
        x.className += " s_show";
    } else {
        x.className = x.className.replace(" s_show", "");
    }
}


    
</script>

</body>
</html>

