
<?php
include("header.php");
?>
<div style="background-color:white";>
<h2 style="text-align:center ; font-family: 'Alata';font-size: 28px;">Register Users Report </h2><br>
<div class="container">
<form method=post style="text-align:left ; font-family: 'Alata';font-size: 17px;">
Select  Date From <input type=date name="dt">
Select Date To <input type=date name="dt1">
<input type=submit name=btnsub>
</form>
</div><br>
<div class=" container table-responsive table-bordered table-hover"> 

 <table class="table">
    <thead>
    <tr>
		
        <th>Name</th>
        <th>E-mail</th>
        <th>Contact Number</th>
        <th>Date</th>
        
      </tr>
    </thead>
    <tbody>
<?php
if(isset($_POST["btnsub"]))
{
include("connection.php");
$m=$_POST["dt"];
$n=$_POST["dt1"];
$q="select * from signup where sdate between '$m' and '$n'";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{

  $em=$a["email"];
  $nm=$a["name"];
  $cnm=$a["contactno"];
  $dt=$a["sdate"];



echo "<tr><td>$nm</td><td>$em</td><td>$cnm</td><td>$dt</td>";
}
}
?>
    </tbody>
  </table>
<input type=button value=Print onclick="window.print()">
</div>
</div>
<?php
include("footer.php");
?>

	