<?php
include ("header.php");
include ("style.css");
?>
<!---Content-->
    <h2 style="text-align:center ; font-family: 'Alata';font-size: 28px; color:#fff;">Management Of Register Users</h2>
<div class="container table-condensed table-bordered table-hover">    
<table class="table table-img">
<thead>
	<tr>
	<th>Sr.No.</th><th>Name</th><th>E-mail Address</th><th>Contact</th><th>Date</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php
$i=1;
include("../connection.php");
$q="select * from signup";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	
	$nm=$a['name'];
	$em=$a['email'];
	$cont=$a['contactno'];
	$da=$a['sdate'];

	echo "<tr>";
	echo "
		  <td>$i</td>
		  <td>$nm</td>
		  <td>$em</td>
		  <td>$cont</td>
		  <td>$da</td>
		  <td>
			  <a class='btn btn-danger' href=delreg.php?email=$em>Delete</a>
			 
		  </td>";
	echo "</tr>";
	$i++;
}




?>
</tbody>
</table>
</div>



