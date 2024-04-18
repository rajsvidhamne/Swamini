
<!--Delete Cource-->
<?php
$cid=$_GET['courceid'];
include("../connection.php");
$q="delete from cource where courceid='$cid'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Record deleted'); window.location='mngcource.php';</script>";


?>

