<?php
include ("header.php");
?>

<style>
.jumbotron {
background: #6aa6d4;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 20px;
padding-bottom: 20px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
</style>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h2">
                    Feedback Request <small>  &nbsp Your opinion matters ! Help us improve our services<br>Give us your feedback.</small></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="nm" placeholder="Enter name" name="nm" value="<?php echo $n?>"  required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="em" placeholder="Enter email" name="em" value="<?php echo $u?>" required>
							</div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="msg" name="msg" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnsub" name="btnsub">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

<?php
include("connection.php");
if(isset($_POST["btnsub"]))
{
extract($_POST);
include("connection.php");
$q="insert into feedback values('$em','$nm','$msg')";
/*//extract($_POST);
$e=$_POST['em'];
$n=$_POST['nm'];
$m=$_POST['msg'];


//$q="insert into feedback values('$em','$nm','$msg')";
$q="insert into feedback(email,name,msg)values('$e','$n','$m')";*/
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Message Send');window.location='index.php'</script>";
}




?>
