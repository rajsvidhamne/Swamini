
<!--Delete Registration-->
<?php
$em=$_GET['email'];
include("../connection.php");
$q="delete from signup where email='$em'";
mysqli_query($cn,$q);
mysqli_close($cn);
echo "<script>alert('Record deleted'); window.location='mngregister.php';</script>";


?>

