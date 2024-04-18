<?php
session_start();
include ("header.php");



?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext');


#playground-container {
    height: 500px;
    overflow: hidden !important;
    
}
.main{margin-top:10px; 
-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
padding:0px;
background:#2196f3;
background-image: url("images/banner5.jpeg");
}
.fb:focus, .fb:hover{color:FFF !important;}
body{
font-family: 'Raleway', sans-serif;
}

.left-side{
	padding:0px 0px 0px;
	
	background-size:cover;
}
.left-side h3{
	font-size: 30px;
    font-weight: 900;
	color:#BF8648;
	padding: 50px 10px 00px 26px;
	}
	
	.left-side p{
    font-weight:600;
	color:#BF8648;
	padding:10px 10px 10px 26px;
	}

	
	.fb{background: #2d6bb7;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;
	margin-left:26px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	.tw{background: #20c1ed;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	
	.right-side{
	padding:0px 0px 0px;
	background:#FFF;
	background-size:cover;
	min-height:514px;
}
	.right-side h3{
	font-size: 30px;
    font-weight: 700;
	color:#000;
	padding: 50px 10px 00px 50px;
	}
	.right-side p{
    font-weight:600;
	color:#000;
	padding:10px 50px 10px 50px;
	}
	.form{padding:10px 50px 10px 50px;}
    .form-control{box-shadow: none !important;
    border-radius: 0px !important;
    border-bottom: 1px solid #BF8648 !important2196f3;
    border-top: 1px !important;
    border-left: none !important;
    border-right: none !important;}
	.btn-deep-purple {
    background: #BF8648;
    border-radius: 18px;
    padding: 5px 19px;
    color: #FFF;
    font-weight: 600;
    float: right;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
}
</style>

  


<div class="container">
	<div class="col-md-10 col-md-offset-1 main" >
	   <div class="col-md-6 left-side" >
		<h3>Swamini Makeup Artist</h3>
		<p>Connect With Us</p>
		<br>
		
      </div><!--col-sm-6-->
	<div class="col-md-6 right-side">
		<h3>Login</h3>
		
<!--Form with header-->
<form action="" method="post" name="form4">
<div class="form" >
		<div class="form-group">
		    <label for="form2">Your e-mail</label>
            <input type="text" id="form2" class="form-control input-lg" name="em">
            
		</div>

        <div class="form-group">
		    <label for="form4">Your password</label>
            <input type="password" id="form4" class="form-control input-lg" name="pass">
           
        </div>

        <div class="text-xs-center">
            <button class="btn btn-deep-purple" name="btnlogin" type="submit">Login</button>
        </div>


</div>
</form>
<!--/Form with header-->
    </div><!--col-sm-6-->
    </div><!--col-sm-8-->   
</div><!--container-->


<!---login-->

<?php

if(isset($_POST["btnlogin"]))
{
include("connection.php");
$us=$_POST["em"];
$p=$_POST["pass"];
$q1="select * from signup where email='$us' and password='$p'";
$rs=mysqli_query($cn,$q1);
if($a=mysqli_fetch_array($rs))
{
  $_SESSION["email"]=$a["email"];
  $_SESSION["name"]=$a["name"];



 echo "<script>window.location='user/index.php'</script>";
}
else
{
echo "<script>alert('Invalid username or password')</script>";
}
}
?>
