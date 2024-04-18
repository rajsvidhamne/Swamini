<?php
include ("header.php");


include("../connection.php");

$q="select * from service where (select max(picid)from service) ";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$pid=$a['picid'];
}

?>


<style>
	body {
		color: #fff;
		  background-image: url("images/img8.png");
		  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
		font-family: 'Roboto', sans-serif;
	}
	
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	
	}
	.contact-form textarea {
        resize: vertical;
    }
</style>

<div class="signup-form">
    <form  method="post"  id=frmreg  name="myForm" enctype="multipart/form-data">
		<h2>Add Services </h2>
		
		<hr>
		
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="imgid" placeholder="Picture ID" required="required" value="<?php echo $pid +1;?>" >
			</div>
        </div>
		  <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-volume-control-phone"></i></span>
				<input type="text" class="form-control" name="title" placeholder="title" required="required">
			</div>
        </div>
        
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="text" class="form-control" name="rate" placeholder="Charges" required="required">
			</div>
        </div>
		
		<div class="form-group">
		<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i><i class="fa fa-check"></i></span>
			  
			  <select class="form-control" id="sel1" name="type" required>
				<option>Choose Type</option>
				<option>Bridal</option>
				<option>Maharashtrian</option>
				<option>Engagement</option>
				<option>Photoshoot</option>
				<option>Party</option>
			  </select>
		</div>
		</div>
		<div class="form-group">
			
                        <label for="descr">Description</label>
                        <textarea class="form-control" id="descr" name="descr" rows="3" required></textarea>
                   
        </div>
        <div class="form-group">
			<div class="input-group">
            <span class="input-group-addon"><i class="fa fa-camera"></i></span>
            <input ng-model="address" id="address" type="file" class="form-control" name="file1" placeholder="Select image" required>
			</div>
		</div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Submit</button>
        </div>
    </form>
	
</div>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
$id=$_POST['imgid'];
$nm=$_POST['title'];
$rate=$_POST['rate'];
$type=$_POST['type'];
$des=$_POST['descr'];
//code for image uploading
$fn=$_FILES['file1']['name'];
$s=$_FILES['file1']['size'];
$tnm=$_FILES['file1']['tmp_name'];


$ptr1=fopen($tnm,"r");
$ptr2=fopen("../images/$fn","w");


$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);
//end of image uploading
include("../connection.php");

//$q="insert into gallery(picid,picname,image,rate,description,type) 
                 //values('$id','$nm','$fn','$rate','$des','$type')";
$q="insert into service values('$nm','$des','$rate','$fn','$type','$id')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Service Added Successfully');window.location='addservice.php'</script>";
}


?>
