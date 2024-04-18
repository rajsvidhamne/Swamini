<?php
include ("header.php");
include ("style.css");

?>
<style>
	body {
		  color: black;
		  background-image: url("images/banner12.jpg");
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		
	}
	.table-img{
		background-image: url("images/banner10.jpg");
	}

</style>


   <h2 style="text-align:center ; font-family: 'Alata';font-size: 28px; color:#fff;">Management Of Admissions of Cources</h2>  
<!---Content add name in table-->
    
<div class=" container table-responsive table-bordered table-hover">    
<table class="table table-img" >
<thead>
	<tr>
	<th> Admission Id</th><th>Email Address</th><th>Address</th><th>Cource Name</th><th>Joining Date</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php

include("../connection.php");
$q="select * from admission where status='Not Approve'";

$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$aid=$a['addid'];
	$em=$a['email'];
	$ad=$a['address'];
	$crnm=$a['courcename'];
	$da=$a['joindate'];
	
	echo "<tr>";
	echo "
	      <td>$aid</td>
		  <td>$em</td>
		  <td>$ad</td>
		  <td>$crnm</td>
		  <td>$da</td>
		  
		  
		  <td>
			  <a class='btn btn-danger' href=deladmission.php?addid=$aid>Delete</a>
			  <a class='btn btn-info' href=admissionmail.php?addid=$aid>Approve Admission</a>  
		  </td>";
	echo "</tr>";
}

//Mail




?>
</tbody>
</table>
</div>



