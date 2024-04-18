<?php
include ("header.php");
?>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/img9.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div class="bg">
<div class="col-sm-6 col-lg-6">
		<h2 align=left style="text-align:center; font-family: 'Alata';font-size: 20px;font-weight:bold;">Enrolled Courses</h2><hr>
		<?php
		include("connection.php");
		$rs=mysqli_query($cn,"select * from admission where email='$u'");
		while($a=mysqli_fetch_array($rs))
		{
		$cnm=$a["courcename"];
		$jd=$a["joindate"];
		$st=$a["status"];
		echo "<div class=\"row\"><div class='col-md-6'>";
		echo "<div class=\"thumbnail\">";
		echo "<div class=\"caption\">";
		echo"<b>Your Cources :$cnm<br>Date Of Join:$jd</b><br>Status: $st</div></div></div></div>";
		}
		?>
</div>
<div class="col-sm-6 col-lg-6">
		<h2 align=left style="text-align:center; font-family: 'Alata';font-size: 20px;font-weight:bold;">Appointments</h2><hr>
		<?php
		include("connection.php");
		$rs=mysqli_query($cn,"select * from booking where email='$u'");
		while($a=mysqli_fetch_array($rs))
		{
			$bid=$a['bookid'];
			
		
		$bd=$a["bdate"];
		$t=$a["timeslot"];
		$st=$a["status"];
		echo "<div class=\"row\"><div class='col-md-6'>";
		echo "<div class=\"thumbnail\">";
		echo "<div class=\"caption\">";
		echo"<b>Your Booking ID :$bid<br>Date Of appointment:$bd<br>Time :$t</b><br>Status : $st</div></div></div></div>";
		}
		?>
</div>
</div><!--row div->


