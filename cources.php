<?php
include ("header.php");
?>

<style>
.main {
	background-image: url("images/banner5.jpeg");
	color :#000;
}
body {
		color: #fff;
		  background-image: url("images/banner6.jpeg");
		  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
		
	}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #545861;<!--b45f06-->
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
  background-color:#DB8F02;
}
</style>
<div class="row">


<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from cource ");
$i=0;
while($a=mysqli_fetch_array($rs))
{
$cid=$a["courceid"];
$cm=$a["courcename"];
$pr=$a["rates"];
$du=$a["duration"];
$ds=$a["des"];
echo "<div class='col-md-4'>";
echo "<div class=\"card main\">";
echo "<h1 class=\"main\">$cm</h1>";
echo "<p class=\"Duration:\">Duration: $du</p>
 <p>For further details sign-up</p>
 <p>Already sign-up then login and register a course if not then sign-up firstly.</p>
  
  <a href=\"signup.php\"><button class=\"btn btn-info\">Enroll Now</button></a>
  ";


echo "</div></div>";//card div
$i++;
if($i==3)
{

echo "</div>";
echo "<div class=\"row\">";
$i=0;
}


}

?>
</div>
