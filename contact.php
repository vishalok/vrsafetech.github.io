<html>
<head>
<title>
web design
</title>

<header>

<link href="wd.css" rel="stylesheet" type="text/css">

<div class="nav">
<img src="logo.jpg" class="logo" >

<ul class="menu">
<li class="j"><h2>VRSAFETECH</h2></li>
<a class="active" href="#">

<li><a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a> </li>

<li><a href="#">services</a></li>
<li><a href="about.php">About us</a></li>   
<li><a href="userlogin.php"> Login</a></li>
</ul>

</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;

  background-image: url("scr.jpg");
 height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 20px;

}

.ok{
	margin:auto;
}
</style>

<style>
.content {
  max-width: 500px;
float:right;
 padding:5px;
margin:auto;
 
}
.column {
  float: left;
  width: 33.33%;
  padding: 7px;

}

</style>


</head>
<body>
<div class="column">
<img  src="img_avatar2.png" alt="Paris" >
</div>



<div class="content">
  <h2 style="color:yellow;">Contact Form</h2>

<div class="container" >
  <form action="connect.php" method="post">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
 <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="m">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="f">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="o">
  <label for="other">Other</label>

   <br>

    </select>
<br>
    <label for="subject">Comment</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

</body>

</html>
<?php

$conn = new mysqli('localhost','root','','contact');
?>