<?php
session_start();
require('/home/**StudentNumber**/db_connection/connect.php'); #databse connection
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <style>
    .nav-link{
      /* link style*/
      background-color: gray;
      border-radius: 0.8rem;
      color: white;
    }
  </style>
</head>
<body>
  
  <?php
    if(!isset($_SESSION['adminLog']) && !isset($_SESSION['log-in'])){ # header for public ?> 
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.php"><h1 class="name">Child Care</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <li class="nav-item">
                <a class="nav-link active me-4 py-3 text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="registration_home.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="services_facilities.php">Services and Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="contact_us_home.php">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-4 py-3 text-white" href="login.php">Login</a>
                
              <li class="nav-item">
                <a class="nav-link me-3 py-3 text-white" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php
        if(@$_GET['Valid']==true){ # checks if there is a valid login
      ?>
          <div class="alert alert-success alert-dismissible fade show mx-auto text-center py-3" role="alert" style = "width:25%;">
            <strong>You are succesfully logged-in</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
          </div>
  <?php
        }
    }
    
    else if(!isset($_SESSION['adminLog'])){ #checks if it is a member login. header for member?>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.php"><h1 class="name">Child Care</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <li class="nav-item">
                <a class="nav-link active me-4 py-3 text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="registration_home.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="services_facilities.php">Services and Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="contact_us_home.php">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-4 py-3 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="day_details.php">Child record</a></li>
                  <li><a class="dropdown-item" href="testimonial_add.php">Add Testimonial</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-4 py-3 text-white" href="login.php">Login</a>
                
              <li class="nav-item">
                <a class="nav-link me-3 py-3 text-white" href="logout.php">Logout</a>
              </li>
          
              
            </ul>
          </div>
        </div>
      </nav>
    
    
      <?php
        if(@$_GET['Valid']==true){ #checks for a valid login
      ?>
      <div class="alert alert-success alert-dismissible fade show mx-auto text-center py-3" role="alert" style = "width:25%;">
        <strong>You are succesfully logged-in</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
      </div>
      <?php
        }
      ?>
  <?php  
    }
    else if(!isset($_SESSION['log-in'])){ #checks if the user is an admin. Header for admin?>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.php"><h1 class="name">Child Care</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <li class="nav-item">
                <a class="nav-link active me-4 py-3 text-white" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="registration_home.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="services_facilities.php">Services and Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-4 py-3 text-white" href="contact_us_home.php">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-4 py-3 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index_edit.php">Edit home page</a></li>
                  <li><a class="dropdown-item" href="registration_edit.php">Edit registration page</a></li>
                  <li><a class="dropdown-item" href="day_details.php">Child record</a></li>
                  <li><a class="dropdown-item" href="day_details_edit.php">Edit child details</a></li>
                  <li><a class="dropdown-item" href="testimonial_add.php">Add Testimonial</a></li>
                  <li><a class="dropdown-item" href="testimonial_manage.php">Manage Testimonial</a></li>
                  <li><a class="dropdown-item" href="contact_us_manage.php">Contact messages</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-4 py-3 text-white" href="login.php">Login</a>
                
              <li class="nav-item">
                <a class="nav-link me-3 py-3 text-white" href="logout.php">Logout</a>
              </li>
          
              
            </ul>
          </div>
        </div>
      </nav>
    
    
      <?php
        if(@$_GET['Valid']==true){ #checks if the login is valid. prints out a successful message.
      ?>
      <div class="alert alert-success alert-dismissible fade show mx-auto text-center py-3" role="alert" style = "width:25%;">
        <strong>You are succesfully logged-in</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
      </div>
      <?php
        }
      ?>   
  <?php
    }
  ?>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>