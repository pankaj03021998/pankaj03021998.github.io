<!DOCTYPE HTML>
<html>
  <head>
    <title>support</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
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
        <div class="container">
            <div class="jumbotron" style="background-color: darkslateblue">
                <center><h2 style="color: white">Invite Me to Speak at Your Event </h2></center>
            </div>
            <br>
            <br>
            <p id="intro">Need a speaker for your next business or special event? Please fill out the form below and we will be in contact with you. (Hourly and event booking rates provided upon request)</p>
        
    <form action="invited.php" onsubmit="return valitdate()" method="post">
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                  <u><b>Step 1:</b></u>
                    <h2>Your Conatact Information</h2>
                    <p id="intro"><b>Note:</b>Please provide your contact information first</p>
                    <br>
                    <br>
                    <label for="name">Your Name</label>
                    <input type="text" value="" id="name" placeholder="Required" class="form-control" required name="username">
                            <br>
                            <label for="title">Your title</label>
                            <input type="text" value="" id="title" class="form-control" name="title">
                            <br>
                            <label for="orgnization">Your Company or Organization</label>
                            <input type="text" value="" id="orgi" class="form-control" placeholder="Required" required name="company">
                            <br>
                            <label for="email">Your Email</label>
                            <input type="email" value="" placeholder="Required" class="form-control" required name="email">
                            <br>
                            <label for="phone">Your Phone</label>
                            <input type="number" placeholder="Required" class="form-control" required value="" name="phone" id="phone">
                            <br>
                            <label for="comment">Your Comment</label>
                            <textarea rows="8" cols="4" placeholder="optional" class="form-control" name="comment"></textarea>
                                </div>
                        <div class="col-md-6" style="border-left: 0.5px solid black">
                            <u><b>Step 2:</b></u>
                    <h2>Your Event Information</h2>
                    <p id="intro">Please provide the date of your event and the approximate starting time</p>
                    <label for="date">Date</label>
                    <input type="date" class="form-control" required value="" id="date" name="date">
                        <br>
                        <label for="time">Time</label>
                        <input type="time" class="form-control" required value="" id="time" name="time">
                        <br>
                        <br>
                        <P id="intro">Desired Speaking Topic</P>
                        <br>
                        <label for="topic">Please select the topic you would like your group to learn more about</label>
                        <input type="text" class="form-control" value="" list="datalist1" name="topic">
                        <datalist id="datalist1">
                            <option value="Facebook">
                                <option value="Twitter">
                                    <option value="Instagram">
                                        <option value="Social media">
                                            <option value="LinkedIn">
                                                <option value="WordPress">
                        </datalist>
                        <br>
                        <label for="location">Event Location Address</label>
                        <input type="text" class="form-control" value="" placeholder="Please enter the address of the event location" required name="location">
                        <br>
                        <label for="city">City</label>
                        <input type="text" class="form-control" value="" placeholder="" required name="city">
                        <br>
                        <label for="code">Zip code</label>
                        <input type="number" class="form-control" required value="" placeholder="pin code" name="pincode">
                        <br>
                        <label for="message">Special Message or Needs</label>
                        <input type="text" class="form-control" placeholder="Optional" value="" name="message">
                        <br>
                        <br>
                        <input type="submit" class="btn btn-Primary" value="Send" id="send">
                                </div>
                </div>
                                </div>
 </form>
            </div>
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
                </div>
              
            <hr/>
                <div class="container">
                <center>
                    Copyright © Career capsule 2019. All Rights
Reserved | contact Us:+91 90000 00000 
                </center>
            </div>
        </footer>
         <script>
            function validate ()
            {
                var c=document.getElementById("phone").value;
                if(c.length!==10)
                    {
                        alert("**please enter a valid phone number of 10 digit");
                        return false;
                    }
            }
        </script>
        <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>