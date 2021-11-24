<?php
session_start();
require('/home/**StudentNumber**/db_connection/connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $errors = array();

  if(empty($_POST['email'])){
    $errors[] = "An email is required";
  }
  else{
    $email = test_input($_POST["email"]);
    $email = mysqli_real_escape_string($db_connection, $email);
  }
  if(empty($_POST['password'])){
    $errors[] = "A password is required";
  }
  else{
    $password = test_input($_POST["password"]);
    $password = mysqli_real_escape_string($db_connection, $password);
  }
  if(empty($_POST['status'])){
    $errors[] = "A status is required";
  }
  else{
    $status = test_input($_POST["status"]);
    $status = mysqli_real_escape_string($db_connection, $status);
  }
  if($_POST['status'] == 'member'){
    $query = "SELECT * FROM Registration_Detail WHERE email='$email' AND password ='$password'";
    $result = mysqli_query($db_connection, $query);
    if(mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['log-in'] = 1;
      header("location:header.php?Valid=You are logged in successfully");
      echo  $_SESSION['email'];
    }
    else {
      echo  $_SESSION['email'];
      header("location:login.php?Invalid=The username and password are incorrect!");
    } 

  }
  else if($_POST['status'] == 'admin'){
    $query = "SELECT * FROM Admin WHERE email='$email' AND password ='$password'";
    $result = mysqli_query($db_connection, $query);
    if(mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $_SESSION['adminEmail'] = $row['email'];
      $_SESSION['adminPassword'] = $row['password'];
      $_SESSION['adminLog'] = 1;
      echo $_SESSION['adminEmail'];
      header("location:header.php?Valid=You are logged in successfully");
    }
    else {
      echo $_SESSION['adminEmail'];
      header("location:login.php?Invalid=The username and password are incorrect!");
    }
  }
 
}
function test_input($data) {
  //handles the data of the form.
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
</head>
<body style = "background-color: #f7f5f0">
  <div id = "login-dp" class = "mx-auto">
    <h4 class="text-center">Welcome</h4>
    <h5 class="text-center">To</h5>
    <h2 class="text-center" style = "font-style:italic; color: #ff968a; font-weight:bold; padding-bottom: 2rem;">Child Care</h2>
    <div id = "login-con">
      <?php
        if(@$_GET['Invalid']==true){
      ?>
      <div class="alert alert-danger alert-dismissible fade show mx-auto text-center py-3" role="alert" style = "width:100%;">
        <strong>Wrong username and password!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
      </div>
      <?php
        }
      ?>

      <?php
        if(@$_GET['Valid']==true){
      ?>
      <div class="alert alert-success alert-dismissible fade show mx-auto text-center py-3" role="alert" style = "width:100%;">
        <strong>You are succesfully logged-in</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
      </div>
      <?php
        }
      ?>
      <p>Log in to your account</p>
      <form class="form" method="POST" action="login.php" accept-charset="UTF-8">
        <div class="form-input">
          <label class="sr-only" for="email">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="form-input">
          <label for='status' class='form-label'>Status</label>
          <select name='status' class = 'form-select' required>
            <option value = "admin">Admin</option>
            <option value = "member">Member</option>
          </select>           
        </div>
        <div class="form-input">
          <label class="sr-only" for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="forgot-password">Forgot the password?<a href="" class="text-decoration-none"> Reset your password</a></div>
        </div>
        <div class="form-input">
          <button type="submit" class="btn btn-primary">Sign in</button>
          <div class="bottom">
            No account? <a href="#" class="text-decoration-none">Create account</a>
          </div>
        </div>
        <div class="checkbox">
          <label>
          <input type="checkbox"> keep me logged-in
          </label>
        </div>
      </form>
    </div>
  </div>
    
</body>
</html>