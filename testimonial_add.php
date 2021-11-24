<?php
require_once('/home/**studentNumber**/db_connection/connect.php');
require('/home/**studentNumber**/public_html/ass03/header.php');
require('/home/**studentNumber**/public_html/ass03/global_variable.php');

if($login == 0){
  header("location:login.php");
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $errors = array();

  if(empty($_POST['service'])){
    $errors[] = "A service is required";
  }
  else{
    $service = test_input($_POST["service"]);
    $service = mysqli_real_escape_string($db_connection, $service);
  }
  if(empty($_POST['fname'])){
    $errors[] = "A name is required";
  }
  else{
    $name = test_input($_POST["fname"]);
    $name = mysqli_real_escape_string($db_connection, $name);
  }
  if(empty($_POST['comment'])){
    $errors[] = "A comment is required";
  }
  else{
    $comment = test_input($_POST["comment"]);
    $comment = mysqli_real_escape_string($db_connection, $comment);
  }
  if(empty($_POST['date'])){
    $errors[] = "A date is required";
  }
  else{
    $date = test_input($_POST["date"]);
    $date = mysqli_real_escape_string($db_connection, $date);
  }
  
  if($admin == 1){
    $email2 = $_SESSION['adminEmail'];
    $password2 = $_SESSION['adminPassword'];
    $query = "SELECT * FROM Admin WHERE email= '$email2' AND password = '$password2' ";
    $result = mysqli_query($db_connection, $query);
    if(mysqli_num_rows($result) > 0) {
    
      $query = "INSERT INTO testimonial(services, date, first_name, comment, email)
      VALUES ('$service', '$date', '$name', '$comment', '$email2')";
      $result = @mysqli_query($db_connection, $query);
      if($result){
        echo "successfull";
      }
      else{
        echo mysqli_error($db_connection);
      }
    
    }
    else{
      echo mysqli_error($db_connection);
  
    }
  }
  else{
    $email2 = $_SESSION['email'];
    $password2 = $_SESSION['password'];
    $query2 = "SELECT * FROM Registration_Detail WHERE email= '$email2' AND password = '$password2' ";
    $result2 = mysqli_query($db_connection, $query2);
    if(mysqli_num_rows($result2) > 0) {
      $query2 = "INSERT INTO testimonial(services, date, first_name, comment, email)
      VALUES ('$service', '$date', '$name', '$comment', '$email2')";
    $result2 = @mysqli_query($db_connection, $query2);
    if($result2){
      echo "successfull";
    }
    else{
      echo mysqli_error($db_connection);
      echo "unsuccessfull";
    }
    
  }
  else{
    echo "false";
  
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
    <style>
      .testimonial-span{
        color: #57838d;
        font-style:italic;
      }
      .text-center{
        margin-bottom: 3rem;
      }
      .form-comment{
        height: 40vh;
      }
    </style>
</head>
<body style = "background-color: #f7f5f0">
  <div id = "login-dp" class = "mx-auto">
    <h2 class="text-center">Let's hear from <span class="testimonial-span">you.</span></h2>
    
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
      <form class="form" method="POST" action="testimonial_add.php" accept-charset="UTF-8">
        <div class="form-label">
          <label class="sr-only" for="service">Services</label>
          <select name='service' class = 'form-select'>
            <option> Daily Activities </option>
            <option>Child Protection</option>
            <option>Early Years Inspection</option>
          </select> 
        </div>
        <div class="form-input">
          <label class="sr-only" for="date">Date</label>
          <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" required>
        </div>
        <div class="form-input">
          <label class="sr-only" for="fname">First name</label>
          <input type="text" class="form-control" name="fname" placeholder="First name" required>
        </div>
        <div class="form-input">
          <label class="sr-only" for="comment">Comment</label>
          <input type="text" class="form-control  form-comment" name="comment" required>
        </div>
        <div class="form-input">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
  </div>
    
</body>
</html>
