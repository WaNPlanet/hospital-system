<?php include 'lvlauth.php'; ?>
<?php include 'connect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
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
   <link rel="stylesheet" href="css/styl.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/staff.css"/> -->
<script type="text/javascript" src="js/rightde.js"></script>

</head>
<body class="clinic_version">


<div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a data-scroll href="menu.php">Home</a></li>
                        <li><a data-scroll href="staff.php">Register</a></li>
                        <li><a class="active"  href="petsearch.php">Search</a></li>
                        <li><a  data-scroll href="staffactmem.php">Active Staff Members</a></li>
                        <li><a  data-scroll href="staffmemd.php">Staff Memebers Details</a></li>
                        <li><a  data-scroll href="supadmst.php">Staff Memeber Modifications</a></li>
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>

<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
        

<div class="container">
<div class="row">
<div class="col">
<br /><br><br>
<h1 class="heading"> <span>Search for </span> Staff Info </h1>    
</div>
<table style="background-color: rgba(255,255,255,0.0);" class="table table-responsive" width="500" border="0">
<form action="" method="post">
  <tr>
    <td><input style="font-size:12px" type="text" name="searvalu" class="form-control" placeholder="Enter Registration No / Mobile Number/ Email / First name or Staff Memeber Type" /></td>
  </tr><tr style="text-align:center;" >
    <td style="text-align:center;">
    <button name="filter"  type="submit" class="btn  btn-default btn-block">Search</button></td>
  </tr>
</form>
</table>
</div>
</div>
</div>
<div class="container">
<div class="row">
<?php
if (isset($_POST['filter'])){
	$search = ($_POST['searvalu']);
	$self_query = "SELECT * FROM `staff` WHERE concat(`staffID`, `smtel`,`smemail`,`smfname`,`smtype`,`smwoti`) 
  like '%$search%' ORDER BY `staffID` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>

      <div style="padding:20px;  margin:5px;"class="col-md-5 col-md-push-1">

      <h4>
      Patient Reg.No : <?php echo $row["staffID"]; ?><br />
      Patient Name : <?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?><br />
      </h4>

      <dl class="dl-horizontal box">

      <dt style="font-size:12px;"><strong>Birth Day: </strong></dt>
      <dd style="font-size:12px;"><?php echo $row["smbd"]; ?></dd>

      <dt style="font-size:12px;"><strong>Contact Number : </strong>
      <dd style="font-size:12px;"><?php echo $row["smtel"]; ?></dd>

      <dt style="font-size:12px;"><strong>Email: </strong></dt>
      <dd style="font-size:12px;"><?php echo $row["smemail"]; ?></dd>

      <dt style="font-size:12px;"><strong>Gender: </strong></dt>
      <dd style="font-size:12px;"><?php echo $row["smgender"]; ?></dd>

      <dt style="font-size:12px;"><strong>Memeber Type: </strong></dt></dt>
      <dd style="font-size:12px;"><?php echo $row["smtype"]; ?></dd>

      <dt style="font-size:12px;"><strong>Memeber Working Time: </strong></dt></dt>
      <dd style="font-size:12px;"><?php echo $row["smwoti"]; ?></dd>

      <dt style="font-size:12px;"><strong>Address: </strong></dt>
      <dd style="font-size:12px;"><?php echo $row["smaddr"]; ?></dd>

      </dl>

      <ul  class="nav col">
      <li style="background-color:rgba(255, 255, 255, 0.3);"><a  href="supadmst.php" name="ad">Staff Details Modifications</a></li>
      </ul>

      </div>

<?php }} ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>
</html>



