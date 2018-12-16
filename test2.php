<?php include('\login\server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Math by Kru-Som</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="page\css\dropdown.css">
  <link rel="stylesheet" type="text/css" href="page\js\carusel.js">
  <link rel="stylesheet" type="text/css" href="page\css\content-column.css">
  <link rel="stylesheet" type="text/css" href="page\css\container.css">
  <link rel="stylesheet" type="text/css" href="page\css\button-color.css">
  <link rel="stylesheet" type="text/css" href="page\css\login.css">
  <link rel="stylesheet" type="text/css" href="page\js\login.js">
</head>

<body>

<!--Button-->
  <div class="dropdown" style="float:left;">
    <div class="Hamburger"></div>
    <div class="Hamburger"></div>
    <div class="Hamburger"></div>
    <div class="dropdown-content" style="left:0;">
      <a href="index.html">Home</a>
      <a href="lesson.html">Lesson & Worlsheets</a>
      <a href="contact-us.html">Contact Us</a>
      <a href="help.html">Help</a>
    </div>
  </div>

  <div class="dropdown" style="float:right;">
    <i class="fa fa-angle-down"></i>
      <div class="dropdown-content">
        <span onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><a href="#">Register</a></span>
        <span onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#">Login</a></span>
      </div>
  </div>

<!--Login-->
	<div id="id01" class="modal">
  
  	  <form class="modal-content animate" action="/action_page.php">
    	  <div class="imgcontainer">
      		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    	  </div>

    		<div class="container">
            <h1>Login</h1>
            	<form method="post" action="test2.html">
      				<label for="e-mail"><b>E-mail</b></label>
      				<input type="text" placeholder="Enter E-mail" name="e-mail" required><br>

      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required><br><br><br>
        
      				<button type="submit">Login</button><br>
      				<label>
        				<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
      			</form>
    		</div>

    		<div class="container" style="background-color:#f1f1f1">
      			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      			<span class="psw"><a href="#">Forgot password?</a></span>
    		</div>
  		</form>
	</div>

<!--Register-->
  <div id="id03" class="modal">
  
      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <h1>Register</h1>

            <form method="post" action="test2.html">

              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>

            	<label for="email"><b>Email</b></label>
            	<input type="text" placeholder="Enter Email" name="email" required>

            	<label for="psw"><b>Password</b></label>
            	<input type="password" placeholder="Enter Password" name="psw" required>
              
              <label for="psw-repeat"><b>Confirm Password</b></label>
              <input type="password" placeholder="Comfirm Password" name="psw-confirm" required>

            	<br><br>
            	<button type="submit" class="signupbtn">Register</button>
            </form>
        </div>

        <div class="container" style="background-color:#f1f1f1" align="right">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
  </div><br><br>

<!--Carusel-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="page\images\test1.png" style="width: 100%">
      </div>
      
    </div>
  </div>

<!--Content-Column-->
  <div class="row">

    <div class="column" style="background-color:#005b87;" align="center">
      <h2>Lesson</h2><br><br>
      <div class="container">
          <a href="lesson.html"><button class="btn" style="max-width: 250px; font-family:Fjalla One">Learn Now</button></a>
      </div><br>
      <img src="page\images\lesson-icon.png">
    </div>

    <div class="column" style="background-color:#0079b0;" align="center">
      <h2>Worksheets</h2><br><br>
      <div class="container">
          <a href="lesson.html"><button class="btn" style="max-width: 250px; font-family: arvo">Go Now</button></a>
      </div><br><br>
      <img src="page\images\worksheets-icon.png">
    </div>

    <div class="column" style="background-color:#005b87;" align="center">
      <h2>Contact-Us</h2><br><br>
      <div class="container">
          <a href="contact-us.html"><button class="btn" style="max-width: 250px">Contact Now</button></a>
      </div><br><br>
      <img src="page\images\conver-icon.png">
    </div>

    </div>
    </div>
  </div>

<!--Footer-->
  <div class="footer" style="text-align: center; background-color: white; font-size: 11px">
    <br>
    <p><b>Powered by NANCHAPORN</b></p>
    <p>© 2018 Math by Kru-Som All rights reserved &nbsp;&nbsp;<a href="#">Term of Use</a></p>
  </div> 


</body>
</html>