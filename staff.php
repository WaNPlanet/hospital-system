<?php include 'staffdb.php';?>
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<script type="text/javascript" src="js/rightde.js"></script>
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
                        <li><a class="active" data-scroll href="staff.php">Register</a></li>
                        <li><a data-scroll href="sestaffactmem.php">Search</a></li>
                        <li><a  data-scroll href="staffactmem.php">Active Staff Members</a></li>
                        <li><a  data-scroll href="staffmemd.php">Staff Memebers Details</a></li>
                        <li><a  data-scroll href="supadmst.php">Staff Memeber Modifications</a></li>
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header> 
<br>

<br><br><br>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
     
      
<section class="book" id="book">

    <h1 class="heading"> <span>Staff Member </span> Registration form</h1>    

    <div class="row">
    <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>


<form id="sreg" name="sreg" action="" method="post">
  <input type="hidden" name="dmun" value="<?php echo $_SESSION['sadmun']; ?>" />

 
 
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



    
  <input name="addr"  
                required="required" 
                type="text" class="box"   placeholder="Address">
 

    
       
        <input type="text" class="box" pattern="\d{9,9}"  maxlength="9" 
        title="Envalid Mobile Number Use only Letters and chacter count must be 9" 
        name="tel" required  type="text" 
        placeholder="Contact Number" >
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
  



  <select class="box"  name="typesm" required="required" title="Select Your Staff Type"  
         placeholder="Select your Staff Type">
  <option value="">Staff Type</option>
    <option value="Doctor">Doctor</option>
    <option value="Nurse">Nurse</option>
    <option value="Other">Other</option>
  </select>
 

   


  <select class="box"  name="workt" required="required" title="Working time">
  <option value="">Working time</option>
    <option value="Morning">Morning Time</option>
    <option value="Evening">Evening Time</option>
    <option value="Full">Full Time</option>
  </select>
  <script type="text/javascript">
document.write('<?php echo $gestwterr; ?>');
    </script>
 
 
    <br>
    <button  class="btn btn-outline-secondary" name="submit" type="submit" value="SUBMIT">SUBMIT</button>

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
<script src="js/hidenv.js"></script>
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
