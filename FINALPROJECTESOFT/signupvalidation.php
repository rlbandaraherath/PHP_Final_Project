<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- stop form resubmission -->
     <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <!-- resubmission end -->



<?php
//session_start();


$con = mysqli_connect('localhost','root','','finalprojectesoft');

$name = $_POST['name'];
$address = $_POST['address'];
$position = $_POST['position'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$telno = $_POST['telno'];
$username = $_POST['username'];
$password = $_POST['password'];

//checking empty fields    
 if (empty($name) OR empty($address) OR empty($position) OR empty($nic) OR empty($email) OR empty($telno) OR empty($username) OR empty($password)) {
    // echo "<script>alert('Fill all the fields')</script>";
    echo "<script>alert('Fill all the fields');document.location='Adminsignup.php'</script>";
 }else{

$sql = "SELECT * FROM login WHERE username = '$username' ";

$result = mysqli_query($con,$sql);

$num = mysqli_num_rows($result);

if($num==1){
    echo "<script>alert('Username Already Taken');document.location='Adminsignup.php'</script>";
}
else {
$address = $_POST['address'];
$reg = "INSERT INTO login (username, password, email, name, address, position, nic, telno)  VALUES ('$username','$password', '$email', '$name', '$address', '$position', '$nic', '$telno')";
mysqli_query($con,$reg);
echo "<script>alert('Succesfully Registered');document.location='Main.php'</script>";
}
 }



?>
</body>
</html>