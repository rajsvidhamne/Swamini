<?php
session_start();
if(!isset($_SESSION["email"]))
	echo "<script>window.location='../index.php'</script>";
	
	$u=$_SESSION["email"];
	$n=$_SESSION["name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Swamini Makeup Artist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
</head>
<body>

<style>

  

    .div-1 {
		height: 35px;
        
        
        background-color: #eee;
    }
	
</style>

<div class= "container-fluid div-1  " >
	
      <h5 align="right" style="color:black; font-family: 'Akaya Kanadaka';">
	 Follow Us |
	  <a href="https://www.facebook.com/suvarna.yadav.165/" style="color:black; font-family: 'Akaya Kanadaka';">Facebook</a>&nbsp
	  <a href="https://www.instagram.com/suvarna_yadav_makeup_artist/" style="color:black; font-family: 'Akaya Kanadaka';">Instagram</a>
	  <a href="https://www.youtube.com/channel/UClhgCAGbhllCJ5aMjognlcg" style="color:black; font-family: 'Akaya Kanadaka';">YouTube</a>
	  <span class="glyphicon glyphicon-earphone ;color:black;"></span> +91 7775906423  
	  </h5>
</div>
<nav class="navbar navbar-inverse " style="background-color: black;  font-family: 'Alata';font-size: 19px; " >
  <div class="container-fluid ">
    <div class="navbar-header " >
    
      <p style="font-family: 'Cinzel Decorative';font-size: 40px; color:#fff"  &nbsp> &nbsp Swamini
      <span style="font-family: 'Cinzel Decorative';font-size: 20px;color:#fff">Makeup Artist || Hello <?php echo $n ?> </span>
      </p >
	  

    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php" >Home</a></li>
	   <li><a href="about.php" >About</a></li>
	
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="services.php?type=Bridal">Bridal Makeup</a></li>
          <li><a href="services.php?type=Party">Party Look</a></li>
          <li><a href="services.php?type=Maharashtrian">Maharashtrian Bride</a></li>
		  <li><a href="services.php?type=Photoshoot">Photoshoot Look</a></li>
		  <li><a href="services.php?type=Engagement">Engagement Look</a></li>
        </ul>
      </li>
      <li><a href="cources.php" >Course Admission</a></li>
	  <li><a href="booking.php" >Book Appointment</a></li>
	   <li><a href="upprofile.php" >Profile</a></li>
	  <li><a href="feedback.php" >Feedback</a></li>
	  <li><a href="logout.php" >Logout</a></li>
		
	  
 </div>
</nav>
