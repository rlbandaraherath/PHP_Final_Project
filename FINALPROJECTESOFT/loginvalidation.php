<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Login to System

$con = mysqli_connect('localhost','root','','finalprojectesoft');



$name = $_POST['user'] ;
$pass = $_POST['password'];

$sql = "SELECT * FROM login  WHERE username='$name' && password ='$pass'";

$result = mysqli_query($con,$sql) ;
$num = mysqli_num_rows($result);

if($num==1){
    header('location: Admindash.php');
}
else{
    // header('location: Main.php');
    // echo '<script> alert("Wrong credentials")</script>';
  
   echo "<script>alert('Incorrect Username or Password');document.location='Main.php'</script>";
}






?>  
</body>
</html>

