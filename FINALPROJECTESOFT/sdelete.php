<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$nic=$_GET['deleteid'];

$sql="DELETE FROM spareservation WHERE nic= $nic ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'Responded To Reservation Request ';
// header('location:admindash.php#wht');
echo "<script>alert('Request Removed');document.location='admindash.php#spa'</script>";

}
else {
    die(mysqli_error($con));
}
}

?>