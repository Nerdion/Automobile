<?php include_once 'backend/vehicle.php';

$data = $vehicle->getVehicleData();

session_start();

if(!$_SESSION['admin']) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Admin</title>
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
    <?php include_once 'navheader.php'?>
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

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="addV.php"><input type="button" value="Add Vehicle" class="btn btn-primary btn-lg"/></a>
            </div>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Wheels</th>
                        <th scope="col">Price</th>
                        <th scope="col">Mileage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $value) { ?>
                    <tr>
                        <td><?php echo $value['id'] ?> </td>
                        <td><?php echo $value['brand'] ?></td>
                        <td><?php echo $value['model'] ?></td>
                        <td><?php echo $value['wheels'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['mileage'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <br><br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li>
                <h6>follow us :- </h6>
            </li>
            <li class="breadcrumb-item ml-auto"><a href="fb.html"><img class="img1" src="33.png" width="25"
                        height="25"></a></li>
            <li class="breadcrumb-item"><a href="insta.html"><img class="img1" src="34.png" width="25" height="25"></a>
            </li>
            <li class="breadcrumb-item"><a href="twitter.html"><img class="img1" src="35.png" width="25" height="25">
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