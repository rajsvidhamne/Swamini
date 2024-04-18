
<!--Delete service-->
<?php
$pid=$_GET['picid'];
include("../connection.php");
$q="delete from service where picid='$pid'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Record deleted'); window.location='mngservice.php';</script>";


?>

