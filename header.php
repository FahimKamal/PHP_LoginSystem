<?php 
  session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">

    <title>PHP Website</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <?php 
                  if (isset($_SESSION["userid"])) {
                    echo '
                        <li class="nav-item">
                          <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="includes/logout.php">Logout</a>
                        </li>
                    ';
                  }
                  else {
                    echo '
                        <li class="nav-item">
                          <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="signin.php">Sign In</a>
                        </li>
                    ';
                    
                  }
               ?>
              
            </ul>              
          </div>
        </div>
    </nav>

    <div class="container">