
<html>
<head><title>user login and signup </title>
<link rel="stylesheet" type="text/css"
href="css/style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
href="css/slidebar.css">

</head>
<body  style="color:#fff";>
<span style="font-size:30px;cursor:pointer;color:#fff" onclick="openNav()">&#9776; Home</span>
<br><img src="images/logo.jpg" width="80px" height="70px">

<div  class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
	<h2 >Login Here</h2>
<form  action="validation.php" method="post" align="top" top="200px">
<div class="form-group">
<label>Username</label>
<input type="text" style="color:#fff;" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" style="color:#fff;"  name="password" class="form-control" required>
<a href="forgetpass.php" style="color:#fff";>forgot password</a>
</div>
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>


<div align="left" class="col-md-6 login-right"> 


	<h2>Signup Here</h2>
<form action="signup.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" style="color:#fff;" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" style="color:#fff;" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"  > signup </button>

</form>
</div>

</div>

</div>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    
    <a href="index.html">Home</a>
    <a href="about.php">About us</a>
    <a href="#">Services</a>

    <a href="contact.php">Contact</a>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

  </div>
</div>
</body>
</html>