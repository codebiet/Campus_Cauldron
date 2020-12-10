<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>About Campus Cauldron</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
<!-- FONT AWESOME LINKS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>
<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url('images/about_bg.jpeg');
  background-size: cover;
  background-repeat: no repeat;
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
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;



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
.name{
  padding-top:10px;
  font-family: 'Montserrat', sans-serif;
}
.desc{
  font-family: 'Ubuntu', sans-serif;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php include 'include/navbar.php' ?>

<div class="about-section">
  <h1 id="intro-head">About Us</h1>
  <p id="intro-text">Our mission is to share precise amount of information that would be benificial to many students throughout their Campus life!!
  <br> We want to connect the students who have knowledge to those who need it.</p>
  <p id="intro-text">Campus Cauldron's motto is to bring together bencolites at a same platform so as to ask, answer and get information.
  <br> Their regular visit on our website will be most valued.</p>
</div>

<h2 style="text-align:center; margin-top:5rem;" class="map-head" >Our Team</h2>
<div class="row">
  <div class="col-lg-3">
    <div class="card">
  <img src="images/image.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 class='name'><b>Kshitij Sharma</b></h4>
    <p class='desc'>Student at B.I.E.T</p>
  </div>
</div>
  </div>
  <div class="col-lg-3">
    <div class="card">
  <img src="images/image.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 class='name'><b>Mahima Rai</b></h4>
    <p class='desc'>Student at B.I.E.T</p>
  </div>
</div>
  </div>
  <div class="col-lg-3">
    <div class="card">
  <img src="images/image.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 class='name'><b>Ashutosh Dwivedi</b></h4>
    <p class='desc'>Student at B.I.E.T</p>
  </div>
</div>
  </div>
  <div class="col-lg-3">
    <div class="card">
  <img src="images/image.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 class='name'><b>Rati Gupta</b></h4>
    <p class='desc'>Student at B.I.E.T</p>
  </div>
</div>
  </div>

</div>
<?php include 'include/scripts.php' ?>

</body>
</html>
