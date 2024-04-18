
<?php
include ("header.php");
include("../connection.php");

$q="select max(bookid) from booking ";
$rs=mysqli_query($cn,$q);
while($a=mysqli_fetch_array($rs))
{
	$cid=$a[0]+1;
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
		<h2>Book Appointment </h2>
		<p>Please fill in this form to book your appointment!</p>
		<hr>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="text" class="form-control" name="bid" placeholder="Booking ID" value="<?php echo $cid;?>" required="required" >
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $u;?>" >
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
				<input type="textarea" class="form-control" name="address" placeholder="Address" required="required">
			</div>
        </div>
        
		<div class="form-group">
		<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i><i class="fa fa-check"></i></span>
			  
			  <select class="form-control" id="sel1" name="time" required>
				<option>Choose Time Slot</option>
				<option>Morning</option>
				<option>Afternoon</option>
				<option>Evening</option>
			
			  </select>
		</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				<input type="date" class="form-control" name="bdate" placeholder="Date" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-edit"></i></span>
				<input type="textarea" class="form-control" name="desc" placeholder="Describe Here" required="required">
			</div>
        </div>
        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Submit</button>
        </div>
    </form>
	
</div>



<?php

if(isset($_POST["btnsub"]))
{
extract($_POST);
include("connection.php");
$q="insert into booking values('$bid','$address','$time','$bdate','$desc','$email','Not Confirm')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Great, You’re Appointement is Booked!.');window.location='services.php'</script>";
}




?>