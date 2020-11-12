
<html>
<head><title>user login and signup </title>
<link rel="stylesheet" type="text/css"
href="style.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
href="slidebar.css">

</head>
<body  style="color:#fff";>
<span style="font-size:30px;cursor:pointer;color:#fff" onclick="openNav()">&#9776; Home</span>
<br><img src="logo.jpg" width="80px" height="70px">

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
    
    <a href="wdv.html">Home</a>
    <a href="about.php">About us</a>
    <a href="#">Services</a>
    <a href="#">Review</a>
    <a href="#">Contact</a>
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
<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'usersignup');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name ='$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<script>window.alert('Username Already Taken');</script>"; 	

}
else{
	$reg= " insert into usertable(name ,password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	
	echo "<script>window.alert('Signup Successful');</script>"; 
	
}







?>
