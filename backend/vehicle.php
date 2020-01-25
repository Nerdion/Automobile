<?php

include_once 'config.php';
include_once 'fileUpload.php';

class Vehicle extends Database {
    protected  $query;
    protected $result;
    protected $con;

    function __construct() {
        $this->con = parent::getConnection();
    }

    function addNewVehicle($brandName, $model, $noOfWheels, $price, $mileage) {
        $sql = "insert into vehicle (brand, model, wheels, price, mileage) VALUES ('$brandName', '$model', '$noOfWheels', '$price', '$mileage')";
        //$this->con->query($sql);

        if ($this->con->query($sql) === TRUE) {
            header("location: ../admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $this->con->error;
        }
    }

    function getVehicleData() {
        $dataArray = array();

        $sql = "select * from vehicle";
        $result = $this->con->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $dataArray[] = $row;
            }
        }

        return $dataArray;
    }

    function vehicleInfoByID($id) {
        $sql = "select * from vehicle where id='$id'";
        $result = $this->con->query($sql);

        if($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            echo "error";
        }
    }
}

$vehicle = new Vehicle(); 

if(isset($_POST['addNewVehicle'])) {
    $vehicle->addNewVehicle($_POST['brand'],$_POST['modelNo'], $_POST['noOfWheels'], $_POST['price'], $_POST['mileage']);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



}