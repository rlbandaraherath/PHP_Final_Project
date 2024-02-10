<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashbord</title>
    <!-- Favicon  ^^meka on neththan ain karamu -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    

    
</head>

<body>

    <!-- stop form resubmission -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <!-- resubmission end -->
    <!-- main header start  -->
    <div class="row jumbotron  row justify-content-center align-items-center bg-primary text-white my-1 py-3">
        <h1 style="font-family:courier;">Semasiri Group Of Companies</h1>
    </div>
    <h2 class="text-center my-5">Administrator Dashbord</h2>
    <!-- main header end   -->


    <!-- Resturant oders start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="restaurant">
        <li class="nav-item">
            <a class="nav-link active" href="#">Resturant Undelivered Order list</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>
        <div class="container-fluid"  style=" height:250px; overflow:auto;">
            <table class="table"  >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Food Item</th>
                        <th scope="col">Price(RS)</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM uncompletedorders";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['ID'];
                            $food_item = $row['Food_Item'];
                            $price = $row['Price'];
                            $amount = $row['Amount'];
                            $name = $row['name'];
                            $address = $row['address'];

                            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $food_item . '</td>
            <td>' . $price . '</td>
            <td>' . $amount . '</td>
            <td>' . $name . '</td>
            <td>' . $address . '</td>
            <td> <button type="button" class="btn btn-danger"><a href="dorder.php?
            deleteid=' . $id . '" class="text-light">Delivered</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
        </div>


    </ul>
    <!-- Resturant oders end  -->

    <!-- Wedding Hall Reservation start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="weddinghall" id="wht">
        <li class="nav-item">
            <a class="nav-link active" href="#">Wedding Hall Reservation Requests</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>
    <!-- wedding hall reservation requsts table -->
    <div class="container">
        <h5> Wedding Hall Reservation Requests </h5>
        <div  style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Hall Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Food Package</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM weddinghallreservation";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic_no'];
                            $hallname = $row['hall_name'];
                            $date = $row['date'];
                            $foodpackage = $row['food_package'];

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $telephone . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $hallname . '</td>
            <td>' . $date . '</td>
            <td>' . $foodpackage . '</td>
           
            <td> <button type="button" class="btn btn-danger"><a href="whdelete.php?
            deleteid=' . $nic . '" class="text-light">Answered</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>
    <!-- Wedding Hall Reservation end with-->

    <!-- Catering Service Reservation start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="catering">
        <li class="nav-item">
            <a class="nav-link active" href="#">Catering Service Reservation Requests</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>

    <!-- catering service submission -->
    <div class="container">
        <h5> Catering Service Reservation Requests </h5>
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Number of Participants</th>
                        <th scope="col">Date</th>
                        <th scope="col">Food Package</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM cateringreservation";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic'];
                            $noofparticipants = $row['no_of_participants'];
                            $date = $row['date'];
                            $foodpackage = $row['selected_package'];

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $telephone . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $noofparticipants . '</td>
            <td>' . $date . '</td>
            <td>' . $foodpackage . '</td>
           
            <td> <button type="button" class="btn btn-danger"><a href="csdelete.php?
            deleteid=' . $nic . '" class="text-light">Answered</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>




    <!-- Catering Service Reservation end with-->



    <!-- Report -hotel  Reservation start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="hotel">
        <li class="nav-item">
            <a class="nav-link active" href="#">Report-Hotel Reservation </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#report">Report-Restaurant online odrers</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>


    <div class="container">
        <h5> Hotel Reservation Requests </h5>
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">checkIn</th>
                        <th scope="col">CheckOut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM hotelreservation";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic'];
                            $roomtype = $row['room_type'];
                            $checkin = $row['check_in'];
                            $checkout = $row['check_out'];

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $telephone . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $roomtype . '</td>
            <td>' . $checkin . '</td>
            <td>' . $checkout . '</td>
           
           
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
        <a href="javascript:void(0);" onclick="printPage2();"><b>Print This Table</b></a> 
    </div>




    <!-- hotelReservation end with-->
    <!-- Bar Reservation start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="bar">
        <li class="nav-item">
            <a class="nav-link active" href="#">Bar Reservation Requests</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>
    <!-- bar table data submission -->

    <div class="container">
        <h5> Bar Reservation Requests </h5>
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Number of Tables</th>
                        <th scope="col">Date</th>
                        <th scope="col">Special Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM barreservation";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic'];
                            $nooftables = $row['no_of_tables'];
                            $date = $row['date'];
                            $request = $row['request'];

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $telephone . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $nooftables . '</td>
            <td>' . $date . '</td>
            <td>' . $request . '</td>
           
            <td> <button type="button" class="btn btn-danger"><a href="bdelete.php?
            deleteid=' . $nic . '" class="text-light">Answered</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>
    <!-- Bar Reservation end with-->


    <!-- Reports-Restaurant online orders start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="report">
        <li class="nav-item">
            <a class="nav-link active" href="#">Report-Restaurant Online orders </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

        <li>
            <br />


        </li>
    </ul>
    <!-- restaurant total sales report -->


    <div class="container" >
        <h5>Restaurant Total Sales</h5>
        <div style=" height:250px; overflow:auto;">



            <table class="table" id="your_content">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Food Item</th>
                        <th scope="col">Price(RS)</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM restaurantordersreport";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['ID'];
                            $food_item = $row['Food_Item'];
                            $price = $row['Price'];
                            $amount = $row['Amount'];
                            $subtotal = $row['Sub_Total'];

                            echo '<tr>
                                    <th scope="row">' . $id . '</th>
                                 <td>' . $food_item . '</td>
                                 <td>' . $price . '</td>
                                  <td>' . $amount . '</td>
                                 <td>' . $subtotal . '</td>
         
                                 </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
          
        </div><br/>
        <a href="javascript:void(0);" onclick="printPage1(); "><b>Print this Table</b></a> 
    </div>

    <!-- restaurant total sales report end -->




    <!-- spa Reservation start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="spa">
        <li class="nav-item">
            <a class="nav-link active" href="#">Spa Reservation Requests</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>
    <!-- spa table data submission -->

    <div class="container" >
        <h5> Spa Reservation Requests </h5>
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Therapist Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time Slot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM spareservation";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $telephone = $row['telephone'];
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic'];
                            $therapist = $row['therapist'];
                            $date = $row['date'];
                            $time = $row['time'];

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $telephone . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $therapist . '</td>
            <td>' . $date . '</td>
            <td>' . $time . '</td>
           
            <td> <button type="button" class="btn btn-danger"><a href="sdelete.php?
            deleteid=' . $nic . '" class="text-light">Answered</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>
    <!-- spa Reservation end with-->


    <!-- Data update start  -->
    <ul class="nav nav-pills  border-top border-primary my-5" id="data">
        <li class="nav-item">
            <a class="nav-link active" href="#">Data Update Request</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#comment">Contact us-Comment</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>
    <!-- Data update request -->
    <div class="container"><form method="POST">
        <h5>Please Enter Your Request</h5>
        <textarea id="w3review" name="request" rows="10" cols="150" required>
Please enter your request Here
</textarea><br/>
<button type="submit" class="btn btn-primary" name="submit1">Send</button>
                </form>
    </div>
    <!-- Submit request to the table -->
<?php

include 'conn.php';
if (isset($_POST['submit1'])) {
    $request = $_POST['request'];
   
    $sql = "INSERT INTO requestreport (request)
    VALUES ('$request')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Request Submited');document.location='admindash.php#data'</script>";
        // header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
?>
<br/><br/>
<!-- Show submited request report -->
<div class="container" >
        <h5> Report - All Submitted Requests</h5>
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Requst</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM requestreport";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $request = $row['request'];
                           

                            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $request . '</td>
           
           
           
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>







    <!--Data update end -->



<!-- comments start -->

 <!-- Data update start  -->
 <ul class="nav nav-pills  border-top border-primary my-5" id="comment">
        <li class="nav-item">
            <a class="nav-link active" href="#">contact us-Comments</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Select Section</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#restaurant">Resturant Undelivered Order list</a>
                <a class="dropdown-item" href="#catering">Catering Service Reservation Requests</a>
                <a class="dropdown-item" href="#bar">Bar Reservation Requests</a>
                <a class="dropdown-item" href="#spa">spa Reservation Requests</a>
                <a class="dropdown-item" href="#weddinghall">Wedding Hall Reservation Requests</a>
                <a class="dropdown-item" href="#hotel">Report-Hotel Reservation</a>
                <a class="dropdown-item" href="#report">Report-Restaurant Online orders</a>
                <a class="dropdown-item" href="#data">Data Update Request</a>
                <a class="dropdown-item" href="Main.php">Log Out</a>
                <!-- <a class="dropdown-item" href="#">Separated link</a> -->
            </div>
        </li>

    </ul>
<!-- comments table view -->

<div class="container" >
       
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                       
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">NIC No</th>
                        <th scope="col">Comments</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM writetous";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                           
                            $address = $row['address'];
                            $email = $row['email'];
                            $nic = $row['nic'];
                            $comment = $row['comment'];
                           

                            echo '<tr>
            <th scope="row">' . $name . '</th>
           
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $nic . '</td>
            <td>' . $comment . '</td>
           
           
            <td> <button type="button" class="btn btn-danger"><a href="cdelete.php?
            deleteid=' . $nic . '" class="text-light">Delete</a></button>
            </td>
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
        <a href="javascript:void(0);" onclick="printPage(); "><b>Print this Table</b></a> 
    </div>



<!-- comments end -->

<br/><br/>

    <!-- footer start -->

    <div class="container-fluid my-2 mx-0">

        <footer style="background-color: #dff3f5; ">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="mb-3 text-primary">Semasiri Group</h5>
                        <h7 class="text-primary">
                            Semasiri group is a 35 years old business located in Nikaweratiya with a chain of Wedding Halls, Hotels, Restaurants and catering services.With in those 35 years we have served more than millions of customers and was able to win the Hearts of those millions of customers with our Superior quality foods and start class service </h7>
                        </h7>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3 text-primary"></h5>
                        </br>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="Adminsignup.php" style="color: #0b0979;">
                                    <h5>Create New Account</h5>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href="Main.php" style="color: #0b0979;">Log Out</a>
                            </li>
                            <li class="mb-1">
                                <a href="Hotel.php" style="color: #0b0979;">Reserve a Room</a>
                            </li>
                            <li class="mb-1">
                                <a href="Hotel.php" style="color: #0b0979;">Cancel a Reservation</a>
                            </li>
                            <li>
                                <a href="Contactus.php" style="color: #0b0979;">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-1 text-primary">Head office open</h5>
                        <table class="table text-primary" style="border-color: rgb(7, 5, 122);">
                            <tbody>
                                <tr>
                                    <td>Mon - Fri:</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat - Sun:</td>
                                    <td>8am - 11am</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Book Online At Any Time
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Facebook -->
                <a style="color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f fa-lg mx-3 my-3"></i></a>

                <!-- Twitter -->
                <a style="color: #55acee;" href="#!" role="button"><i class="fab fa-twitter fa-lg mx-3 my-3"></i></a>

                <!-- Google -->
                <a style="color: #dd4b39;" href="#!" role="button"><i class="fab fa-google fa-lg mx-3 my-3"></i></a>

                <!-- Instagram -->
                <a style="color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram fa-lg my-3"></i></a>
            </div>
        </footer>

    </div>


    <!-- footer end -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
 
 <!-- print---restaurant -->
 <script type="text/javascript">
 function printPage1(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[5].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
 </script>


<!-- print hotel reservation -->

<script type="text/javascript">
 function printPage2(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[3].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
 </script>

 <!-- print comments -->

<script type="text/javascript">
 function printPage(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[8].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
 </script>
</body>

</html>