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
<title>Health Care hospital</title>
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
                        <li><a class="active" data-scroll href="patin.php">Book</a></li>
                        <li><a data-scroll href="petsearch.php">Search</a></li>
                        <li><a data-scroll href="patiinfo.php">Information</a></li>
                        <li><a data-scroll href="supadm.php">Patient Information Edit</a></li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </header> 

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">OPD Doctor Information</h3></div>
<br />

<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">OPD Doctor Information</h3>
</div>
<center>
<div class="panel-body">
<div>

<?php
$id=$_REQUEST['id'];
$query = "SELECT * FROM `staff` WHERE `staffID`='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

  <form method="post" action="">
<div align="left">OPD Doctor ID:</div>
    <input disabled    value="<?php echo $row["staffID"]; ?>" style="margin:5px;  border-radius:0px"
     type="text" class="form-control" placeholder="Doctor ID" >
<div align="left">OPD Doctor Name:</div>
    <input disabled    value="<?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?>" style="margin:5px; 
     border-radius:0px" type="text" class="form-control" placeholder="Doctor Name">
<div align="left">OPD Doctor Mobile:</div>
    <input disabled    value=" <?php echo $row["smtel"]; ?>" style="margin:5px;  
    border-radius:0px" type="text" class="form-control" placeholder="Doctor Contact number">
<div align="left">OPD Doctor Address:</div>
    <input disabled    value="<?php echo $row["smaddr"]; ?>" style="margin:5px;  border-radius:0px" type="text" 
    class="form-control" placeholder="Doctor Address">
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
