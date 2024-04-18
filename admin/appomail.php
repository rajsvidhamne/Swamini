<?php
$bid=$_GET["bookid"];
include("../connection.php");
$q="update booking set status='confirm' where bookid=$bid";
mysqli_query($cn,$q);
echo "<script>window.location='index.php'</script>";
?>