<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["page"]="about";
?>

<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>


<html>
<head>

<title>
	rcc_about
</title>
 <link rel="stylesheet" type="text/css" href="../rmcenter_admin/rmc_style_admin_page.css">
</head>


<div style=" background-image: url(../front_page/bg9.jpg);
    background-repeat: repeat; color: black; line-height: 1.8; font-size:15px; margin:25px; padding:25px; text-align:center;">

<h1  style="text-align:center; ">About</h1>
<p style="line-height: 1.6; ">
	This website is developed by <b>Masum Billah</b>, Dept. of CSE,RUET.<br>
</p >
<p style="line-height: 1.6; ">
	Ruet Cricket Club is one of the most popular club of Rajshahi University of Engineering and Technology(RUET). This club was established on 30th    December by the students of 11 Series of RUET, named <b>Sajjad Hossain</b>, <b>Rezwan Islam</b> and so on. This club is managed by the donation    of the members of this club.  
</p>

<br>

</div>



</html>



<?php

include '../front_page/footer.php';
?>
