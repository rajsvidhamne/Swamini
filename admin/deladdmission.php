
<!--Delete Cource-->
<?php
$cid=$_GET['addid'];
include("../connection.php");
$q="delete from admission where addid='$aid'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Record deleted'); window.location='mngaddmission.php';</script>";


?>

