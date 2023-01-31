<?php include 'connect.php';?>
<?php include 'desinvodb.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
                    <li><a  data-scroll href="patin.php">Book</a></li>
                    <li><a data-scroll href="petsearch.php">Search</a></li>
                    <li><a data-scroll href="patiinfo.php">Information</a></li>
                    <li><a data-scroll href="supadm.php">Patient Information Edit</a></li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
  </header> 
<br />


<div class="container-fluid">
<div class="row">
<ul class="nav col-xl-12" style="background-color:#FFF;justify-content:center;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="admiteinvo.php"><strong>Patient Admited Invoice</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="heading"> <span>Patient</span> Admited Invoice</h1>    
<br />


<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Patient Invoices</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">All fields are required</small>
<div>
  <?php
  require('connect.php');
  $id=$_REQUEST['id'];
  $rid=$_REQUEST['rid'];
  $mid=$_REQUEST['mid'];

  $query = "DELETE FROM `admit_pet` WHERE `admit_petid`=$id";
  $result = mysqli_query($con,$query) or die ( mysqli_error());
  $rquery="UPDATE `hospi_room` SET `room_avilabl`= 'AV',`room_petID`='No Patient' WHERE `room_id` = '$rid'";
  $result = mysqli_query($con,$rquery) or die ( mysqli_error($con));


  $squery = "SELECT * FROM `patient` WHERE `pet_id` ='$mid'";
  $result = mysqli_query($con, $squery) or die ( mysqli_error($con));
  $row = mysqli_fetch_assoc($result);
  ?>
<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <tr>
    <td colspan="2" style="padding:5px">
      Patient Reg No:
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_id"]; ?>" required  name="pid"   type="text" class="form-control" placeholder="Patient Name">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
      Patient Full Name:
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" required name="dname" id="lname"   type="text" class="form-control" placeholder="Doctor Name">
	</div>
    </td>
  </tr>

  <tr>

    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Patient Age:<input value="<?php echo $row["pet_age"]; ?>" name="age"  required="required"   type="number" class="form-control" placeholder="Age"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Medicine Charge<input name="mc"  required="required"   type="number" class="form-control" placeholder="Medicine Charge"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Doctor Charge<input name="dc"  required="required"   type="number" class="form-control" placeholder="Doctor Charge"></div></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Count of days (Rs.1000.00 per day)<input name="cod"  required="required"   type="number" class="form-control" placeholder="Count of days"></div></td>
        </tr>



  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">SUBMIT</button></div></td>
    </tr>
<tr><td colspan="2" style="padding:5px">
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
   </form>
</table>
</div>
</div>
</center>
<div class="panel-footer text-center">Press Submit button after completing </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
