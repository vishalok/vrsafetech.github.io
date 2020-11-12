<?php

session_start();



?>
<html>
<head>
<title>VRSAFETECH </title>


<link href="wd.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="vrsafetech.css">
<link rel="stylesheet" type="text/css" href="dropdown.css">
<link rel="stylesheet" type="text/css" href="slidebar.css">

<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/s.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.imageWithText{
width:auto;
height:3cm;
vertical-align:middle;
}
div.c {
  text-align: right;
  color: #fff;
} 
</style>

</head>
<body style="background-color: #ccccff";>
<div class="bg"><p style="color: #990033";>

<b>
<marquee>
<span class="blinking">
<small>Welcome to VRsafetech</small>
</span>
</marquee>
</b></p>


<div id="divleft">
<center>
<img  class="imageWithText" src="logo.jpg" />

</center></div>
<p1 style="color: ffff00";>
<div class="c"> <h1 >Welcome <?php echo $_SESSION['username']; ?> </h1> </div>
</p1>
<p2  style="color:  #ffff00";>
<div id="divcenter">
<h2>VRSAFETECH</h2><br>
</div>
</p2>
<!DOCTYPE html>
<html>
<title>VRSAFETECH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/ok.css" rel="stylesheet" type="text/css">
<body class="w3-content" style="max-width:1300px">
<link href="css/login.css" rel="stylesheet" type="text/css">


<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
	  <h1>VRSAFETECH</h1>
	<br>
	  	<img src="images/logo.png" alt="logo" class="responsive">
    </div>
    <div class="w3-padding-64">
      <a href="#login" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Login/Sign up</a>
      <a href="#work" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">My Work</a>
      <a href="#services" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">services</a>
      <a href="#contact" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Contact</a>
          <a href="logout.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">logout</a>
    
	</div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
       <h1>About Us</h1>
      <img src="images/img_avatar2.png" class="w3-margin w3-circle" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        <p>We utilized technology to bring results
to grow our clients businesses.</p><span id="dots">...</span><span id="more">
        <p>We help you in adding / editing / deleting any content / graphics.on your site.</p><p>Let’s Create Your Unique Website</p></span>
		<button onclick="myFunction()" id="myBtn1" class="buttons button7">Read more</button>
		
      </div>
    </div>
  </div>
</div>
<!--style button-->
<style>
.buttons {
  background-color: #ffffff; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button7:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<!-- Second Grid: Work & Resume -->
<div class="w3-row">
  <div class="w3-half w3-light-grey w3-center" style="min-height:800px" id="work">
    <div class="w3-padding-64">
    <h2>My Work</h2>
      <p>Some of my latest projects.</p>
    </div><br>
    <div class="w3-row">
      <div class="w3-half">
        <img src="images/p1.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="images/s.jpg" style="width:100%">
      </div>
    </div>
    <div class="w3-row w3-hide-small">
      <div class="w3-half">
        <img src="images/d.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="images/t1.jpg" style="width:100%">
      </div>
    </div>

    <div class="w3-row w3-hide-small">
      <div class="w3-half">
        <img src="images/images.png" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="images/y.jpg" style="width:100%">
      </div>
    </div><br>
    <p>Just call me awesome.</p>
  </div>
  <div class="w3-half w3-indigo w3-container" style="min-height:800px" id="services">
    <div class="w3-padding-64 w3-center">
      <h2>Services</h2>
      <br>
    <p>Get Your Beautiful Website Designed By Us At Very Reasonable Price.</p>
      <div class="w3-container w3-responsive"><br>
        <button class="button9">Web Design</button><hr>
<button class="button9">Adding new features</button><hr>
<button class="button9">logo Design</button><hr>
<button class="button9">App Development</button><hr>
<button class="button9">Maintenance</button><hr>
<button class="button9" style="background-color:yellow ;" >contact us</button>
      </div>
    </div>
  </div>
</div>

<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" >
  <div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px" id="login">
    <div class="w3-padding-64">
	<form class="modal-content" action="/login.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p><p>if created then login.</p>
      <hr>
      <label for="email"><br>Email</br></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pass"><br>Password</br></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <label for="pass-repeat"><br>Repeat Password</br></label>
      <input type="password" placeholder="Repeat Password" name="pass-repeat" required>
      
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form><hr>
  <h2>Login Form</h2>
<form action="/login.php" method="post">
  
  <div class="container">
    <label for="user"><br>Username</br></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="pass"><br>Password</br></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        <br>
    <button type="submit" value="login">Login</button>
     <span class="">Forgot <a href="#">password?</a></span>
  </div>

  
    
   
  
</form>


    </div>
    
  </div>
  <div class="w3-half w3-teal w3-container" style="height:700px" id="contact">
    <div class="w3-padding-64 w3-padding-large">
      <h1>Contact</h1>
      <p class="w3-opacity">GET IN TOUCH</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="/contact.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right">Send</button>
      </form><br><br><br><br><br><br>
	  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
  </div>
</div>
<!--scripts-->

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<style>
.button9 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: black;
  background-color: #FFF;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button9:hover {background-color: #3e8e41}

.button9:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Powered by <a href="https://www.vrsafetech.com/" target="_blank">VRSAFETECH</a></p>
  <P>CREATED BY VISHAL RATHOD <a href="admin.html" style="align:right"> <button type="submit" class="w3-button w3-teal w3-right">Admin Login</button></a></P>
</footer>

</body>
</html>


</div>
</body>
</html>


