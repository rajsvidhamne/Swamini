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

 
  
  
<style>
	.html{
		scroll-behavior: smooth;
	}
    .div-1 {
		cellpadding:20px;
		height: 35px;
        background-color: #fff;
		color:black;
    }
	
</style>	
<style>

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 500px;
  top: 1;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:#444;
}


</style>
</head>

<body>

<div class= "container-fluid div-1  " >
	
      <h5 align="right" style="color:black; font-family: 'Akaya Kanadaka';">
	 Follow Us |
	  <a href="https://www.facebook.com/suvarna.yadav.165/" style="color:black; font-family: 'Akaya Kanadaka';">facebook</a>&nbsp
	  <a href="https://www.instagram.com/suvarna_yadav_makeup_artist/" style="color:black; font-family: 'Akaya Kanadaka';">Instagram </a>
	  <a href="https://www.youtube.com/channel/UClhgCAGbhllCJ5aMjognlcg" style="color:black;font-family: 'Akaya Kanadaka';">YouTube </a>
	  <span class="glyphicon glyphicon-earphone ;color:black;"></span> +91 7775906423 
      <a href="signup.php" style="color:black;"><span class="glyphicon glyphicon-user;"></span>&nbsp Sign Up</a> 
	  <a href="login1.php" style="color:black;"><span class="glyphicon glyphicon-log-in ;"></span>&nbsp Login</a>
	  <a href="adminlogin.php" style="color:black;"><span class="glyphicon glyphicon-log-in ;"></span>&nbsp Admin</a>
	  
	 
	  </h5>
</div>


<nav class="navbar navbar-inverse navbar-dark " style="background-color: black;  ">

  <div class="container-fluid">
    <div class="navbar-header " >
    
      <p style="font-family: 'Cinzel Decorative';font-size: 40px; color:#fff"  &nbsp> &nbsp Swamini

		<span style="font-family: 'Cinzel Decorative';font-size: 20px;color:#fff">Makeup Artist</span></p >
	  

    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php" style="font-size: 20px;">Home</a></li>
	   <li><a href="about.php" style="font-size: 20px;">About</a></li>
	
      
	  <li><a href="services.php" style="font-size: 20px;">Services</a></li>
	  <li><a href="gallery.php" style="font-size: 20px;">Gallery</a></li>
      <li><a href="cources.php" style="font-size: 20px;">Courses</a></li>
	  <li><a href="contact.php" style="font-size: 20px;">Contact Us</a></li>
	  
		<div id="mySidepanel" class="sidepanel">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			  <a class="navbar-brand" href="#"style="font-family: 'Cinzel Decorative';font-size: 20px; color:#fff;"&nbsp> &nbsp Swamini
			  <span style="font-family: 'Cinzel Decorative';font-size: 15px;">Makeup Artist</span></a><br>
			<div >
				<form>
				 <span style=" color:#fff">
				<h4><span class="glyphicon glyphicon-globe ;color:#fff"></span> Our office</h4>
				<address>
					<strong></strong>Swamini Beauty Parlour<br>
					Near Ganesh mini bazar<br>
					Ahire Colony,MIDC Satara<br>
					
					<abbr title="Phone">
						P:</abbr>
					+91 7775906423
				</address>
				
				</span>
				</form>
            </div>

		</div>
		
		<li>
			<button class="openbtn" onclick="openNav()">☰</button>  
		</li>
		
	

</nav>

	<script>
		function openNav() {
		  document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidepanel").style.width = "0";
		}
		</script>
