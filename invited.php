<!DOCTYPE HTML>
<html>
  <head>
    <title>invited</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="support.css">
       <style type="text/css">
           
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
                    <a class="navbar-brand" href="main.php"><font color="blue" id="logo"><strong>BIJENDRA</strong></font></a>
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
                        <li><a href="index.php" style="font-family:fantasy"><font color="white"id="navcol"><b>LOGOUT </b><span class="glyphicon glyphicon-log-out"></span></font></a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <br>
        <br>
<?php
$con=mysqli_connect("localhost","root","","bijendra") or 
die(mysqli_error($con));
session_start();
$name = mysqli_real_escape_string($con,$_POST['username']);
$title = mysqli_real_escape_string($con,$_POST['title']);
$company = mysqli_real_escape_string($con,$_POST['company']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$comment = mysqli_real_escape_string($con,$_POST['comment']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$time = mysqli_real_escape_string($con,$_POST['time']);
$topic = mysqli_real_escape_string($con,$_POST['topic']);
$location = mysqli_real_escape_string($con,$_POST['location']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$pincode = mysqli_real_escape_string($con,$_POST['pincode']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$user_registration_query="insert into inviteus(name,title,companyname,email,phone,comment,date,time,topic,address,city,pincode,message) values('$name','$title','$company','$email','$phone','$comment','$date','$time','$topic','$location','$city','$pincode','$message')";
$user_registration_submit = mysqli_query($con,$user_registration_query) or
die(mysqli_error($con));
echo "user successfully inserted ";
?>
<div class="container">
            <div class="jumbotron" style="background-color: darkslateblue">
                <center><h2 style="color: white">Thank you for inviting us </h2></center>
            </div>
            <br>
            <br>
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