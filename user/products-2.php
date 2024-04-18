
<?php
include("header.php");
$fl="products";
if(isset($_GET['name2']))
$fl=$_GET['name1'];
?>


<div class="row" >

<?php
include("conection.php");
$rs=mysqli_query($cn,"select * from products ");
$i=0;
while ($a=mysqli_fetch_array($rs)) 
{
$im=$a["image"];
$fl=$a["name"];
$d=$a["details"];
$pr=$a["price"];

echo"<div class='col-md-3' style='margin-top: 20px;'>";
echo"<div class='card' style='width: 18rem;'>";
echo"<img src=\"../images/$im\"class='card-img-top'>";
echo"<div class='card-body'>";
echo"<h5 class='card-title' style='color:blue;'>$fl</h5>";
echo"<p class='card-text'>Details:- $d</p>";
echo"<h6 class='card-text'>Rs:- $pr</h6><a class='btn btn-outline-primary'href='#'>Buy Now</a></div></div></div>";

$i++;
if($i==4)
 { 
  echo "</div>";
  echo"<div class=\"row\">";
  $i=0;
 }
}

?>

</div>





<?php
include("footer.php");
?>
</body>
</html>
?>




