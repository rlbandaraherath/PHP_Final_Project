<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$nic=$_GET['deleteid'];

$sql="DELETE FROM weddinghallreservation WHERE nic_no= $nic ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'Responded To Reservation Request ';
// header('location:admindash.php#wht');
echo "<script>alert('Request Removed');document.location='admindash.php#weddinghall'</script>";

}
else {
    die(mysqli_error($con));
}
}

?>