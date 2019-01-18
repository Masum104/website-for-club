<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>

<?php


$flag = 0;


// Create connection

 $firstErr=$lastErr=$passErr =$userErr="";
 $firstname=$lastname=$username = $password="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;

 if (empty($_POST["firstname"])) {
    $firstErr = "firstname is required";
  }

 else {
    $firstname = test_input($_POST["firstname"]);
     $flag+=1;
  }
 if (empty($_POST["lastname"])) {
    $lastErr = "lastname is required";
  }

 else {
    $lastname = test_input($_POST["lastname"]);
     $flag+=1;
  }

 
 if (empty($_POST["username"])) {
    $userErr = "username is required";
  }

 else {
    $username = test_input($_POST["username"]);
     $flag+=1;
  }

  
  
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  }
   else {
    $password = test_input($_POST["password"]);
     $flag+=1;
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($flag==4)
{
  $dbhost = '127.0.0.1';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'cricket_club';


 // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO sign_member (firstname, lastname, username, password)
VALUES ('$firstname', '$lastname', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "congrats";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: authentication.php");
}
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
  padding-top: 10px;
  color: white;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
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
  margin-top:  20px;
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
<body >

<div class="main">
 <div class="rform" style="color:white">

    <h2> Fill in the information to Sign Up </h2>

    <p><span class="error">* required field.</span></p>
    <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

      FirstName: <input style="color:black;" type="text" name="firstname" value="">
      <span class="error">*<?php echo $firstErr;?></span>
      <br><br>

      LastName: <input style="color:black;"   type="text" name="lastname" value="">
      <span class="error">*<?php echo $lastErr;?></span>
      <br><br>
      UserName: <input style="color:black;"   type="text" name="username" value="">
      <span class="error">*<?php echo $userErr;?></span>
      <br><br>
      Password: <input style="color:black;"   type="password" name="password" value="">
      <span class="error">*<?php echo $passErr;?></span>
      <br><br>
      <input type="submit" class="btn btn-success"  name="submit" value="Submit">  
      <br>
      <br>

    </form>

    </div>
    </div>
<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>
