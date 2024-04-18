<?php
include ("header.php");
?>
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
<style>

body, html {
  height: 100%;
  margin: 0;
  
}

.bg {
  /* The image used */
  background-image: url("images/img8.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<div class="bg">

<style>
body {
    font-family: 'Alata';font-size: 18px;
  
}

.notification {
  background-color: #6ab2de;
  color: black;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: #a1cbe6;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: black;
  color: white;
}
</style>

<div class="col-sm-6 col-lg-6">
<div class="row container">
<h2>Notifications </h2><hr>
	<div class="col-sm-3 col-lg-3">
	
		<?php
				$da=date("Y-m-d");
				include ("connection.php");
				$q = "SELECT * from signup where sdate='$da'";
				if ($result = mysqli_query($cn, $q)) {
					// Return the number of rows in result set
					$rowcount = mysqli_num_rows( $result );
					
					}
					
		?>
			<a href="mngregister.php" class="notification">
			<span>Registration</span>
			<span class="badge"><?php echo $rowcount;?></span>
			</a>
	</div>
	<div class="col-sm-3 col-lg-3">
	
		<?php
				$da=date("Y-m-d");
				include ("connection.php");
				$q = "SELECT * from booking where bdate='$da'";
				if ($result = mysqli_query($cn, $q)) {
					// Return the number of rows in result set
					$rowcount = mysqli_num_rows( $result );
					}
		?>
			<a href="mngappo.php" class="notification">
			<span>Appointments</span>
			<span class="badge"><?php echo $rowcount;?></span>
			</a>
	</div>
	
</div>

<div class="row container">

<br>
	<div class="col-sm-3 col-lg-3">
	
		<?php
				include ("connection.php");
				$da=date("Y-m-d");
				$q = "SELECT * from admission where joindate ='$da'";
				if ($result = mysqli_query($cn, $q)) {
					// Return the number of rows in result set
					$rowcount = mysqli_num_rows( $result );
					}
		?>
			<a href="mngaddmission.php" class="notification">
			<span>Admissions</span>
			<span class="badge"><?php echo $rowcount;?></span>
			</a>
	</div>
	<div class="col-sm-3 col-lg-3">
	
		
	</div>
	
</div>
</div><!--col6-->
<!--Feedback div-->
<div class="col-sm-6 col-lg-6">
		<h2 align=center>Valuable Feedback</h2><hr>
		<?php
		include("connection.php");
		$rs=mysqli_query($cn,"select * from feedback");
		while($a=mysqli_fetch_array($rs))
		{
		$im=$a["email"];
		$fl=$a["msg"];
		echo "<div class=\"row\"><div class='col-md-6'>";
		echo "<div class=\"thumbnail\">";
		echo "<div class=\"caption\">";
		echo"<b>From :$im</b><br>Message:$fl</div></div></div></div>";
		}
		?>
</div>

</div>
</div>


