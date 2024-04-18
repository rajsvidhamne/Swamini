
<?php
include("header.php");

include("../connection.php");
$q="select * from signup where email='$u'";
$rs=mysqli_query($cn,$q);
$nm="";
$cont="";



if($a=mysqli_fetch_array($rs))
{

$nm=$a['name'];
$cont=$a['contactno'];


}


?>
<style>
	body {
		color: #fff;
	    background-image: url("images/img8.jpg");
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
</style>

<div class="signup-form">
    <form  method="post"  id=frmreg  name="myForm">
		<h2>Your Profile</h2>
		<p>Update Profile Here</p>
		<hr>
		<div class="form-group">
			<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required" value="<?php echo $u;?>">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="nm" placeholder="Name" required="required" value="<?php echo $nm;?>" pattern="\D+">
			</div>
        </div>
		  <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-volume-control-phone"></i></span>
				<input type="text" class="form-control" name="contact" placeholder="Contact Number" required="required" value="<?php echo $cont;?>" pattern="\d{10}">
			</div>
        </div>
        
		
        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Update</button>
        </div>
    </form>
	
</div>



<?php

if(isset($_POST["btnsub"]))
{

$n=$_POST['nm'];
$cot=$_POST['contact'];


extract($_POST);
include("connection.php");
$q="update signup set name='$n',contactno='$cot'where email=$u";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Profile Updated successful');window.location='index.php'</script>";
}




?>