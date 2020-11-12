<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$subject= $_POST['subject'];


$conn = new mysqli('localhost','root','','contact');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into form(firstname,lastname,email,gender,subject)
	values(?,?,?,?,?)");
$stmt->bind_param("sssss",$firstname,$lastname,$email,$gender,$subject);
$stmt->execute();
echo "<script>window.alert('submitted successfully...')</script>";

$stmt->close();
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
	
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
.bg {
  /* The image used */
  background-image: url("scr.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body class="bg">

<h2 style="color:cyon">Contact form submitted</h2>

<center>
<div class="container">
  
 <li> <button ><a href="index.html" class="btn">Back to Home Page</a></button></li>
</div>
 
</center>
</body>
</html>
