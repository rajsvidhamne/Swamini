<?php
include("header.php");
$ty="bridal";
if(isset($_GET["type"]))
$ty=$_GET["type"];
?>


<style>
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
  background-color: #545861;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
  background-color: #DB8F02;
}
</style>
<div class="row">


<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from service where type='$ty'");
$i=0;
while($a=mysqli_fetch_array($rs))
{
$sid=$a["picid"];
$im=$a["image"];
$ty=$a["type"];
$nm=$a["picname"];
$pr=$a["rates"];
$des=$a["description"];
echo "<div class='col-md-3'>";
echo "<div class=\"card\">";
echo "<div class=\"thumbnail\">";

echo"<img src=\"../images/$im\"class='card-img-top'>";
echo "<h4>$nm</h4>";
echo "<h5><b>Price:</b>$pr</h5> ";
echo "<h5><b>Details:</b>$des</h5>";

echo"<a href=\"booking.php?bookid=$sid\"><button class=\"btn btn-info\"><i>Book Now</i></button></a>";
echo "</div></div></div>";//card div
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
