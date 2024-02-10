<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
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
        </ul>
    </nav>

    <!-- navbar end -->
    <!-- password recover form start -->
    <div class="container ">
        <h3 class="text-center my-5">Recover Password Wizard</h3>
        <div>
            <form class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="email" class="form-control" name="name" aria-describedby="emailHelp" placeholder="User Name">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Email Address</label>
                        <input type="text" class="form-control" name="email"  placeholder="Recovery Email">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                </div>
            </form>
        </div>



    </div>

    <!-- password recover form end -->
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
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="mb-3 text-primary"></h5>
                        </br>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="#!" style="color: #0b0979;">Log In</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color: #0b0979;">Reserve a Room</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color: #0b0979;">Cancel a Reservation</a>
                            </li>
                            <li>
                                <a href="#!" style="color: #0b0979;">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 mb-4">
                        <h5 class="mb-1 text-primary">Administrator Login</h5>
                        <form action="">
                            <table class="table text-primary" style="border-color: rgb(7, 5, 122);">
                                <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td><input type="Text" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td>PassWord</td>
                                        <td><input type="password" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="button" class="btn btn-primary mx-5">Log In</button></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2><a href=""></a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div> -->
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