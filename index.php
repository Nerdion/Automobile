<?php include_once 'backend/vehicle.php';

$data = $vehicle->getVehicleData();

session_start();

if(!$_SESSION['customer']) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>home page</title>
    <style type="text/css">
    .bg {
        background-color: lightgrey;
    }

    .carousel-inner {
        height: 350px;
    }

    .carousel-inner img {
        height: 350px;
    }

    .logo-image {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        overflow: hidden;
        margin-top: -6px;
    }

    .navbar-brand {
        margin: -5px;
        padding: -5px;
    }

    .img {
        height: 50px;
        width: 80px;
    }

    .img2 {
        height: 130px;
        width: 130px;
        padding: 3px 3px;
        margin-left: 50px;
        margin-right: 35px;
        margin-top: 10px;
        margin-bottom: 10px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 1);
    }

    d {
        font-weight: bold;
        color: red;
    }

    e {
        font-weight: bold;
    }

    p1 {
        font-weight: bold;
    }

    p {
        font-weight: bold;
        color: black;
        text-align: center;
    }

    h3 {
        font-weight: bold;
        color: black;
        text-align: center;
    }

    h4 {
        font-weight: bold;
    }

    h5 {
        font-weight: bold;
        padding: 0px 70px;
    }

    h6 {
        color: black;
        text-align: center;
    }
    </style>
</head>


<body class="bg">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img class="img rounded-circle" src="images/21.jpg">
            <d> AUTO</d>
            <e>SHOP</e>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.html">Home
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Service
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="orders.html">Orders</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about_us.html">About Us
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <img class="img1" src="images/32.png" width="25" height="25">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="login.php">Login/Signup</a>
                    <a class="dropdown-item" href="my_profile.html">My Profile</a>
                    <a class="dropdown-item" href="orders.html">Orders</a>
                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="payment.html">Payment</a>
                    <a class="dropdown-item" href="address.html">Address</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">
                    <img class="img1" src="images/31.png" width="25" height="25">
                </a>
            </li>
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
        </ul>
    </nav>
    <br><br><br>

    <h3>
        Latest upcoming cars/bikes are here.<br>
        Register now
    </h3>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/61.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Audi Q8</h4>
                    <p1>Confirmed For India; Launch This Year.</p1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/62.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tesla Cybertruck</h4>
                    <p1>The Tesla Cybertruck is an all-electric battery-powered light commercial vehicle<br>
                        <a class="link" href="https://www.youtube.com/watch?v=Ulq8A2V79JA">
                            <p1>Click here to view the Driving and Launching Shots</p1>
                        </a>
                    </p1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/65.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>KTM 390 Adventure</h4>
                    <p1>Expected launch date<br>January 2020</p1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/63.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tesla Model Y</h4>
                    <p1>Tesla’s first-ever compact SUV is expected to enter production in 2020</p1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/66.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Yamaha YZF R1M [2020]</h4>
                    <p1>The Nexon EV has been unveiled in its production form ahead of its launch in the first quarter
                        of 2020, <br>read the details here. Bookings will commence starting December 20.</p1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/64.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Tata Nexon EV</h4>
                    <p1>Expected launch date<br>February 2020</p1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <br>

    <div class="container-fluid">
        <div class="row">
            <?php foreach ($data as $value) { ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <a class="link" href="vehicle.php?id=<?php echo $value['id']?>">
                    <img class="img2" src="images/117.jpg"><br>
                    <p><?php echo $value['brand'];?> &nbsp<?php echo $value['model'] ?></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <br>


    <br>
    <br>
    <br><br><br><br>

    <nav class="navbar navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.html">Home
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about_us.html">About Us
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQs
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="feedback.html">Feedback
                </a>
            </li>

        </ul>
    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <h6>follow us :- </h6>
            </li>
            <li class="breadcrumb-item ml-auto"><a href="fb.html"><img class="img1" src="33.png" width="25"
                        height="25"></a></li>
            <li class="breadcrumb-item"><a href="insta.html"><img class="img1" src="34.png" width="25" height="25"></a>
            </li>
            <li class="breadcrumb-item"><a href="teitter.html"><img class="img1" src="35.png" width="25" height="25">
            </li></a>
        </ol>
    </nav>

    <h6>
        Copyright © 2020 - www.autoshop.co.in.<br>
        All Rights Reserved<br>
        Designed and Hosted by 9900-group
    </h6>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>