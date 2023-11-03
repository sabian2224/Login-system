<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
     rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
     crossorigin="anonymous">

    <link rel="stylesheet" href="styles/index.css">
    <title>DocAlb</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" 
    crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" 
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" 
    crossorigin="anonymous">
    </script>


 <!--Navbar----------------------------------------------------------->
    <nav class="navbar nav-tabs navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <!--
            <img src="img/newlogo.png" class="img-fluid" style="height: 50px; width: 120px;">
            -->
            <h4>Login System</h4>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             
              <?php
                 if(isset($_SESSION["userEmail"])){
              ?>
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <?php echo $_SESSION["userFname"] . " " . $_SESSION["userLname"]; ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a id="profileButton" class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="includes/logout.inc.php">Log Out</a></li>
                </ul>
              </li>
              <?php
                 }
                 else{
              ?>
                  <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Log in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">Register</a>
                </li>
                <?php
                 }
                 ?>
               

            </ul>
          </div>
        </div>
      </nav>
 <!----------------------------------------------------------------->


    