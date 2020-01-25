<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>signup page</title>
    <style type="text/css">
    .bg {
        background: url('images/42.png') no-repeat;
        background-size: cover;
        background-position: center;
    }

    #log {
        padding: 40px 40px;
        margin-top: 70px;
        margin-bottom: 30px;
        -webkit-box-shadow: 7px 7px 18px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: 7px 7px 18px 0px rgba(255, 255, 255, 1);
        box-shadow: 7px 7px 18px 0px rgba(255, 255, 255, 1);
    }

    .img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: 10px;
        left: calc(50% - 50px);
    }

    h5 {
        color: white;
        text-align: center;
        font-weight: bold;
    }

    label {
        color: white;
        font-size: 18px;
    }

    .lin {
        color: #ffff;
        text-align: center;
        font-size: 13px;
    }
    </style>
    </style>
</head>

<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-12"></div>
            <div class="col-md-6 col-sm-4 col-xs-12">
                <form id="log" method="post" action="backend/vehicle.php" enctype="multipart/form-data">
                    <h5>ADD VEHICLE</h5>
                    <img class="img" src="images/21.jpg">
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="brand" class="form-control" placeholder="brand name">
                        <label>Model Number</label>
                        <input type="text" name="modelNo" class="form-control" placeholder="model no.">
                    </div>
                    <div class="form-group">
                        <label>No. Of Wheels</label>
                        <input type="text" name="noOfWheels" class="form-control" placeholder="no. of wheels">
                    </div>
                    <div class="form-group">
                        <label for="price">Ex-showroom Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="mileage">Mileage</label>
                        <input type="text" name="mileage" class="form-control" id="mileage" placeholder="mileage"><br>
                    </div>
                    <div class="form-group">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <button name="addNewVehicle" type="submit" class="btn btn-success btn-block">Add</button>
                </form>
            </div>
            <div class="col-md-1 col-sm-4 col-xs-12"></div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>