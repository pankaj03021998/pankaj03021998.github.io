﻿<!DOCTYPE HTML>
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
        
          #padding{
              padding-left: 350px;
              padding-top: 100px;
          }
           .jumbotron{
               padding-top: 20px;
               font-size: 2px;
               font-family: sans-serif;
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
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <br>
        <div class="container">
      <div class="row">
          <div class="col-md-4">
              <h3>Change password</h3>
            <form action="products.php" method="post">
              <div class="form-group">
          <label for="password"></label>
          <input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required>
          <label for="password"></label>
          <input type="password" name="Newpassword" class="form-control" placeholder="New Password" required>
    
          <label for="password"></label>
          <input type="password" name="Newpassword" class="form-control" placeholder="Confirm-Password" required>
      </div>    
              <input type="submit" value="submit" class="btn btn-primary form-group" placeholder="Change">
              </form>
      </div>
      </div>
      </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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