<?php
include ("header.php");
?>
<style>

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
  background-color: #474e5d;
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
  width: 25%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 50%;
    display: block;
  }
}
</style>



<div class="about-section">
  <h1 style="font-family: 'Cinzel Decorative';font-size: 20px;">About Us </h1>
  
  <p style="text-align:center; font-family: 'Alata';font-size: 15px;">Suvarna Yadav is a bridal makeup artist from Satara.</p>
  <p style="text-align:center; font-family: 'Alata';font-size: 15px;">The bridal makeup packages she offers for Satara based and destination weddings. 
  <br>To create a customised bridal package, you can call us directly.<br>We aim for perfection in the service we provide.</p>
  
  <h3 style="font-family: 'Cinzel Decorative';font-size: 20px;">OUR PROMISE</h3>
			<h4 style="text-align:center; font-family: 'Alata';font-size: 15px;">Superior service, personalized attention</h4>
			<p style="text-align:center; font-family: 'Alata';font-size: 15px;"> We're proud to offer the highest quality, most unique merchandise on the market today.<br> From our family to yours,
		 we put lots of love and careful attention in each item. <br>We hope you enjoy our work as much as we enjoy bringing it to you.
		 </p>
</div>


<h2 style="text-align:center; font-family: 'Alata';font-size: 28px;font-weight:bold;">Our Team</h2>
<div class="row" >
  <div class="column">
    <div class="card" style="align:center; font-family: 'Alata';font-size: 15px;">
      <center><img src="images/admin.jpg" alt="Jane" style="width:50%;align:center;"></center>
      <div class="container">
        <h2 >Suvarna Yadav</h2>
        <p class="title">Founder</p>
        
        <p>suvarnamakeupartist@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<!--
  <div class="column">
    <div class="card">
      <img src="images/img1.jpg" alt="Mike" style="width:100%">
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
      <img src="images/img1.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>-->
</div>


