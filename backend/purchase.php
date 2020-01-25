<?php

include_once 'config.php';
include_once 'vehicle.php';

class Cart extends Database {
    protected  $query;
    protected $result;
    protected $con;

    function __construct() {
        $this->con = parent::getConnection();
    }

    function doPurchase($list) {
        $account = $list['accountID'];
        $checkedV = $list['check_list'];

        foreach($checkedV as $item) {
            $sql = "insert into purchases (vid,cid) VALUES ('$item', '$account')";
            $this->con->query($sql);

            $sql= "SELECT sum(vehicle.price) as total from vehicle INNER JOIN purchases inner join customer where vehicle.id=purchases.vid and purchases.cid = customer.id";
            $result = $this->con->query($sql);
            $result = $result->fetch_assoc();
            return $result['total'];
            
        }

    }
}
$total = 0;
if(isset($_POST['purchaseNow'])) {
    $cart = new Cart();
    $total = $cart->doPurchase($_POST);
    header("location: ../success.php?total=$total");
}

?>