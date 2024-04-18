<?php
include("header.php");
include("../connection.php");
$q="select distinct type from service";

$rs=mysqli_query($cn,$q);



?>
<div class="container">
<h2 style="text-align:center ; font-family: 'Alata';font-size: 28px;">Service Type Report </h2><br>
<form method="post" style="text-align:left ; font-family: 'Alata';font-size: 17px;">
Choose Type of service <select name="dt"><option>--select type--</option>
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($type = mysqli_fetch_array(
						$rs,MYSQLI_ASSOC)):;
			?>
				<option>
					<?php echo $type["type"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select>


<input type=submit name=btnsub><br>
</form>
</div><br>
<div class=" container table-responsive table-bordered table-hover">  
<h1 align=center></h1>
 <table class="table">
    <thead>
      <tr>
		<th>Picture Id</th><th>Title</th><th>Description</th><th>Rates</th><th>Type</th><th>Image</th>
        
      </tr>
    </thead>
    <tbody>
<?php
if(isset($_POST["btnsub"]))
{
include("connection.php");
//$id = mysqli_real_escape_string($cn,$_POST['dt']); 
$d=$_POST["dt"];

$rs=mysqli_query($cn,"select * from service where type='$d'");
while($a=mysqli_fetch_array($rs))
{
	$pid=$a['picid'];
	$nm=$a['picname'];
	$rt=$a['rates']; //<th>Rates</th>  <td>$rt</td>
	$des=$a['description'];
	$ig=$a['image'];
	$ty=$a['type'];
echo "<tr>";
	echo "
	      <td>$pid</td>
		  <td>$nm</td>
		 
		  <td>$des</td>
		  <td>$rt</td>
		  <td>$ty</td>
		  <td><img src=\"../images/$ig\" width=100px height=100px></td>
		 
		 ";
	echo "</tr>";
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
