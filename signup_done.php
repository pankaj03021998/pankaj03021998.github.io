<!DOCTYPE HTML>
<html>
  <head>
    <title>success</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="signup_done.css">
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
                    <a class="navbar-brand" href="main.php"><font color="blue"id ="logo"><strong>BIJENDRA</strong></font></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right" style="color: red">
                        <li><a href="Company.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>COMPANY</b></font></a></li>
                        <li><a href="Education.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>EDUCATION</b></font></a></li>
                        <li><a href="Awards.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>AWARDS</b></font></a></li>
                        <li><a href="Experience.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>EXPERIENCE</b></font></a></li>
                        <li><a href="projects.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>PROJECTS</b></font></a></li>
                        <li><a href="Support.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>SUPPORT</b></font></a></li>
                        <li><a href="About.php" style="font-family:fantasy"><font color="white"id="navcol"> <b>ABOUT</b></font></a></li>
                        <li><a href="index.php" style="font-family:fantasy"><font color="white"id="navcol"><span class="glyphicon glyphicon-log-out"></span><b>LOGOUT</b></font></a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <br>
        <div class="container">
<?php
$con=mysqli_connect("localhost","root","","bijendra") or die(mysqli_error($con));
session_start();
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$college = mysqli_real_escape_string($con,$_POST['college']);
$Branch = mysqli_real_escape_string($con,$_POST['Branch']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$user_registration_query="insert into signup(name,email,password,college,branch,mobile) values('$name','$email','$password','$college','$Branch','$phone')";
$user_registration_submit = mysqli_query($con,$user_registration_query) or
die(mysqli_error($con));
echo "user successfully inserted ";
?>
            <br>
            <div class="jumbotron text-center">
                <h1><span class="glyphicon glyphicon-thumbs-up"></span> Thank you !</h1>
                <p>You have successfully registered .</p>
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
                <div class="col-md-3 col-xs-4">
                  

                </div>
            
                </div>
                
        </div>
        <hr/>
                <div class="container">
                <center>
                    Copyright © Career capsule 2019. All Rights
Reserved | contact Us:+91 90000 00000
      </center>
            </div>
        </footer>
    </body>
</html>