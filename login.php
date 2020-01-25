<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>login page</title>
  <style type="text/css">
    .bg
    {
      background: url('images/41.png') no-repeat; background-size: cover; background-position: center;  height: 100vh; 
    }
    #log
    {
      padding: 40px 30px;
      margin-top: 70px;
      -webkit-box-shadow: 7px 7px 18px 0px rgba(255,255,255,1);
      -moz-box-shadow: 7px 7px 18px 0px rgba(255,255,255,1);
      box-shadow: 7px 7px 18px 0px rgba(255,255,255,1);
    }
    .img
    {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      position: absolute;
      top: 10px;
      left: calc(50% - 50px);
    }

    h5
    {
      color: white;
      text-align: center;
      font-weight: bold;
    }
    label
    {
      color: white;
      font-size: 18px;
    }
    .lin
    {
      color: #ffff;
      float: left;
      font-size: 13px; 
    }
    .si
    {
      color: #ffff;
      text-align: center;
      font-size: 13px;
    }
    .sk
    {
      color: #ffff;
      float: right;
      font-size: 13px;
    }
  </style>
</head>

<body>
    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form id="log" method="POST" action="backend/account.php">
              <img class="img" src="images/21.jpg">
              <h5>ACCOUNT LOGIN</h5>
              <hr>
                <?php if(isset($_GET['error'])) {?>
                    <h5 style="color:red;"> Your username or password is incorrect!</h5>
                <?php }?>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="username" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <a href="index.php" class="sk"><p>Skip</p></a> 
                <button type="submit" name="login" class="btn btn-success btn-block btn-sm">Login<span class="spinner-grow spinner-grow-sm"></span></button>
              <a href="signup.html" class="si"><p>Don't have an account? Signup</p></a>
              
            </form>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
      </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>