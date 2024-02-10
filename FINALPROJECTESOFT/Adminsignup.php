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
    <!-- signup form  start  -->

    <div class="container">
        <h3 class="text-center py-5">New Administrator Registration</h3>
        <form action="signupvalidation.php" method="POST" >
            <div class="row justify-content-center my-2">
                <div class="col-1 pt-1">
                    <h5>Name</h5>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="name" placeholder="Name Here" required>
                </div>
                <div class="col-1 pt-1">
                    <h5>Address</h5>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="address" placeholder="Address Here"  required>
                </div>
            </div>
            <div class="row justify-content-center my-2">
                <div class="col-1 pt-1">
                    <h5>Position</h5>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="position" placeholder="Company position Here"  required>
                </div>
                <div class="col-1 pt-1">
                    <h5>NIC </h5>
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="nic" placeholder="NIC No Here"  required>
                </div>
            </div>
            <div class="row justify-content-center my-2">
                <div class="col-1 pt-1">
                    <h5>E-Mail</h5>
                </div>
                <div class="col-3">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail Here"  required>
                </div>
                <div class="col-1 pt-1">
                    <h5>Tel No </h5>
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="telno" placeholder="Telephone Number Here"  required>
                </div>
            </div>
            <div class="row justify-content-center my-2">
                <div class="col-1.5 pt-1">
                    <h5>User-Name</h5>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" name="username" placeholder="User name Here" required >
                </div>
                <div class="col-1 pt-1">
                    <h5>Password </h5>
                </div>
                <div class="col-3">
                    <input type="password" class="form-control" name="password" placeholder="Password Here" required>
                </div>
            </div>
            <div class="row justify-content-center my-2">

                <!-- <div class="col-2 mt-5">
                    <button type="button" class="btn btn-primary">Main Page</button>
                </div> -->

                <div class="col-3 mt-5">
                    <button type="submit" class="btn btn-primary">Create New Account</button>
                </div>
            </div>



        </form>
    </div>




    <!-- signup form end -->



    <!-- footer start -->

    <div class="container-fluid mt-5    ">

        <footer style="background-color: #dff3f5; ">
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-5 col-md-12 mb-4">
                        <h5 class="mb-3 text-primary">BookMyRoom</h5>
                        <h7 class="text-primary">
                            BookMyRoom provides Sri Lanka hotel deals and special discounted prices for online hotel room booking in Sri Lanka. Find the perfect hotel within your budget here in BookMyRoom Hotel Reservations. This is a well known website for booking Sri Lankan Hotels and Accommodation. Trusted for the best offers and best deals for hotel rooms in Sri Lanka. Best price guaranteed with instant confirmation.
                        </h7>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="mb-3 text-primary"></h5>
                        </br>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="Main.php" style="color: #0b0979;">Main Page</a>
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
                    <!-- <div class="col-lg-5 col-md-6 mb-4">
                        <h5 class="mb-1 text-primary">Administrator Login</h5>
                        <table class="table text-primary" style="border-color: rgb(7, 5, 122);">
                            <tbody>
                                <form>
                                    <tr>
                                        <td>User Name</td>
                                        <td><input type="Text" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td>PassWord</td>
                                        <td><input type="password" class="form-control" id="usr"></td>
                                    </tr>
                                    <tr>
                                        <td> <a href="Adminrecover.php">Recover Password</a></td>
                                        <td><button type="button" class="btn btn-primary mx-5">Log In</button></td>
                                    </tr>
                                    <!-- <tr>
                                <td  colspan=2 ><a href="">Recover Password</a></td>
                                   
                                </tr> -->
                                </form>
                            </tbody>
                        </table>
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