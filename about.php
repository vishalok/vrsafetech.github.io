<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 60px;
}

.about-section {
  padding: 2px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
.about-section1 {
  padding: 100px;
  text-align: center;
  background-color: #e080f0;
  color: white;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>


</head>
<body bgcolor="e4e3e5">
<link href="wd.css" rel="stylesheet" type="text/css">
<div class="about-section">
<div class="nav">


<img src="logo.jpg" width="80px" height="80px">
<ul class="menu">
<li class="j"><h2>VRSAFETECH</h2></li>
<a class="active" href="#">

<li><a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a> </li>

<li><a href="#">services</a></li>
<li><a href="about.php">About us</a></li>   
<li><a href="userlogin.php"> Login</a></li>

</div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
</script>

	</div>
</div>

<h2 style="text-align:center">About Us</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="logo.jpg" alt="Vishal" style="width:100%;height:100%">
      <div class="container">
        <h2>Vishal Rathod</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>vrsafetech@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <!--div class="column">
    <div class="card">
      <img src="logo.jpg" alt="demo" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="logo.jpg" alt="demo" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div-->
 

</body>
</html>
