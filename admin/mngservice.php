<?php
include ("header.php");
include ("style.css");
?>
<!---Content-->
     <h2 style="text-align:center ; font-family: 'Alata';font-size: 28px; color:#fff;">Management Of Services</h2>
<div class="container table-bordered table-hover table-condensed">    
<table class="table table-img">
<thead>
	<tr>
	<th>Picture Id</th><th>Title</th><th>Description</th><th>Rates</th><th>Type</th><th>Image</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php

include("../connection.php");
$q="select * from service";
$rs=mysqli_query($cn,$q);
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
		 
		  <td>
			  <a class='btn btn-danger' href=delservice.php?picid=$pid>Delete</a>
			  <a class='btn btn-info' href=upservice.php?picid=$pid>Update</a>  
		  </td>";
	echo "</tr>";
}




?>
</tbody>
</table>
</div>



