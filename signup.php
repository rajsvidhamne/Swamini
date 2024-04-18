
<?php
include ("header.php");
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
    <form  method="post"  id=frmreg  name="myForm" >
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="nm" id="nm" placeholder="Name" pattern="\D+" oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')" required="required">
			</div>
        </div>
		  <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-volume-control-phone"></i></span>
				<input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number" required="required" pattern="\d{10}">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" id= "email" placeholder="Email Address" pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login1.php">Login here</a></div>
</div>
<script>
function validate()
{
 var   n,a,e,m,c,u,p,cp;
n=document.getElementById("nm").value;
//a=document.getElementById("txtad").value;
e=document.getElementById("email").value;
m=document.getElementById("contact").value;
//c=document.getElementById("lstcity").value;
//u=document.getElementById("txtunm").value;
p=document.getElementById("pass").value;
cp=doument.getElementById("confirm_password").value;
if(n=="")
{
alert("Name can not be blank");
return false;
}
if(!n.match(/^[a-zA-Z\s]+$/))
{
  alert("Name can contain only alphabets");
return false;
}
if(a=="")
{
alert("Address can not be blank");
return false;
}
if(e=="")
{
alert("Email can not be blank");
return false;
}
if(m=="")
{
alert("Mobile no can not be blank");
return false;
}
if(!m.match(/\d{10}/))
{
  alert("Mobile no must contain 10 digits");
return false;
}

if(c=="")
{
alert("Please select city");
return false;
}
var g=0,i;
for(i=0;i<document.frm.gender.length;i++)
{
if(document.frm.gender[i].checked)
g=1;
}
if(g==0)
{
alert("Please select gender");
return false;
}
var fi=document.getElementById("file1").value;
if(fi=="")
{
 alert("Please select file");
return false;
}
if(!fi.match(/(\.jpg|\.png|\.gif|\.bmp)$/i))
{
  alert("Please upload image only");
return false;
}
const f=document.getElementById("file1");
const s=f.files.item(0).size;
var mb=Math.round(s/1024);
if(mb>2048)
{
alert("Please select file less than 2Mb");
return false;
}


if(u=="")
{
alert("UserName can not be blank");
return false;
}
if(p=="")
{
alert("Password can not be blank");
return false;
}
if(!p.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/))
{
  alert("Invalid Password");
return false;
}
return true;

if(cp=="")
{
alert("Password can not be blank");
return false;
}
if(!cp.match(p))
{
  alert("Invalid Password");
return false;
}
return true;

}



</script>


<?php
 
if(isset($_POST["btnsub"]))
{
$da=date("Y-m-d");
extract($_POST);
include("connection.php");
$q="insert into signup values('$nm','$email','$contact','$pass','$da')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Great, You’re Successfylly Registed!');window.location='login1.php'</script>";
}




?>