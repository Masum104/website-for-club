<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["page"]="";
?>
<?php
include '../front_page/header.php';
?>
<?php
include '../index_option/index.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>RUET CRICKET CLUB</title>
   <meta name="viewport" content = "width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <meta name="viewport" content = "width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="nivo-slider/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.js">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-image: url(img1.jpg);
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
.row{
	margin-top:20px;
  margin-left: 15px;
  margin-right: 15px; 
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {

  background-image: url(img2.jpg);
   margin-top: 90px;
  padding: 10px;
  color:black;
  text-align: center;
}
</style>
</head>
<body >
<div class="row" style="background-image: url(bg9.jpg); height: 100%">
  <div class="column side">
  
    <div>
    <img style="width=400px; height:250px; margin-left:50px" src="12122678_1726942057534203_3900317001282754189_n.jpg">
    </div>
    <br>
    <p>Ruet Cricket Club is one of most popular club of RUET. It was established on 30th December in 2015.</p>
  </div>
  
  <div class="column middle">
    
   <section>
  <img class="mySlides" src="rc1.jpg"
  style="width:600px; height:350px">
  <img class="mySlides" src="rc2.jpg"
  style="width:600px; height:350px">
  <img class="mySlides" src="rc3.jpg"
   style="width:600px; height:350px">
  <img class="mySlides" src="rc4.jpg"
  style="width:600px; height:350px">
  <img class="mySlides" src="myimg2.jpg"
   style="width:600px; height:350px">
   <img class="mySlides" src="myimg3.jpg"
   style="width:600px; height:350px">
</section>
</section>

  </div>
  
  <div class="column side">
     <div style=" text-align:center; height:350px; ul li:hover {background: #555;} ">
<br>

           <p style="color: black ; font-size:20px;"><button type="button" class="btn btn-primary" style="height: 85%; width:100%;"> Information Center</button> </p>

           <br>

          <div class="list-group" style="overflow:hidden;">
         
         <a href="../front_page/advisor.php" class="list-group-item" style="background: rgb(255,204,204);">
           <button type="button" class="btn btn-primary" style="height:100%; width:100%; margin-bottom:10px;">Advisor</button> </a>
      
      
      <a href="../front_page/manager.php" class="list-group-item" style=" background: rgb(188,191,255);">
      <button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;">Manager</button> </a> 
          
        
      <a href="../front_page/captain.php" class="list-group-item" style="background: rgb(255,204,204);"><button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;"> Captain</button> </a>

      <a href="../front_page/gallery1.php" class="list-group-item" style=" background: rgb(188,191,255);">
      <button type="button" class="btn btn-primary" style="height:100%; width:100%;  margin-bottom:10px;">Members</button> </a>
  
      </div>

    </div>
  </div>
</div>

<div class="footer">
  <p>Copyright@ by Masum Billah</p>
</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</body>
</html>
