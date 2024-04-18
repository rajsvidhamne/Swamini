<?php
include ("header.php");
include ("style.css");
?>
<!---Content-->
    <h2 style="text-align:center ; font-family: 'Alata';font-size: 28px;color:#fff;">Management Of Courses</h2>  
<div class="container table-bordered table-hover table-condensed">    
<table class="table table-img">
<thead>
	<tr>
	<th>Cource Id</th><th>Cource Name</th><th>Duration</th><th>Fees</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php

include("../connection.php");
$q="select * from cource";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$cid=$a['courceid'];
	$nm=$a['courcename'];
	$rt=$a['rates']; //<td>$rt</td> <th>Fess</th>
	$du=$a['duration'];

	echo "<tr>";
	echo "
	      <td>$cid</td>
		  <td>$nm</td>
		  
		  <td>$du</td>
		  <td>$rt</td>
		  <td>
			  <a class='btn btn-danger' href=delcource.php?courceid=$cid>Delete</a>
			  <a class='btn btn-info' href=upcources.php?courceid=$cid>Update</a>  
		  </td>";
	echo "</tr>";
}




?>
</tbody>
</table>
</div>



