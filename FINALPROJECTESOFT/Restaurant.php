<?php
include 'conn.php';
// vegetable kottu data submission
if (isset($_POST['submit1'])) {
    $amount = $_POST['vk'];
    $sub_total = 500 * $_POST['vk'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
    VALUES ('Vegetable Kottu', '500','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
// egg kottu data submission
if (isset($_POST['submit2'])) {
    $amount = $_POST['ek'];
    $sub_total = 450 * $_POST['ek'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Egg Kottu', '450','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}

// chicken kottu data submission
if (isset($_POST['submitck'])) {
    $amount = $_POST['ck'];
    $sub_total = 600 *$_POST['ck'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken Kottu', '600','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
// Seafood kottu data submission
if (isset($_POST['submitsk'])) {
    $amount = $_POST['sk'];
    $sub_total = 800 * $_POST['sk'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Seafood Kottu', '800','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
// MIxed kottu data submission
if (isset($_POST['submitmk'])) {
    $amount = $_POST['mk'];
    $sub_total = 1000 * $_POST['mk'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Mixed Kottu', '1000','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}

// vegetable rice data submission
if (isset($_POST['submitvr'])) {
    $amount = $_POST['vr'];
    $sub_total = 400 * $_POST['vr'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Vegetable Rice', '400','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#rice');
    } else {
        die(mysqli_error($con));
    }
}

// egg rice data submission
if (isset($_POST['submiter'])) {
    $amount = $_POST['er'];
    $sub_total = 400 * $_POST['er'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Egg Rice', '400','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#rice');
    } else {
        die(mysqli_error($con));
    }
}

// chicken rice data submission
if (isset($_POST['submitcr'])) {
    $amount = $_POST['cr'];
    $sub_total = 500 * $_POST['cr'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken Rice', '500','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#rice');
    } else {
        die(mysqli_error($con));
    }
}
// seafood rice data submission
if (isset($_POST['submitsr'])) {
    $amount = $_POST['sr'];
    $sub_total = 700 * $_POST['sr'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('SeaFood Rice', '700','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#rice');
    } else {
        die(mysqli_error($con));
    }
}

// Mixed rice data submission
if (isset($_POST['submitmr'])) {
    $amount = $_POST['mr'];
    $sub_total = 800 * $_POST['mr'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Mixed Rice', '800','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#rice');
    } else {
        die(mysqli_error($con));
    }
}


// Vegetable Noodles data submission
if (isset($_POST['submitvn'])) {
    $amount = $_POST['vn'];
    $sub_total = 600 * $_POST['vn'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Vegetable Noodles', '600','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#noodles');
    } else {
        die(mysqli_error($con));
    }
}
// Egg Noodles data submission
if (isset($_POST['submiten'])) {
    $amount = $_POST['en'];
    $sub_total = 500 * $_POST['en'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Egg Noodles', '500','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#noodles');
    } else {
        die(mysqli_error($con));
    }
}
// chicken Noodles data submission
if (isset($_POST['submitcn'])) {
    $amount = $_POST['cn'];
    $sub_total = 600 * $_POST['cn'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken Noodles', '600','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#noodles');
    } else {
        die(mysqli_error($con));
    }
}
// seafood noodles data submission
if (isset($_POST['submitsn'])) {
    $amount = $_POST['sn'];
    $sub_total = 900 * $_POST['sn'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Seafood Noodles', '900','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#noodles');
    } else {
        die(mysqli_error($con));
    }
}
// Mixed noodles data submission
if (isset($_POST['submitmn'])) {
    $amount = $_POST['mn'];
    $sub_total = 1200 * $_POST['mn'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Mixed Noodles', '1200','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#noodles');
    } else {
        die(mysqli_error($con));
    }
}
// Chicken devel data submission
if (isset($_POST['submitcd'])) {
    $amount = $_POST['cd'];
    $sub_total = 1500 * $_POST['cd'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken devel', '1500','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#extra');
    } else {
        die(mysqli_error($con));
    }
}

// pork devel data submission
if (isset($_POST['submitpd'])) {
    $amount = $_POST['pd'];
    $sub_total = 2000 * $_POST['pd'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Pork Devel', '2000','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#extra');
    } else {
        die(mysqli_error($con));
    }
}
//  Mutton devel data submission
if (isset($_POST['submitmd'])) {
    $amount = $_POST['md'];
    $sub_total = 2500 * $_POST['md'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Mutton Devel', '2500','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#extra');
    } else {
        die(mysqli_error($con));
    }
}
//  chicken barbecue data submission
if (isset($_POST['submitcb'])) {
    $amount = $_POST['cb'];
    $sub_total = 2000 * $_POST['cb'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken Barbecue', '2000','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#extra');
    } else {
        die(mysqli_error($con));
    }
}
//  Chicken grilled data submission
if (isset($_POST['submitcg'])) {
    $amount = $_POST['cg'];
    $sub_total = 1800 * $_POST['cg'];
    $sql = "INSERT INTO onlineorder (Food_Item,Price,Amount,Sub_total)
        VALUES ('Chicken Grilled', '1800','$amount',' $sub_total')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo '<script> alert("Succesfully added to cart")</script>';
        header('location:#extra');
    } else {
        die(mysqli_error($con));
    }
}





include 'conn.php';
//
//
//
//
//
//
//
//
// Place order data submission
if (isset($_POST['order'])) {
  
    $name = $_POST['name'];
   $address= $_POST['address'];
    




    $sql1="INSERT INTO uncompletedorders  (ID,Food_Item,Price,Amount,name,address)  
    SELECT ID,Food_Item,Price,Amount,'$name','$address'
    FROM onlineorder " ;
   $result = mysqli_query($con, $sql1); 

//    $name = $_POST['name'];
//    $address= $_POST['address'];

//    $sql4 = "INSERT INTO uncompletedorders  (name,address)
//    VALUES ('$name','$address')";

//    $result3 = mysqli_query($con, $sql4);


   
   $sql2="INSERT INTO restaurantordersreport  (ID,Food_Item,Price,Amount,Sub_Total)
   SELECT ID,Food_Item,Price,Amount,Sub_Total
   FROM onlineorder";
  $result2 = mysqli_query($con, $sql2); 
   
    $sql = "DELETE FROM onlineorder";
     $result4 = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Order placed Succesfully');document.location='restaurant.php#one'</script>";
        // header('location:#main');
    } else {
        die(mysqli_error($con));
    }
}







?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
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

    <!-- main header end   -->



    <!-- Nav bar start  -->
    <nav class="navbar navbar-expand-sm  bg-success navbar-dark justify-content-center py-3 ">
        <ul class="navbar-nav">
            <li class="nav-item">
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
            <li class="nav-item  active">
                <a class="nav-link " href="#">
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
        </ul>
    </nav>

    <!-- navbar end -->

    <!-- slider start -->
    <div class="container-fluid" id="main">
        <div class=" row  justify-content-center">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                    <li data-target="#demo" data-slide-to="5"></li>
                    <li data-target="#demo" data-slide-to="6"></li>
                    <li data-target="#demo" data-slide-to="7"></li>
                    <li data-target="#demo" data-slide-to="8"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Restaurant/1.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/2.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/3.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/4.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/5.webp" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/6.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/7.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/8.jpg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Restaurant/9.jpeg" alt="" width="1050" height="550">
                        <div class="carousel-caption">

                            <p>Restaurants Interior</p>
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
<!-- Feature Start-->
<div class="feature border-top border-primary border-bottom my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fas fa-pizza-slice"></i>
                    <h2>Quality Foods</h2>
                    <p>
                        High quality food made by country's best chefs
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-shopping-bag"></i>
                    <h2>Affodable Prices</h2>
                    <p>
                        Star class service for a very affodable price range
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-truck"></i>
                    <h2>Fast Delivery</h2>
                    <p>
                        All the oders placed at our Resturant are deliverd within max one Hour
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-col">
                <div class="feature-content">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <h2>Excellent Service</h2>
                    <p>
                        Well trained and experienced staff
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->
<!--listed food item display Start row 1 -->

<div class="title  row justify-content-center   py-5" id='one'>
    <div class="col-lg-3">
        <h3>Oder Food Items Online</h3>
    </div>
</div>

<form method="POST" action="">
    <div class="container-fluid  ">

        <div class="row   my-1 justify-content-center align-items-center ">

            <div class="col-lg-2 bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/kottu/1.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6> Vegetable Kottu</h6>

                </div>
                <div class="row  justify-content-center ">
                    RS 500
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="vk">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submit1">
                        Add To Cart </button>
                </div>


            </div>
            <div class="col-lg-2 bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/kottu/2.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Egg Kottu</h6>

                </div>
                <div class="price row justify-content-center">RS 450
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="ek">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submit2">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1">

                <div class="product-image ">

                    <img src="img/kottu/3.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Chicken Kottu</h6>

                </div>
                <div class="price row justify-content-center">RS 600
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="ck">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitck">
                        Add To Cart </button>
                </div>


            </div>
            <div class="col-lg-2 bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/kottu/4.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Seafood Kottu</h6>

                </div>
                <div class="price row justify-content-center">RS 800
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="sk">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitsk">
                        Add To Cart </button>
                </div>

            </div>
            <div class="col-lg-2 bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/kottu/5.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Mixed Kottu</h6>

                </div>
                <div class="price row justify-content-center">RS 1000
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="mk">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitmk">
                        Add To Cart </button>
                </div>
            </div>



        </div>
    </div>


    <!-- listed food item display row 1  end -->

    <!--listed food item display Start row 2 -->
    <div class="container-fluid " id='rice'>
        <div class="row   my-1 justify-content-center align-items-center">

            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Rice/1.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Vegetable Rice</h6>

                </div>
                <div class="price row justify-content-center">RS 400
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="vr">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitvr">
                        Add To Cart </button>
                </div>
            </div>


            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Rice/2.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Egg Rice</h6>

                </div>
                <div class="price row justify-content-center">RS 400
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="er">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submiter">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Rice/3.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Chicken Rice</h6>

                </div>
                <div class="price row justify-content-center">RS 500
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="cr">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitcr">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Rice/4.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Seafood Rice</h6>

                </div>
                <div class="price row justify-content-center">RS 700
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="sr">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitsr">
                        Add To Cart </button>
                </div>
            </div>


            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Rice/5.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Mixed Rice</h6>

                </div>
                <div class="price row justify-content-center">RS 800
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="mr">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitmr">
                        Add To Cart </button>
                </div>
            </div>



        </div>
    </div>


    <!-- listed food item display row 2  end -->


    <!--listed food item display Start row 3 -->
    <div class="container-fluid " id="noodles">
        <div class="row   my-1 justify-content-center align-items-center ">
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Noodles/1.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center">
                    <h6>Vegetable Noodles</h6>

                </div>
                <div class="price row justify-content-center">RS 600
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="vn">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitvn">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Noodles/2.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Egg Noodles</h6>

                </div>
                <div class="price row justify-content-center">RS 500
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="en">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submiten">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Noodles/3.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Chicken Noodles</h6>

                </div>
                <div class="price row justify-content-center">RS 600
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number"  min="0" class="form-control" name="cn">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitcn">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Noodles/4.jpg" alt="Product Image" height="150" width="200">

                </div>
                <div class="title row justify-content-center ">
                    <h6>Seafood Noodles</h6>

                </div>
                <div class="price row justify-content-center">RS 900
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="sn">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitsn">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1 ">

                <div class="product-image ">

                    <img src="img/Noodles/5.jpeg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Mixed Noodles</h6>

                </div>
                <div class="price row justify-content-center">RS 1200
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="mn">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitmn">
                        Add To Cart </button>
                </div>
            </div>



        </div>
    </div>


    <!-- listed food item display row 3  end -->
    <!--listed food item display Start row 4 -->
    <div class="container-fluid " id="extra">
        <div class="row   my-1 justify-content-center align-items-center ">
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1">

                <div class="product-image ">

                    <img src="img/extra/cd.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Chicken Devel</h6>

                </div>
                <div class="price row justify-content-center">RS 1500
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="cd">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitcd">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1  ">

                <div class="product-image ">

                    <img src="img/extra/pd.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Pork Devel</h6>

                </div>
                <div class="price row justify-content-center">RS 2000
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number"  min="0" class="form-control" name="pd">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitpd">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1  ">

                <div class="product-image ">

                    <img src="img/extra/md.jpg" alt="Product Image" height="150" width="200">

                </div>
                <div class="title row justify-content-center ">
                    <h6>Mutton Devel</h6>

                </div>
                <div class="price row justify-content-center">RS 2500
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0"  class="form-control" name="md">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitmd">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1  ">

                <div class="product-image ">

                    <img src="img/extra/cb.jpg" alt="Product Image" height="150" width="200">


                </div>
                <div class="title row justify-content-center ">
                    <h6>Chicken Barbecue</h6>

                </div>
                <div class="price row justify-content-center">RS 2000
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number"  min="0" class="form-control" name="cb">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitcb">
                        Add To Cart </button>
                </div>
            </div>
            <div class="col-lg-2  bg-info text-white py-2 my-2 mx-1  ">

                <div class="product-image ">

                    <img src="img/extra/cg.jpg" alt="Product Image" height="150" width="200">

                </div>
                <div class="title row justify-content-center ">
                    <h6>Chicken Grilled</h6>

                </div>
                <div class="price row justify-content-center">RS 1800
                </div>
                <div class=" form-row   justify-content-center ">
                    <div class=" col-lg-1.5 pt-2 ">
                        <h6> Amount:</h6>
                    </div>
                    <div class="form-group col">
                        <input type="number" min="0" class="form-control" name="cg">
                    </div>
                </div>
                <div class="title row justify-content-center mt-0"><button type="submit" class="btn btn-primary" name="submitcg">
                        Add To Cart </button>
                </div>
            </div>



        </div>
    </div>
</form>

<!-- listed food item display row 4  end -->
<!-- Odered Food Cart list Start -->
<div class="title  row justify-content-center   py-5" id="two">
    <div class="col-lg-3">
        <h3><u>Ordered Food Cart </u></h3>
    </div>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Food Item</th>
                <th scope="col">Price(RS)</th>
                <th scope="col">Amount</th>
                <th scope="col">Sub Total(RS)</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'conn.php';
            $sql = "SELECT * FROM onlineorder";
            $result = mysqli_query($con, $sql);
            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $food_item = $row['Food_Item'];
                    $price = $row['Price'];
                    $amount = $row['Amount'];
                    $sub_total = $row['Sub_Total'];

                    echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $food_item . '</td>
            <td>' . $price . '</td>
            <td>' . $amount . '</td>
            <td>' . $sub_total . '</td>
            <td> <button type="button" class="btn btn-danger"><a href="delete.php?
            deleteid=' . $id . '" class="text-light">Delete</a></button>
            </td>
          </tr>';
                }
            }
            ?>
            <tr>
                <td colspan="6" style="font-size:25px;  text-align:right ">
                    Total Amount is :
                    <?php
                    include 'conn.php';

                    $sql = "SELECT SUM(Sub_Total) AS count 
            FROM onlineorder ";

                    $res = $con->query($sql);

                    $total = 0;
                    $rec =  $res->fetch_assoc();
                    $total = $rec['count'];

                    echo   $total . "\n";


                    ?>
                </td>
            </tr>

        </tbody>
    </table>
    <form method="POST">
        <div class="container row">
<div class="col-lg-6">
<label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Full Name" required>
</div>
<div class="col-lg-6">
<label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter Your Address " required>
</div>
        </div>
        <button type="submit" class="btn btn-primary mt-1 mb-5" style="float: right;" name="order">Place Order</button>
    
    </form>
</div>


<!-- ordered Food cart end  -->
<br /><br />


<!-- review section -display comment start -->
<div class="container" id="comment">
    <h5><u> Customer Reviews</u></h5>

    <div class="container" >
       
        <div style=" height:250px; overflow:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Comment</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'conn.php';
                    $sql = "SELECT * FROM restaurantcomments";
                    $result = mysqli_query($con, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $comment = $row['comment'];
                           

                            echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $comment . '</td>
           
           
           
          </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>


        </div>
    </div>






</div>

<!-- review section -display comment end -->
<br /><br />




<!-- review section add comment start -->
<div class="container"><form method="POST">
    <h5><u>Please Add your comment Here </u><h5>
    <br/>
    <div class="form-group">
    <label >Name</label>
    <input type="Text" class="form-control" id="exampleInputEmail1"  name ="name"  placeholder="Enter Your Name" required>
    </div>
    <div class="form-group">
    <label >Add Your Comment</label>
    <textarea class="form-control" name="comment" rows="3" placeholder="Add your Comment Here" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit5">Comment</button>
<form>
</div>
<?php

include 'conn.php';
if (isset($_POST['submit5'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
   
   $sql = "INSERT INTO restaurantcomments (name,comment)
    VALUES ('$name','$comment')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Comment Submited');document.location='Restaurant.php#comment'</script>";
        echo "<meta http-equiv='refresh' content='0'>";
        // header('location:#one');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!-- review section add comment end -->





<!-- footer start -->

<div class="container-fluid my-2 mx-0">

    <footer style="background-color: #dff3f5; ">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-4">
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
                            <a href="Main.php" style="color: #0b0979;">Log In (Main Page)</a>
                        </li>
                        <li class="mb-1">
                            <a href="Hotel.php" style="color: #0b0979;">Reserve a Room</a>
                        </li>
                        <li class="mb-1">
                            <a href="Bar.php" style="color: #0b0979;">Reserve a Bar Table</a>
                        </li>
                        <li>
                            <a href="Contactus.php" style="color: #0b0979;">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-primary">Online Odering available</h5>
                    <table class="table text-primary" style="border-color: rgb(7, 5, 122);">
                        <tbody>
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>8am - 7pm</td>
                            </tr>
                            <tr>
                                <td>Sat - Sun:</td>
                                <td>10am - 8pm</td>
                            </tr>
                            <tr>
                                <td colspan="2">Open Everyday From 8am to 10pm
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