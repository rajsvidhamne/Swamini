<?php
include ("header.php");
?>

<style>
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
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.main {
	background-image: url("images/banner5.jpeg");
	color :#000;
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

<div class="row" >


<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from cource ");
$i=0;
while($a=mysqli_fetch_array($rs))
{
$cid=$a["courceid"];
$cm=$a["courcename"];
$ds=$a["des"];
$pr=$a["rates"];
$du=$a["duration"];
echo "<div class='col-md-4'>";
echo "<div class=\"card main\">";
//echo "<div class=\"card\">";
echo "<h1>$cm </h1>";

 echo "<p class=\"Fee:\"><b> Fees:</b> $pr</p><p class=\"Duration:\"><b>Duration:</b> $du</p>
 <p><b>Details:</b>$ds</p>
  <a href=\"admission.php?courceid=$cid\"><button class=\"btn btn-info\">Enroll Now</button></a>";


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
