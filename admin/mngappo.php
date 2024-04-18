<?php
include ("header.php");
include ("style.css");
?>
<!---Content add name in table-->
<h2 style="text-align:center; font-family: 'Alata';font-size: 28px;color:#fff;">Management Of Appointments</h2>  
<div class=" container table-responsive table-bordered table-hover">    
<table class="table table-img">
<thead>
	<tr>
	<th>Booking Id</th><th>Email Address</th><th>Address</th><th>Time Slot</th><th>Date</th><th>Description</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php

include("../connection.php");
$q="select * from booking where status='Not confirm'";

$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$bid=$a['bookid'];
	$em=$a['email'];
	$ad=$a['address'];
	$time=$a['timeslot'];
	$da=$a['bdate'];
	$des=$a['description'];

	echo "<tr>";
	echo "
	      <td>$bid</td>
		  <td>$em</td>
		  <td>$ad</td>
		  <td>$time</td>
		  <td>$da</td>
		  <td>$des</td>
		  
		  <td>
			  <a class='btn btn-danger' href=delappo.php?bookid=$bid>Delete</a>
			  <a class='btn btn-info' href=appomail.php?bookid=$bid>Confirm Appointment</a>  
		  </td>";
	echo "</tr>";
}




?>
</tbody>
</table>
</div>



