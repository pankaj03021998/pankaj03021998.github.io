<!DOCTYPE HTML>
<html>
  <head>
    <title>signup</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="signup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="navbar-brand" href="index.php"><font id="logo" color="blue"><strong>BIJENDRA</strong></font></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" style="color: red">
                        <li><a href="login_new.php" style="font-family:fantasy"><font color="white" id="navcol"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN</b></font></a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <div id="banner_image">
            <div class="container">
                <!--div class="col-lg-4" id="shift"-->
                <div id="position">
                    <h2>Join Us</h2><br>
                    <h4><a href="login_new.php"><font color="red"><b>Already registered ?</b></font></a></h4>
              <form action="signup_done.php" onsubmit="return validate()" method="post">
                  <div class="form-group">
                      <label for="firstname"></label>
                      <input type="text" class="form-control" name="name" placeholder="Name" required>
          <label for="email"></label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                      <span id="email_messages" style="color: red"></span>

          <label for="password"></label>
          <input type="password" id="password1" class="form-control" placeholder="Password" value="" required name="password">
                      <span id="messages" style="color: red"></span>
                      <label for="Re-type password"></label>
          <input type="password" id="password2" class="form-control" placeholder="confirm-Password" value="" required name="password2">
                      <span id="messagess"></span>
          <label for="college"></label>
          <input type="text" name="college" class="form-control" placeholder="institute/college" required list="datalist2">
                      <datalist id="datalist2">
                <option value="Indian institute of technology Bombay">
                <option value="Indian institute of technology Delhi">
                <option value="Indian institute of technology Roorkee">
                <option value="Indian institute of technology Madras">
                <option value="Indian institute of technology Kanpur">
                <option value="Indian institute of technology Kharagpur">
                <option value="Indian institute of technology Chennai">
                <option value="Indian institute of technology Mandi">
                <option value="Indian institute of technology Bhubhneshwar">
                <option value="Indian institute of technology Guwahati">
                <option value="Indian institute of technology Bhopal">
                <option value="National institue of technology Rourkela">
                <option value="National institue of technology Patna">
                <option value="National institue of technology Durgapur">
                <option value="National institue of technology Jamshedpur">
                <option value="National institue of technology Calicut">
                <option value="National institue of technology Warangal">
                <option value="National institue of technology Surthkal">
                <option value="National institue of technology Kurkshetra">
                <option value="National institue of technology Silcher">
                <option value="National institue of technology Ahemdabad">
                <option value="National institue of technology Nagpur">
                <option value="National institue of technology Jaipur">
                <option value="National institue of technology Surat">    
            </datalist>
          <label for="Branch"></label>
          <input type="text" name="Branch" class="form-control" placeholder="Branch" required list="datalist1">
                      <datalist id="datalist1">
             <option value="Computer science engineering">
              <option value="Electronics Communication engineering">
              <option value="Electronics instrumentation engineering">
             <option value="Mechanical engineering">
            <option value="Civil engineering">
             <option value="Electrical engineering">
             <option value="Chemical engineering">
             <option value="Biomedical engineering">
              <option value="Electrical electronics engineering">
                <option value="Aerospace engineeering">
                      </datalist>
          <label for="contact"></label>
          <input type="number" name="phone" id="mobile" class="form-control" placeholder="Contact no:" required minlength="10">
                      <span id="messages_mobile" style="color: red"></span>
                      <br>
                  </div>
                      <input type="submit" value="REGISTER" class="btn btn-primary">
                    </form>
                    
              
      </div>
      </div>
        </div>
        <!--/div-->
        <!--div-->
       
        <footer id="boder" style="background-color: black">
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
         <script>
            function validate()
            {
                var a=document.getElementById("password1").value;
                var b=document.getElementById("password2").value;
                var c=document.getElementById("mobile").value;
                var d=document.getElementById("email").value;
                
                if(a=="")
                    {
                        alert("**please fill password");
                        return false;
                    }
                if(a.length<5)
                    {
                        alert("**password must be between 5 to 20");
                        return false;
                    }
                if(a.length>20)
                    {
                       alert("**please enter password less than 20 char"); 
                        return false;
                    }
                if(a!=b)
                    {
                        alert("**password does not match");
                        return false;
                    }
                if(c.length!==10)
                    {
                        alert("**please enter valid number");
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