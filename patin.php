<?php include 'connect.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
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
<title>Health Care hospital</title>
<!-- <link rel="stylesheet" type="text/css" href="css/staff.css"/> -->
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet">

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

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
  


<section class="book" id="book"> 
<h1 class="heading"> <span>Register</span> Patient </h1>  

<div class="book">
            <div class="row">

<div class="image">
    <img src="image/book-img.svg" alt="">
</div>


<form id="sreg" name="sreg" action="" method="post">

  
  <input type="text" aria-label="First name" class="box"
                         pattern="[A-Za-z]{1,30}" 
                        title="Use Only Letters" required 
                        id="fname" name="fname" 
                            placeholder="First Name">

  <input type="text" aria-label="Last name" class="box"
               pattern="[A-Za-z]{1,30}"
                title="Use Only Letters"
                    required name="lname" id="lname"   
                    placeholder="Last Name">

       
           
        <select required="required" title="Use Only Letters" name="dnames"  data-live-search="true"
        class="box">
                <option value="">Select OPD Doctor</option>

                <?php
                $count = 1;
                $sel_query="SELECT `staffID`,`smfname`, `smlname` FROM `staff` WHERE `smtype` = 'Doctor'"; 
                //selcet deoctor member id, deoctor first name and deoctor lastanme from staff table  
                $result = mysqli_query($con,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <option data-tokens="" value="<?php echo $row["staffID"]; ?>">
                <?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?>
                </option>
                <?php $count++; } ?>
        </select>
       
           
  <input name="addr"  
                required="required" 
                type="text" class="box"  placeholder="Address">


        <input type="text" class="box" pattern="\d{9,9}"  maxlength="9" 
        title="Envalid Mobile Number Use only Letters and chacter count must be 9" 
        name="tel" required  type="text" 
        placeholder="Contact Number" aria-label="Username" aria-describedby="basic-addon1">
        <script type="text/javascript">
document.write('<?php echo $conduperr; ?>');

</script>
    

   
  <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
        title="Not Valide Email" id="eml" name="email" required  type="email" 
        class="box" placeholder="Email Address"
                  placeholder="Email Address">
                 <script type="text/javascript">
   document.write
('<?php echo $emlduperr; ?>');</script>

    
 
      
  <select class="box" 
  name="gender" required="required" 
        title ="Select Your Gender"  placeholder="Select your Gender">
   
    <option   value="">Select your Gender   </option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>

 

   
  <input name="smbdd" required  type="date" 
        class="box" placeholder="Birthday">


       

 
  <select class="box" name="bg" required="required" title="Select Your Blood Group"  
         placeholder="Select your Staff Type"
  aria-label="Floating label select example">
  <option value="">Select Blood Group</option>
    <option value="A+">A RhD positive (A+)</option>
    <option value="A-">A RhD negative (A-)</option>
    <option value="B+">B RhD positive (B+)</option>
    <option value="B-">B RhD negative (B-)</option>
    <option value="O+">O RhD positive (O+)</option>
    <option value="O-">O RhD negative (O-)</option>
    <option value="AB+">AB RhD positive (AB+)</option>
    <option value="AB-">AB RhD negative (AB-)</option>
  </select>


 

  <input type="hidden" name="sadmun" value="<?php echo $_SESSION['sadmun']; ?>" />
  <td colspan="2" style="padding:5px"><script type="text/javascript">
document.write('<?php echo $gestwterr; ?>');
    </script></td>

    <br>
    <button  class="btn btn-outline-secondary" onclick="valie();"   name="submit" type="submit" value="SUBMIT">SUBMIT</button>
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
<div class="panel-footer text-center" style="font-size: 1.2em;">Press Submit button after completing </div>


</section>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script src="js/admty.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>

</html>

