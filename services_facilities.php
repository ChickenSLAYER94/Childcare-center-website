
<?php
  require('/home/**studentNumber**/public_html/ass03/header.php');
  require('/home/**studentNumber**/public_html/ass03/global_variable.php');
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services and Facilities</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      .b-colour{
        border-radius:1rem;
        border: 2rem solid #ffaea5;
      }
      .b-colour2{
        border-radius:1rem;
        border: 2rem solid #d4f0f0;
      }
      .b-colour3{
        border-radius:1rem;
        border: 2rem solid #97c1a9;
      }
      .card-radius{
        border-radius:2rem;
      }
      .learn {
  background-color: black;
  padding: 0.8rem;
  border-radius: 4px;
  float: right;
  color: white;
  font-size: 1.1rem;
}
.text {
  text-align: right;
  padding: 2rem 2rem 0rem 2rem;
  width: fit-content;
  height: fit-content;
}
    </style>
</head>
<body style = "background-color: #f7f5f0">

  <div class="container">
    <div class="col-12 my-2 text-center" style = "padding: 2rem; font-style:italic; background-color: #ffc8a2;">
      <h1 style = "color: white;">Services and Facilities</h1>
      <p style = "font-style:italic; color: white; font-size: 1.2rem;">We offer the best services</p>
    </div>
    <div class="row g-2">

      <div class="col-sm-4 my-5">
        <div class="card card-radius">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/services2.jpg" class="b-colour2 d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services3.jpg" class="b-colour3 d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services.jpg" class="b-colour d-block w-100 img-thumbnail" alt="...">
              </div>
            </div>
          </div>
          <div class="card-body">
           <h3 class="card-title">Daily Activities</h3>
           <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corrupti doloribus error facere repellat suscipit soluta, veniam, voluptatem pariatur, blanditiis corporis aperiam molestiae fugit praesentium alias quibusdam dolor quas unde.</p>
           <a class="learn text-decoration-none" href = "daily_activities.php?login= <?php echo $login ?> ">Learn more</a>
          </div>
        </div> 
      </div>

      <div class="col-sm-4 my-5">
        <div class="card card-radius">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/services3.jpg" class="b-colour3 d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services.jpg" class="b-colour d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services2.jpg" class="b-colour2 d-block w-100 img-thumbnail" alt="...">
              </div>
            </div>
          </div>
          <div class="card-body">

            <h3 class="card-title">Child Protection</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, molestias tempore. 
             Tempora provident maiores minus esse necessitatibus voluptates quae, repellendus pariatur repellat aut itaque
             illum delectus deserunt eius, laboriosam animi.</p>
            <a class="learn text-decoration-none"  href = "child_protection.php?login= <?php echo $login ?> ">Learn more</a>
          </div>
        </div> 
      </div>

      <div class="col-sm-4 my-5">
        <div class="card card-radius">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/services.jpg" class="b-colour d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services2.jpg" class="b-colour2 d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/services3.jpg" class="b-colour3 d-block w-100 img-thumbnail" alt="...">
              </div>
            </div>
          </div>
          <div class="card-body">
           <h3 class="card-title">Early Years Inspection</h3>
           <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa at beatae maxime eveniet sint ducimus velit corporis nemo ad numquam, temporibus corrupti tenetur quidem, natus consequatur, ab odit labore quibusdam.</p>
           <a href = "early_years.php?login= <?php echo $login ?> " class=" learn text-decoration-none">Learn more</a>
          </div>
        </div> 
      </div>
      
  
     
    </div>
    
  </div>

  
  
    

    
</body>
</html>