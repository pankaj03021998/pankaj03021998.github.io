<!DOCTYPE HTML>
<html>
  <head>
    <title>login</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <style>
        body{
          background-color: white;
        }
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
                        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="col-md-6">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <center><h3><b>Login</b></h3></center>
                    </div>
                    <div class="panel-body"> 
                        <center><h3><font style="font-style:cursive">login to make a purchase</font></h3> </center>
                        <form action="products_login.php" method="post">
      <div class="form-group">
          <label for="email">Email:</label>
<span><input type="email" name="email" class="form-control" placeholder="Email" required value="" autosave="off" autocomplete="off"></span>
<br>
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Password" value="" required autosave="off" autocomplete="off">
          <br>
          </div>
                        <center><input type="submit" value="submit" class="btn btn-primary"></center>  
                        </form>
                        <br>
                        <br>
                        <center><a href="registration.php"><button class="btn btn-primary">Don't have an account? Register</button></a></center> 
                    </div>
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