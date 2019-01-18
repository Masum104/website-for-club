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
<html>
<style>
.footer {

  background-image: url(img12.jpg);
   margin-top: 90px;
  padding: 10px;
  text-align: center;
  color:black;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
  margin-left:15px;
  margin-right:15px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
  max-width: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>

<!-- Header -->

<h1 align="center" style="color:white">Managers of Ruet Cricket Club</h1>
<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="mn1.jpg" style="width:600px; height:400px;"><br>
     <h2 style="color:white; text-align:center">Asraful Alam(12 Series)</h2>
    
  </div>
    <div class="column">
    <img src="mn2.jpg" style="width:600px; height:400px;">
    <h2 style="color:white; text-align:center">Masum Billah(13 Series)</h2>
  </div> 
   

  
  </div>
  <div class="footer">
  <p>Copyright@ by Masum Billah</p>
</div>
</body>
</html>



