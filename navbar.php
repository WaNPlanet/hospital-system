<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg bg-light" style="font-size: 1.5em;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    
     <div>
     <p class="navbar-brand">Welcome <font color="#87ceeb">
     <?php echo $_SESSION['sadmun']; ?>!</font> You are logged in as <?php echo $_SESSION['admty']; ?> 
      <a href="logout.php">Logout</a> 
    </div>
    
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link " href="patin.php">Patient Info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link "  href="staff.php">Staff Info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="invoinfo.php">Patient Invoices</a>
        </li>
        <li class="nav-item">
        <a class="nav-link "  href="admite.php">Admited Patient Information</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>