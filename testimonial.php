<?php
   require_once('/home/**studentNumber**/db_connection/connect.php');
   require('/home/**studentNumber**/public_html/ass03/header.php');
   require('/home/**studentNumber**/public_html/ass03/global_variable.php');
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
    .testimonial-text {
      text-align: right;
      padding: 2rem;
    }
    .text {
      text-align: left;
      padding: 0rem 2rem 0rem 2rem;
      width: fit-content;
      height: fit-content;
    }
    .testimonial-author{
      text-align: right;
      padding: 0 2rem 0 0;
      font-style: italic;
    }
    .b-colour{
      border-radius:1rem;
      border: 2rem solid #ffaea5;
    }
    .card-radius{
      border-radius:2rem;
    }
    .container{
      padding-top:2rem;
    }
    .t-container{
      padding-top:2rem;
      display: none;
    }
  </style>
</head>
<body style = "background-color: #f7f5f0">
  <?php 
    $query = "Select services, date, first_name, comment, email, display from testimonial";
    $result = mysqli_query($db_connection, $query);
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { 
      while($row = mysqli_fetch_assoc($result)) {
  ?>
    

        <div class="container" <?php if($row['display'] == 'show') {?> style = "display:block;" <?php }else{ ?> style = "display:none;" <?php } ?>>
          <div class="card mb-3 card-radius">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="img/testimonial2.jpg" alt="..." class="d-block w-100 img-thumbnail b-colour" style="height: 70vh;">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <p>Testimonials</p>
                  <div class="testimonial-text"><h1><?php echo $row['services'] ?></h1><p><?php echo $row['date'] ?></p></div>
                  <p class="testimonial-text"><?php echo $row['comment'] ?></p>
                  <h5 class="testimonial-author">By <?php echo $row['first_name'] ?></h5>
                      
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php

      }
    }
    ?>
    
</body>
</html>
