<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styl.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/Psstyle.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/c.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>

<script type="text/javascript" src="js/rightde.js"></script>

</head>
<body>

<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">

<header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a  href="menu.php">Home</a></li>
                        <li><a  data-scroll href="staff.php">Register</a></li>
                        <li><a data-scroll href="sestaffactmem.php">Search</a></li>
                        <li><a class="active" data-scroll href="staffactmem.php">Active Staff Members</a></li>
                        <li><a data-scroll href="staffmemd.php">Staff Member Details</a></li>
                        <li><a data-scroll href="supadmst.php">Staff Member Modifications</a></li>
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header> 
      <br> <br> <br> <br>


<h1 class="heading"> <span>Active </span> Staff Members</h1>    
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="container">
<div class="row">
<div class="col-md-4 col-xs-4 alert-danger"><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Full Time</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Full'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>


</div>



<div class="col-md-4 col-xs-4 alert-info"><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Morning</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Morning'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>




</div>
<div class="col-md-4 col-xs-4 alert-success" ><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Evening</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Evening'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>

<br>
<br>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lockk").style.display = 'none';
}else{
  document.getElementById("lockk").style.display;
}

</script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>


</head>
<body>
 