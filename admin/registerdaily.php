<?php
include("header.php");
?>
<div class="container">
<h2 style="text-align:center ; font-family: 'Alata';font-size: 28px;">Daily Register Users Report </h2><br>
<form method=post style="text-align:left ; font-family: 'Alata';font-size: 17px;">
Select date <input type=date name=dt> 
<input type=submit name=btnsub><br>
</form>
</div><br>
<div class=" container table-responsive table-bordered table-hover">  
<h1 align=center></h1>
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
$d=$_POST["dt"];

$rs=mysqli_query($cn,"select * from signup where sdate='$d'");
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
</div.
<?php
include("footer.php");
?>
