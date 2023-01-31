<?php include 'lvlauth.php'; ?>
<?php include 'connect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
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
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
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
                        <li><a data-scroll href="patin.php">Book</a></li>
                        <li><a class="active"  href="petsearch.php">Search</a></li>
                        <li><a data-scroll href="patiinfo.php">Information</a></li>
                        <li><a data-scroll href="supadm.php">Patient Information Edit</a></li>
						
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
     

<body>
<script type="text/javascript" src="js/rightde.js"></script>
<input id="admteee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">

        
<div class="container">
<div class="row">
<div class="col">
<br /> <br> <br>
<h1 class="heading"> <span>Search for</span> Patient Info</h1> 
</div>


<table style="background-color: rgba(255,255,255,0.0);" class="table table-responsive" width="500" ><form action="" method="post">
  <tr>
    <td><input style="font-size:12px" type="text" name="searvalu" class="form-control" placeholder="Enter Registration No / Mobile Number/ Email / First name or Blood Group" /></td>
  </tr><tr >
    <td >
      <!-- <button name="filter"  type="submit" class="btn  btn-default btn-block">Search</button> -->
      <button  class="btn btn-outline-secondary" onclick="valie();"   name="filter"  type="submit">SEARCH</button>
    </td>
  </tr></form>
</table>
</div>
</div>
</div>
<div class="container">
<div class="row">
<?php
if (isset($_POST['filter'])){
	$search = ($_POST['searvalu']);
	$self_query = "SELECT * FROM `patient` WHERE concat(`pet_id`, `pet_con`,`pet_em`,`pet_fn`,`pet_bg`) like '%$search%' ORDER BY `pet_id` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>

<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-5 col-md-push-1">
<div id="testimonials" class="section wb wow fadeIn">

<div class="container">      
            <hr class="invis">
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3>
                         Patient Reg.No : <?php echo $row["pet_id"]; ?></h3>
                        <p class="lead">
                            Patient Date of Birth :<?php echo $row["pet_bd"]; ?> </p>
                          <p>Contact Number :<?php echo $row["pet_con"]; ?></p>  
                        <h3>
                        Email:<?php echo $row["pet_em"]; ?></h3>
                     <p>Gender:<?php echo $row["pet_gen"]; ?></p>   
                      <h3> Blood Group:  <?php echo $row["pet_bg"]; ?></h3>
                     
                     <p> Address: <?php echo $row["pet_addr"]; ?></p>  
                     </div>
                     <div class="testi-meta">
                        <img src="" alt="" class="img-responsive alignleft">
                        <h4><?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>
                         <small>- OPD Doctor Registration No : <?php echo $row["Pet_opdid"]?>| 
<a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> More Information </a></small></h4>
                     </div>
                     <div>
                     <a target="_blank" href="admit.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Admit to Hospital</a>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div> 
                  </div>
                  <!-- end testimonial -->
               </div> 
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
<?php }} ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admteee").value == x)
{
 document.getElementById("lockkk").style.display = 'none';

}else{
  document.getElementById("lockkk").style.display;
}

</script>
<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
</body>

</html>
 