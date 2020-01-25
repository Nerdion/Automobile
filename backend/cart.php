<?php

include_once 'config.php';

class Cart extends Database {
    protected  $query;
    protected $result;
    protected $con;

    function __construct() {
        $this->con = parent::getConnection();
    }

    function insertToCart($vid, $cid) {
        $sql = "insert into cart (vid, cid) VALUES ('$vid','$cid')";
        $this->con->query($sql);
    }

    function getCartData() {
        $cartArray = [];
        $sql = "select vehicle.brand, vehicle.model, vehicle.id from vehicle inner join cart where vehicle.id = cart.vid";
        $result = $this->con->query($sql);
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
                $cartArray[] = $row;
            }
            return $cartArray;
        }
    }
}

$cart = new Cart();

if(isset($_GET['cid'])) {
    $cart->insertToCart($_GET['vid'],$_GET['cid']);
    header("location: ../index.php");
}