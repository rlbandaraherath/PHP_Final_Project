<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$nic=$_GET['deleteid'];

$sql="DELETE FROM writetous WHERE nic= $nic ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'Responded To Reservation Request ';
// header('location:admindash.php#wht');
echo "<script>alert('Comment deleted');document.location='admindash.php#comment'</script>";

}
else {
    die(mysqli_error($con));
}
}

?>