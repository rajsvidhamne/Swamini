<?php
$aid=$_GET["addid"];
include("connection.php");
$q="update admission set status='Approved' where addid=$aid";
mysqli_query($cn,$q);
echo "<script>window.location='index.php'</script>";
?>
<?php


?>