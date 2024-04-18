<?php
include ("header.php");
include ("style.css");
?>
<!---Content-->
<h2 style="text-align:center; font-family: 'Alata';font-size: 28px; color:#fff; ">Management Of Photos</h2>  
<div class="container table-bordered ">    
<table class="table table-img">
<thead>
	<tr>
	<th>Picture Id</th><th>Image</th><th>Actions</th>
	</tr>
</thead>
<tbody>
<?php
include("../connection.php");
$q="select * from gallery";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$pid=$a['pid'];
	$ig=$a['img'];
	echo "<tr>";
	echo "
	      <td>$pid</td>
		  <td><img src=\"images/$ig\" width=100px height=100px></td>
		  <td>
			  <a class='btn btn-danger' href=delphotos.php?pid=$pid>Delete</a>
		  </td>";
	echo "</tr>";
}
?>
</tbody>
</table>
</div>



