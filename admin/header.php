<!DOCTYPE html>
<html lang="en">
<head>
  <title>Swamini Makeup Artist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
</head>

<body>


<nav class="navbar navbar-inverse" style="background-color: black;  ">
  <div class="container-fluid">
    <div class="navbar-header " >
    
      <p style="font-family: 'Cinzel Decorative';font-size: 40px; color:#fff"  &nbsp> &nbsp Swamini
      <span style="font-family: 'Cinzel Decorative';font-size: 20px;color:#fff">Makeup Artist | Admin Dashboard</span>
      </p >
	  

    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php" style="font-size: 18px;">Home</a></li>
        <li class="dropdown" style="font-size: 18px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Handle Data <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addcources.php">Add Cources</a></li> 
          <li><a href="addphotos.php">Add Photos </a></li>
		  <li><a href="addservice.php">Add Services</a></li>
		  <li><a href="addachieve.php">Add Achivements</a></li>
		  <li><a href="mngcource.php">Manage Cources</a></li>
		  <li><a href="mngphotos.php">Manage Photos</a></li>
		  <li><a href="mngservice.php">Manage Services</a></li>
		  <li><a href="servicetypereport.php">Service Type Report</a></li>
		  
        </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 18px;">Handle Client Data <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mngappo.php" >Manage Appointments</a></li>
		   <li><a href="appomonthly.php">Monthly Appointments Report </a></li>
		  <li><a href="appobetween.php">Appointments Report</a></li>
        </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 18px;">Handle Student Data <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mngaddmission.php">Manage Addmissions </a></li>
		  <!--<li><a href="admissionyearly.php">Yearly Addmissions Report </a></li>-->
		  <li><a href="admissionmonthly.php">Monthly Addmissions Report </a></li>
		  <li><a href="admissionbetween.php">Addmissions Report </a></li>
          
        </ul>
        </li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 18px;">Handle Register Users <span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="mngregister.php">Manage Registration </a></li>
          <li><a href="registerdaily.php" >Daily Register Users</a></li>
		  <li><a href="registermonthly.php">Monthly Register Users</a></li>
		   <li><a href="registerbetween.php">Register Users</a></li>
        </ul>
        </li>
	  <li><a href="logout.php" style="font-size: 18px;"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
	  
 </div>
</nav>
