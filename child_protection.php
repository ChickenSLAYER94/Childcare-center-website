<?php
require('/home/**StudentNumber**/public_html/ass03/header.php');
if($_GET['login'] != 1 ){
  header("location:login.php");
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
      .b-colour{
        border-radius:1rem;
        border: 2rem solid #ffeea5;
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-12 my-2 text-center" style = "padding: 2rem; font-style:italic; background-color: #57838d;">
      <h1 style = "color: white;">Child Protection</h1>
    </div>

    <div class="row g-2">
      <div class="col-sm-6 my-2">
        <img src="img/services3.jpg" class="b-colour d-block w-100 img-thumbnail" alt="...">
      </div>
      <div class="col-sm-6">
        <p class= "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est qui molestias explicabo voluptates velit 
          fugiat sed nam eaque reprehenderit dignissimos, dolores nemo, nobis cupiditate. Ipsum veniam commodi 
          minus natus esse. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum sed illum repellendus eaque sunt praesentium alias doloribus et assumenda ratione culpa saepe fugit pariatur, error, voluptatem corrupti. Iusto,
          voluptates! Suscipit! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid veritatis dolore id voluptate voluptatem sed maxime cum optio molestias! Magnam ipsam maiores deleniti quae molestiae velit numquam, 
          voluptates debitis recusandae.</p>
      </div>
    </div>

  </div>
  
</body>
</html>

