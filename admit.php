<?php include 'connect.php';?>
<?php include 'admitdb.php';?>
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

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<br> <br>
<h1 class="heading"> <span>Patient Admit</span> Registration Form </h1>    
<br />
<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-4 col-xs-12 alert alert-success text-center">Patients Registered on this forum are admit to Hospital.</div>
</div>
</div>

<div class="container book">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Patient Admit Registration Form</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">All fields are required</small>
<div>

<?php
$id=$_REQUEST['id'];
$query = "SELECT * from `patient` where pet_id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

  <form method="post" action="">
  <div align="left">  Patient ID :</div>
    <input disabled  value="<?php echo $row["pet_id"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient ID" >
    <input  name="adm_pid" value="<?php echo $row["pet_id"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient ID" >
<div align="left">  Patient Name :</div>
    <input disabled    value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient Name">
    <input  name="adm_name"   value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient Name">
<div align="left">  Patient Age :</div>
    <input disabled     value="<?php echo $row["pet_age"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient Age">
    <input  name="adm_age"    value="<?php echo $row["pet_age"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient Age">
<div align="left">  Patient Contact Number :</div>
    <input disabled    value="<?php echo $row["pet_ac"]; ?> <?php echo $row["pet_con"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient Contact Number">
    <input  name="adm_con"    value="<?php echo $row["pet_ac"]; ?> <?php echo $row["pet_con"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient Contact Number">
<div align="left">  Patient Blood Group :</div>
    <input disabled      value="<?php echo $row["pet_bg"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient Blood Group">
    <input  name="adm_bg"     value="<?php echo $row["pet_bg"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient Blood Group">
<div align="left">  Patient Diseases :</div>
    <input required  name="pet_disea" value="" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Diseases">
    <select required  name="adm_rn"  style="margin:5px;  border-radius:0px" class="form-control">
    <option value="">select Room</option>
    <?php
        $count = 1;
        $sel_query="SELECT `room_id`,`room_name` FROM `hospi_room` WHERE `room_avilabl` = 'AV'";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <option  value="<?php echo $row["room_id"]; ?>"> <?php echo $row["room_name"]; ?> </option>
            <?php $count++; } ?>
    </select>

  </div>
  <button name="submit"  class="btn" onclick="">Submit</button>
  <br>
  <script type="text/javascript">

document.write('<?php echo $hos; ?>');
    </script>
  </form>

<tr><td colspan="2" style="padding:5px">
<br /><br />
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
</div>
</div>
</div>
</center>
</div>
</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>

</html>
