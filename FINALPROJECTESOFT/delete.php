<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="DELETE FROM onlineorder WHERE ID= $id ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'deleted successfully';
header('location:Restaurant.php#two');
}
else {
    die(mysqli_error($con));
}
}

?>