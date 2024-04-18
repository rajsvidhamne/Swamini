<?php
include("header.php");
?>
<div class="container">
<form method=post>
 Select Year <input type='text' name='yea'>
 <input type='submit' name='btnsub'>
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

$y=$_POST["yea"];

$rs=mysqli_query($cn,"select admission.email,admission.courcename,admission.joindate,signup.name from admission  
join signup on admission.email=signup.email where year(admission.joindate)='$y'");


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
