
<!--Delete Cource-->
<?php
$cid=$_GET['bookid'];
include("../connection.php");
$q="delete from booking where bookid='$bid'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Record deleted'); window.location='mngappo.php';</script>";


?>

