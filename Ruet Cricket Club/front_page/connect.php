
<?php
$flag = 0;



// Create connection

$passErr =$userErr="";
$username = $password="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$flag=0;

 
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
if($flag==2)
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
$result=mysqli_query($conn,"select password from sign_member where username='$username'");

while($row=mysqli_fetch_assoc($result))
{
$bpass=$row['password'];
}



$conn->close();

}
?>
     
<?php
   if($bpass == $password)
{

  header('Location:rcc.php');
}
else
{
  header('Location:authentication1.php');
  
}?>
