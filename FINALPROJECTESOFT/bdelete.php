<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$nic=$_GET['deleteid'];

$sql="DELETE FROM barreservation WHERE nic= $nic ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'Responded To Reservation Request ';
// header('location:admindash.php#wht');
echo "<script>alert('Request Removed');document.location='admindash.php#bar'</script>";

}
else {
    die(mysqli_error($con));
}
}

?>