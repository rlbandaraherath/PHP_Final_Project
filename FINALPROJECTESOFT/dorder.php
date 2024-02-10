<?php
include  'conn.php';
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="DELETE FROM uncompletedorders WHERE ID= $id ";
$result= mysqli_query($con,$sql);
if ($result) {
// echo 'deleted successfully';
// header('location:admindash.php');
echo "<script>alert('Item Delivered');document.location='admindash.php'</script>";
}
else {
    die(mysqli_error($con));
}
}

?>