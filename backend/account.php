<?php

include_once 'config.php';

class Account extends Database {
    protected  $query;
    protected $result;
    protected $con;

    function __construct() {
        $this->con = parent::getConnection();
    }

    function checkLogin($username, $password) {
        session_start();
        $sql = "select * from customer where name='$username' and password='$password'";
        $result = $this->con->query($sql);

        if($result->num_rows == 1) {
            $_SESSION['customer'] = $username;
            return 1;
        } else {
            $sql = "select * from admin where username='$username' and password='$password'";
            $result = $this->con->query($sql);

            if($result->num_rows == 1) {
                $_SESSION['admin'] = $username;
                return 2;
            } else {
                return 0;
            }

        }
    }

    function customerSignup($username, $ph, $address, $email, $password) {
        $sql = "insert into customer (name, password, mail, ph, address) VALUES ('$username', '$password', '$email', '$ph', '$address')";
        if ($this->con->query($sql) === TRUE) {
            header("location: ../login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $this->con->error;
        }    
    }

    function getIDByUsername($username) {
        $sql = "select id from customer where name='$username'";
        $result = $this->con->query($sql);
        $result = $result->fetch_assoc();
        return $result['id'];
    }
}


$result = FALSE;
$account  = new Account();

if(isset($_POST['login'])) {
    $result = $account->checkLogin($_POST['username'], $_POST['password']);
    session_start();
    if($result == 1) {
        header("location: ../index.php");
    } else if($result == 2) {
        header("location: ../admin.php");
    } else {
        header("location: ../login.php?error=1");
    }
}

if(isset($_POST['customerSignup'])) {
    $account->customerSignup($_POST['username'],$_POST['ph'],$_POST['address'],$_POST['email'],$_POST['pass']);
}

if($_GET['logout']) {
    session_start();
    session_destroy();
    header('location: ../login.php');
}

?>