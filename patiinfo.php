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
<script type="text/javascript" src="js/rightde.js"></script>
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

<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

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
                        <li><a class="active" href="patiinfo.php">Information</a></li>
                        <li><a data-scroll href="supadm.php">Patient Information Edit</a></li>
						
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>

<br><br><br>
<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="heading"> <span>All </span> Patient details</h1> 
</div>
</div>
</div>
<div style="border-radius:10px; padding:25px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">By clicking more information can get informtion about channeled doctor, by clicking Make OPD Invoice can make basic invoice, by clicking on Admite to Hospitol can admit patient to hospital.</h4>
<br />

<table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
<thead>
<tr>
<th valign=""><strong>S.No</strong></th>
<th><strong>Patient Reg.No</strong></th>
<th><strong>Patient Full Name</strong></th>
<th><strong>OPD Doctor info</strong></th>
<th><strong>Blood Group</strong></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT patient.pet_id,patient.pet_fn,patient.pet_sn,patient.Pet_opdid,patient.pet_bg,staff.smfname,staff.smlname
FROM staff
RIGHT JOIN patient
ON patient.Pet_opdid=staff.staffID ORDER BY `pet_id` DESC";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr valign="middle">
    <td  align="left"><strong><?php echo $count; ?></strong> </td>
    <td  align="left"><?php echo $row["pet_id"]; ?></td>
    <td  align="left"><?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?></td>
    <td  align="left"><?php echo $row["Pet_opdid"]?> | Dr.<?php echo $row["smfname"]?> <?php echo $row["smlname"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> More Information </a> </td>
	  <td  align="left"><?php echo $row["pet_bg"]; ?></td>
    <td  align="center"><a target="_blank" href="opdinvo.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Make OPD Invoice</a></td>
    <td  align="center"><a target="_blank" href="admit.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Admit to Hospital</a></td>

</tr>

<?php
$count++; } ?>
</tbody>
</table>

</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
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


   