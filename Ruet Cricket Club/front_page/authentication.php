<?php
 session_start();
 error_reporting(E_ERROR | E_PARSE);
 $_SESSION["page"]="authentication";
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

.main
{
  background:rgba(255,255,0,0.2) ;
  width: 500px;
  height: 400px;
  margin: 0 auto;
  text-align: center;
  padding-top: 5px;
  color: white;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
.main
{
  background:rgba(255,255,0,0.2) ;
  width: 500px;
  height: 400px;
  margin: 0 auto;
  text-align: center;
  padding-top: 5px;
  color: white;
  margin-top: 20px;
}
/* Style the footer */
.footer {

  background-image: url(img12.jpg);
   margin-top: 90px;
  padding: 10px;
  text-align: center;
}

.error {
  color: black;
}
.rform 
{
  margin: 25px,auto;
  margin-top:  25px;
  margin-bottom:30px;
  color: black;
  padding : 5px;
  width:100%;
  opacity: 1.0;
  text-align: center;
  overflow:hidden;
  display:block;
}

</style>
</head>

<div class="main" style="width: 95%">
 <div class="rform" style="color:white">

    <h2> Fill in the information to Login </h2>

    <p><span class="error">* required field.</span></p>
    <br>

    <form method="post" action="connect.php">  

      Username: <input style="color:black;" type="text" name="username" required >
      <span class="error">*</span>
      <br><br>

      Password: <input style="color:black;"   type="password" name="password" required>
      <span class="error">*</span>
      <br><br>

      <input type="submit" class="btn btn-success"  name="submit" value="Submit">  
      <br>
      <br>

<h2>Do you have any account? <a style="color: blue" href="sign_up.php">Sign Up</a></h2>
    </form>

    </div>
   </div>
<div class="footer">
  <p>Footer</p>

</body>
</html>
