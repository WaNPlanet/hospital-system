
<?php include 'connect.php';?>
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
                    <li><a  data-scroll href="invoinfo.php">All OPD Patients Invoiceses</a></li>
                    <li><a class="active" data-scroll href="invoadinfo.php">All Admited Patients Invoiceses</a></li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
  </header> 
<br> <br> 
<!-- booking section starts   -->

<section class="book" id="book">

<h1 class="heading"> <span>All Admited</span> Patient Invoices</h1>    
<br><br><br>


<div style="border-radius:10px; padding:10px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">By clicking view can view or print patient invoice.</h4>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Invoice .No</strong></th>
<th><strong>Invoice Date</strong></th>
<th><strong>Patient Reg No.</strong></th>
<th><strong>Patient Name</strong></th>
<th><strong>Patient  Age</strong></th>
<th><strong>Price for Medeciens</strong></th>
<th><strong>Doctors Fee</strong></th>
<th><strong>Count of Days</strong></th>
<th><strong>Price for Room</strong></th>
<th><strong>Service Charge</strong></th>
<th><strong>Total</strong></th>
<th><strong></strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `admit_invo_db` ORDER BY `Invo_no` DESC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["Invo_no"]; ?></td>
    <td align="center"><?php echo $row["invo_date"]; ?></td>
    <td align="center"><?php echo $row["pet_no"]; ?> </td>
    <td align="center"><?php echo $row["pet_name"]; ?></td>
    <td align="center"><?php echo $row["p_age"]; ?> </td>
    <td align="center">$ <?php echo $row["price_of_med"]; ?></td>
    <td align="center">$ <?php echo $row["price_of_doc"]; ?></td>
    <td align="center"><?php echo $row["day_count"]; ?> </td>
    <td align="center">$ <?php echo $row["price_of_room"]; ?></td>
    <td align="center">$ <?php echo $row["ser_char"]; ?></td>
    <td align="center">$ <?php echo $row["totl"]; ?> </td>
    <td align="center"><a target="_blank" href="print.php?id=<?php echo $row["Invo_no"]; ?> & ide=<?php echo $row["pet_no"]; ?>" name="ad">View</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>


</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>

</html>
