<?php

$em=$_GET["email"];

include("../connection.php");
$q="select * from signup where email='$em'";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
    $em=$a["email"];
	$nm=$a['name'];
	$cont=$a['contactno'];
}
$bodymail="Hello $nm <br>Username:$em<br>Thank you for your interest in Swamini Makeup Artist and Acadamy!<br>";
echo "$bodymail";

?>