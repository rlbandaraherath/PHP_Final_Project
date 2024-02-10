<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa</title>
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
<?php
include 'conn.php';
// spa reservation data submission
if (isset($_POST['submit2'])) {
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $address =$_POST['address'];
    $email =$_POST['email'];
    $nic = $_POST['nic'];
    $therapist =$_POST['therapist'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $sql = "INSERT INTO spareservation (name,telephone,address,email,nic,therapist,date,time)
    VALUES ('$name','$telephone','$address','$email','$nic','$therapist','$date','$time')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script> alert("Reservation request submitted ")</script>';
        // header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}


?>







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
            <li class="nav-item active">
                <a class="nav-link " href="#">
                    <h5>Spa</h5>
                </a>
            </li>
        </ul>
    </nav>

    <!-- navbar end -->

    <!-- slider start -->
    <div class="container-fluid">
        <div class=" row  justify-content-center">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Spa/1.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">
<!-- 
                            <p>Image eke wistharayak</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Spa/2.webp" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <!-- <p>Image eke wistharayak</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Spa/3.webp" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <!-- <p>Image eke wistharayak</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Spa/4.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <!-- <p>Image eke wistharayak</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Spa/5.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <!-- <p>Image eke wistharayak</p> -->
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>
</body>
<!-- slider end -->


<!-- wedding hall reservation -->
<div class=" container text-center border-top border-primary  my-5"  style="background-image:url('s.webp');">
    <form action="" method ="POST">
        <div class="text-center my-5 ">
            <h3>Spa Reservation Form</h3>
        </div>
        <br />
        <div class="form-group row justify-content-center">
            <label for="inputEmail3" class="col-lg-2 col-form-label">
                <h7>Name : </h7>
            </label>
            <div class="col-lg-3">

                <input type="text" class="form-control" name="name" required>

            </div>
            <div class="col-lg-2">
                <h7>Telephone No : </h7>
                <!-- <input type="text" class="form-control" id="inputEmail3"> -->

            </div>
            <div class="col-lg-3">

                <input type="number" class="form-control" name ="telephone" required>

            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="inputEmail3" class="col-lg-2 col-form-label">
                <h7>Address : </h7>
            </label>
            <div class="col-lg-3">

                <input type="text" class="form-control" name = "address"  required>

            </div>
            <div class="col-lg-2">
                <h7>E-mail : </h7>
                <!-- <input type="text" class="form-control" id="inputEmail3"> -->

            </div>
            <div class="col-lg-3">

                <input type="email" class="form-control" name = "email" required>

            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="inputEmail3" class="col-lg-2 col-form-label">
                <h7>NIC No : </h7>
            </label>
            <div class="col-lg-3">

                <input type="number" class="form-control" name = "nic" required>

            </div>
            <div class="col-lg-2">
                <h7>Select Therapist : </h7>
                <!-- <input type="text" class="form-control" id="inputEmail3"> -->

            </div>
            <div class="col-lg-3">

                <select class="browser-default custom-select" name="therapist" required>
                    
                    <option selected >Nipuni</option>
                    <option >Shehani</option>
                    <option >Kasuni</option>
                    <option >Madushani</option>
                </select>

            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="inputEmail3" class="col-lg-2 col-form-label">
                <h7>Date : </h7>
            </label>
            <div class="col-lg-3">

                <input type="Date" class="form-control" name ="date" required>

            </div>
            <div class="col-lg-2">
                <h7>Time slot : </h7>
                <!-- <input type="text" class="form-control" id="inputEmail3"> -->

            </div>
            <div class="col-lg-3">

                <select class="browser-default custom-select" name="time" required>
                    <option selected>8-10</option>
                    <option >10-12</option>
                    <option>13-15</option>
                    <option >15-17</option>
                </select>

            </div>
        </div>
       
        <div class="form-group row justify-content-center my-5">
          
            <div class="col-lg-3">

            <button type="submit" class="btn btn-primary my-5" name ="submit2">Request Reservation</button>

            </div></br>
        </div>
    </form>
</div>

<!-- wedding hall reservation  end -->


<!-- footer start -->

<div class="container-fluid my-2 mx-0">

    <footer style="background-color: #dff3f5; ">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3 text-primary">Semasiri Group</h5>
                    <h7 class="text-primary">
                    Semasiri group is a 35 years old business located in Nikaweratiya with a chain of Wedding Halls, Hotels, Restaurants and catering services.With in those 35 years we have served more than millions of customers and was able to win the Hearts of those millions of customers with our Superior quality foods and star class service </h7>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-primary">We Are Open</h5>
                    <table class="table text-primary" style="border-color: rgb(7, 5, 122);">
                        <tbody>
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>8am - 6pm</td>
                            </tr>
                            <tr>
                                <td>Sat - Sun:</td>
                                <td>8am - 10pm</td>
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
</body>

</html>