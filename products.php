<!DOCTYPE HTML>
<html>
  <head>
    <title>product_page</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <style>
          #banner_image{
              padding-top: 75px;
              padding-bottom: 50px;
              text-align: center;
              color: #f8f8f8;
              background-image: url(intro.jpg);
              background-size: cover;
          }
           #banner_content{
               position: relative;
               padding-top: 6%;
               padding-bottom: 6%;
               margin-top: 12%;
               margin-bottom: 12%;
               background-color: rgba(0,0,0,0.7);
               max-width: 660px;
           }
           footer{
               padding: 10px 0;
               background-color: #101010;
               color: #9d9d9d;
               bottom: 0;
               width: 100%;
           }
           #padding_left{
               padding-left: 400px;
           }
          #padding{
              padding-left: 350px;
              padding-top: 100px;
          }
           .jumbotron{
               padding-top: 20px;
               font-size: 2px;
               font-family: sans-serif;
           }
           img{
            transition: 1s;
           }
           #trans:hover{
            transform: scale(1.1); 
           }
      </style>
  </head>
    <body>
        
         <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                   <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
          <?php
$con= mysqli_connect("localhost","root","","ecommerce") or 
die(mysqli_error($con));
session_start();
$first_name = mysqli_real_escape_string($con,$_POST['firstname']);
$last_name= mysqli_real_escape_string($con,$_POST['lastname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$pincode=mysqli_real_escape_string($con,$_POST['pincode']);
$user_registration_query ="insert into user_registration(first_name,last_name,email,phone,password,address,pincode) values ('$first_name','$last_name','$email','$phone','$password','$address','$pincode')";
//die($user_registration_query);
$user_registration_submit = mysqli_query($con,$user_registration_query) or
    die(mysqli_error($con));
echo "user successfully inserted";

?>
            <div class="jumbotron">
                <center><h1><b>Welcome To Our Lifestyle Store !</b></h1>
                    <p>we have the best camera,shirts and watches for you ! no need hunt around,we all have in one place .</p></center>
            </div>
        </div>
            <div class="container">
      <div class="row text-center">
          <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="camera.jpg" alt="camera" id="trans">
                  <div class="caption">
                      <h4>Camera cannon 44pixxels</h4>
                      <p>Price Rs:44000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="camera.jpg" alt="camera" id="trans">
                  <div class="caption">
                      <h4>Camera cannon 44pixxels</h4>
                      <p>Price Rs:44000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="camera.jpg" alt="camera" id="trans">
                  <div class="caption">
                      <h4>Camera cannon 44pixxels</h4>
                      <p>Price Rs:44000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="camera.jpg" alt="camera" id="trans">
                  <div class="caption">
                      <h4>Camera cannon 44pixxels</h4>
                      <p>Price Rs:44000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="watch.jpg" alt="watch" id="trans">
                  <div class="caption">
                      <h4>Omega watch </h4>
                      <p>price Rs:130000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="watch.jpg" alt="watch" id="trans">
                  <div class="caption">
                      <h4>Omega watch </h4>
                      <p>price Rs:130000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="watch.jpg" alt="watch" id="trans">
                  <div class="caption">
                      <h4>Omega watch </h4>
                      <p>price Rs:130000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="watch.jpg" alt="watch" id="trans">
                  <div class="caption">
                      <h4>Omega watch </h4>
                      <p>price Rs:130000.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="shirt.jpg" alt="shirt" id="trans">
                  <div class="caption">
                      <h4>shirt H&W</h4>
                      <p>price Rs:800.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="shirt.jpg" alt="shirt" id="trans">
                  <div class="caption">
                      <h4>shirt H&W</h4>
                      <p>price Rs:800.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="shirt.jpg" alt="shirt" id="trans">
                  <div class="caption">
                      <h4>shirt H&W</h4>
                      <p>price Rs:800.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
           <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <img src="shirt.jpg" alt="shirt" id="trans">
                  <div class="caption">
                      <h4>shirt H&W</h4>
                      <p>price Rs:800.00</p>
                      <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
                  </div>
              </div>
          </div>
        </div>
        </div>
       <footer>
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights
Reserved | contact Us:+91 90000 00000</p>
                </center>
            </div>
        </footer>  
    </body>
</html>