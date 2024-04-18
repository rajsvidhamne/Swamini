<?php
include("header.php");
?>
<style>

.gal {
	
	
	-webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
	  
	
	}	
	.gal img{ width: 80%; padding: 7px 0;}
@media (max-width: 500px) {
		
		.gal {
	
	
	-webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;
	  
	
	}
		
	}
	
</style>
<div class="container-fluid">
<h2 align="center" style="font-family: 'Cinzel Decorative';font-size: 30px;">Classy Brides and Models </h2>
<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from gallery ");
?>
<div class="container">
<div class="col-md-12">
<div class="row">
<div class="gal">
<?php
while($a=mysqli_fetch_array($rs))
{
$im=$a['img'];

echo "<img src=\"admin/images/$im\" >";
}

?>
</div>
</div>
</div>
</div>
</div><!--Container-->



<!---
<div class="container">
<div class="col-md-12">
<div class="row">
<hr>
	<div class="gal">
	
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">	
    <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
    <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">	
    <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">		
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">	
	<img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">	
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
	<img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">
				
	</div>
	
</div>
</div>
</div>



-->