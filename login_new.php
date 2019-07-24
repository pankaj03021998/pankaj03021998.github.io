<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN NEW</title>
        <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login.css">
            <style>
                
            </style>
    </head>
            <body>
                <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black">
        <div class="container">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><font color="blue" id="logo"><strong>BIJENDRA</strong></font></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" style="color: red">
                        <li><a href="login_new.php" style="font-family:fantasy"><font color="white"id="navcol"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN</b></font></a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
                <div class="loginbox">
                    <img src="user1.JPG" class="user">
                    <h1>LOGIN HERE</h1>
                    <form action="main.php" onsubmit="return validation()" method="post">
                        <div class="form-group">
                            <label for="Username">Username</label>
                        <input type="text" id="email" placeholder="Enter username" class="form-control" value="" required name="user">
                            <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter password" value="" required name="password">
                        </div>
                        <input type="submit" name="" placeholder="LOGIN" value="login">
                        <a href="#">Forget password ? </a><br>
                        <a href="signup.php">Don't have account ?<b> Register</b></a>
                    </form>
                </div>
                <!--java script-->
        <script>
            function validation()
            {
                var p=document.getElementById("password").value;
                var e=document.getElementById("email").value;

                if(p.length<5 || p.length>20)
                    {
                        alert("**password must be between 5 to 20 characters");
                        return false;
                    }
                
               if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
                 return false;
                
            }
        </script>
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
                <br>
                <br>
                <br>
                <br>
                <br>
                 <footer style="background-color: black">
            <div class="container">
                <div class="row">
                 <div class="col-md-3 col-xs-4">
                    <b>COURSES</b>
                    
                       <br> iit-jee prepartion
                
                        <br>gate prepartion
                    
                        <br>campus prepartion
                        <br>more
    
                </div>
                <div class="col-md-3 col-xs-4">
                    <b>COMPANY</b>
                    <br>career capsule
                    <br>college talash
                    <br>future talash
                    <br>

                </div>
                <div class="col-md-3 col-xs-4">
                    <b>MORE</b>
                    <br>about
                    <br>support
                    <br>invite us
                    <br>career counselling
                    <br>contact us

                </div>
               
        </div>
    </div><hr/>
                <div class="container">
                <center>
                    Copyright © Career capsule 2019. All Rights
Reserved | contact Us:+91 90000 00000
                </center>
            </div>
        </footer>
         <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </body>
</html>