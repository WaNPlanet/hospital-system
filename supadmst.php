<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'lvlauth.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<script type="text/javascript" src="js/rightde.js"></script>

</head>

<body>
<style>#mimg{
	width:140px;
	height:auto;
}</style>
<br /><br><br>
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
                        <li><a  href="petsearch.php">Search</a></li>
                        <li><a  data-scroll href="staffactmem.php">Active Staff Members</a></li>
                        <li><a  data-scroll href="staffmemd.php">Staff Memebers Details</a></li>
                        <li><a  class="active"  href="supadmst.php">Staff Memeber Modifications</a></li>
                     </ul>
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
<br>
<br>
        <div class="container">
                <div class="row">
                <div class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-4">
                <img id="mimg" src="images/log/mimg.png" class="img-responsive" />
                </div>
                </div>
        </div>
<br />
<div class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-xs-12 alert alert-danger">
        <div style="text-align:center;">Enter Super Administration Details to login</div></div>
</div>
</div>
<div class="container">
<div class="row">
	<?php
	include 'connect.php';
	

    // If form submitted, insert values into the database.
    if (isset($_POST['sadmun'])){

		$username = stripslashes($_REQUEST['sadmun']);

// removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['sadmpw']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
    $query = "SELECT * FROM `sup_admin` WHERE `sadiun`='$username'and `sadipw`='".md5($password)."'";

		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['sadmun'] = $username;
			header("Location: supadminopsm.php"); // Redirect user to index.php
            }else{
				$fail = '<br/ ><div style="font-size:12px" text-align="center" 
                class="alert alert-danger">Invalid Username or Password</div>';
				}
    }
?>
        <form action="" method="post">
                <div class="col-md-4 col-md-offset-4 col-xs-12 ">
                        <div class="input-group input-group-lg"><span class="input-group-addon">
                            <img style="width:30px" src="images/log/user.png" /></span>
                            <input name="sadmun" required="required" 
                            style=" height:52px; font-size:20px" id="field" 
                            type="text" class="form-control " placeholder="Username" 
                            value="<?php echo $_SESSION['sadmun']; ?>">
                        </div>

                <br />

                            <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                    <img style="width:30px" src="images/log/lock.png" /></span>
                                    <input name="sadmpw" required="required" style=" font-size:20px; 
                                    height:52px;" type="password" class="form-control " placeholder="Password">
                            </div>

                <br />

                <div style="text-align:center;">
                <button name="login" onclick="chcke();"  type="submit" value="SUBMIT" class="btn ">SUBMIT</button>
                <br>

                <script type="text/javascript">
                document.write('<?php echo $fail; ?>');</script>

                </div>
        </form>

</div>
</div>
<br><br>

</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
</html>
