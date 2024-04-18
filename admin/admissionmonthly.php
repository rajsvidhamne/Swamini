<?php
include("header.php");
?>
<div class="container">
<h2 style="text-align:center ; font-family: 'Alata';font-size: 28px;">Monthly Report </h2><br>
<form method=post style="text-align:left ; font-family: 'Alata';font-size: 17px;">
Select month <select name=mon>
<option>--select month--</option>
<?php
for($i=1;$i<=12;$i++)
{
  echo "<option value=$i>$i</option>";
}
?>
</select> &nbsp
Select year <select name=yea>
<option>--select year--</option>
<?php
for($i=2001;$i<=2050;$i++)
{
  echo "<option value=$i>$i</option>";
}
?>
</select> 
<input type=submit name=btnsub>
</form>

</div>
<h1 align=center></h1>
<div class=" container table-responsive table-bordered table-hover">    
<table class="table">

    <thead>
      <tr>
	    <th>Name</th>
        <th>E-mail</th>
        <th>Cource Name</th>
        <th>Join Date</th>
       
      </tr>
    </thead>
    <tbody>

<?php
if(isset($_POST["btnsub"]))
{
include("connection.php");
$m=$_POST["mon"];
$y=$_POST["yea"];


$rs=mysqli_query($cn,"select admission.email,admission.courcename,admission.joindate,signup.name from admission  
join signup on admission.email=signup.email where month(admission.joindate)=$m and year(admission.joindate)=$y");
while($a=mysqli_fetch_array($rs))
{
 $em=$a["email"];

  $nm=$a["name"];
  $cnm=$a["courcename"];
  $dt=$a["joindate"];


echo "<tr><td>$nm</td><td>$em</td><td>$cnm</td><td>$dt</td>";
}
}
?>
    </tbody>
  </table>
<input type=button value=Print onclick="window.print()">
</div>
<?php
include("footer.php");
?>
