<?php
    include_once 'backend/cart.php';
    include_once 'backend/account.php';

    $customerCart = $cart->getCartData();
    print_r($customerCart);
    session_start();

    $accountID = 0;
    if(isset($_SESSION['account'])) {
        $accountID = $account->getIDByUsername($_SESSION['account']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>AutoShop</title>
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
    <?php include_once 'navheader.php' ?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <e>CART</e>
        </a>
    </nav>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <div class="container">
        <form method="post" action="backend/purchase.php">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 d-flex flex-row-reverse">
                    <input type="submit" class="btn btn-primary btn-lg" value="Purchase" name="purchaseNow" />
                </div>
            </div>
            <input type="text" value="<?php echo $accountID?>" name="accountID" hidden="hidden"/>
            <?php
        if(sizeof($customerCart)) {
        foreach($customerCart as $vehicleInfo) { ?>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-lg-2">
                    <input type="checkbox" id="check_list" name="check_list[]" value="<?php echo $vehicleInfo['id']?>">
                </div>
                <div class="col-md-5 col-sm-5 col-lg-4">
                    <img class="img2" src="images/117.jpg"><br>
                </div>
                <div class="col-md-5 col-sm-5 col-lg-4">
                    <h1><?php echo $vehicleInfo['brand'] ?></h1>
                    <h1><?php echo $vehicleInfo['model'] ?></h1>
                </div>
            </div>
            <?php } }?>
        </form>
    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>


    <?php include_once 'navfooter.php' ?>
</body>

</html>