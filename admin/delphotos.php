
<!--Delete photos-->
<?php
$id=$_GET['pid'];
include("../connection.php");
$q="delete from gallery where pid='$id'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Photo deleted'); window.location='mngphotos.php';</script>";


?>

