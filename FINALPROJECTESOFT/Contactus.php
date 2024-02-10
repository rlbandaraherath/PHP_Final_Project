<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
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
    <!-- main header start  -->
    <div class="row jumbotron  row justify-content-center align-items-center bg-primary text-white my-1 py-3">
        <h1 style="font-family:courier;">Semasiri Group Of Companies</h1>
    </div>

    <!-- main header end   -->



    <!-- Nav bar start  -->
    <nav class="navbar navbar-expand-sm  bg-success navbar-dark justify-content-center py-3 ">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="Main.php">
                    <h5>Main</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Weddinghall.php">
                    <h5>Wedding Hall</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Hotel.php">
                    <h5>Hotel</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="Cateringservice.php">
                    <h5>Catering Service</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="Restaurant.php">
                    <h5>Restaurant</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="Bar.php">
                    <h5>Bar</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="Spa.php">
                    <h5>Spa</h5>
                </a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link " href="Contactus.php">
                    <h5>Contact us</h5>
                </a>
            </li>
        </ul>
    </nav>

    <!-- navbar end -->
    <!-- subscribe start  -->

    <div class="container "><form method="POST">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <h5>Subscribe to Get Information About Seasonal Offers</h6>

            </div>
        </dIv>
        <div class="row justify-content-center py-5 border-bottom  border-primary">
            <div class="col-lg-1 py-1">
                <h5>E-Mail</h5>
            </div>
            <div class="col-lg-3">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-primary" name="submit1">Subscribe</button>
            </div>


        </div></form>
    </div>

    <?php

include 'conn.php';
if (isset($_POST['submit1'])) {
    $email = $_POST['email'];
   
    $sql = "INSERT INTO subscribe (email)
    VALUES ('$email')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('succesfully Subscribed');document.location='Contactus.php'</script>";
        // header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
?>

 <!-- subscribe end -->





 
<!-- write to us start -->
    <div class="container border-bottom  border-primary pb-4 ">
        <form method="POST">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-2">
                <h5>Write to us</h6>

            </div>
        </dIv>
        <div class="row justify-content-center py-3 ">
            <div class="col-lg-1 py-1">
                <h5>Name</h5>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name"  required>
            </div>
            <div class="col-lg-1">
                <h5>Address</h5>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="address" placeholder="Enter YourAdress"  required>
            </div>
        </div>
        <div class="row justify-content-center py-3 ">
            <div class="col-lg-1 py-1">
                <h5>NIC</h5>
            </div>
            <div class="col-lg-3">
                <input type="number" class="form-control" name="nic" placeholder="Enter Your NIC No"  required>
            </div>
            <div class="col-lg-1 py-1">
                <h5>Email</h5>
            </div>
            <div class="col-lg-3">
                <input type="email" class="form-control" name="email" placeholder="Enter Your E-Mail"  required>
            </div>

        </div>
        <div class="row justify-content-center py-3 ">
            <div class="col-lg-1.5 py-1">
                <h5>Comments </h5>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="comment" placeholder="Comments"  required>
            </div>
            
        </div>
        <div class="row justify-content-center py-3 ">
        <div class="col-lg-2">
                <button type="Submit" class="btn btn-primary" name="submit2">Submit</button>
            </div>
        </div>
    </form>
    </div>


<!-- stop form resubmission -->

    <!-- resubmission end -->
<?php
include 'conn.php';
// write to us data submission
if (isset($_POST['submit2'])) {
    $name = $_POST['name'];
    $address =$_POST['address'];
    $email =$_POST['email'];
    $nic = $_POST['nic'];
    $comment =$_POST['comment'];
   
    $sql1 = "INSERT INTO writetous (name,address,nic,email,comment)
    VALUES ('$name','$address','$nic','$email','$comment')";

    $result = mysqli_query($con, $sql1);

    if ($result) {
        echo '<script> alert("SUccesfully submitted ")</script>';
        // header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}


?>





 <!-- write to us end -->

<!-- company details start  -->




<!-- company details end -->




    <!-- footer start -->

    <div class="container-fluid my-2 mx-0">

        <footer style="background-color: #dff3f5; ">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-5 col-md-12 my-4">
                        <h5 class="mb-3 text-primary">Semasiri Group</h5>
                        <h7 class="text-primary">
                            E-Mail1 - Semasirigroup@slt.net<br>
                            E-Mail2 - Semasirihotel@slt.net<br>
                            Telephone(Office)-0372260660<br>
                            Telephone(Hotel) -0372260520<br>

                        </h7>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3 text-primary"></h5>
                        </br>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="Main.php" style="color: #0b0979;">Log In (Main Page)</a>
                            </li>
                            <li class="mb-1">
                                <a href="Hotel.php" style="color: #0b0979;">Reserve a Room</a>
                            </li>
                            <li class="mb-1">
                                <a href="Restaurant.php" style="color: #0b0979;">Oder Food</a>
                            </li>
                            <li>
                                <a href="Contactus.php" style="color: #0b0979;">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <br />
                        <h5>Company Address</h5>
                        Semasiri Group Of Companies,<br />
                        Galapitiyagama,<br />
                        Nikaweratiya.<br />
                        60470
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
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>