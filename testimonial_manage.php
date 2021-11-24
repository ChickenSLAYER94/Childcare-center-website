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
    .data{
      padding-left=2rem;
    }
  </style>
  
 
</head>

<body style = "background-color: #f7f5f0">

  <div class = "container">
  <?php
    $query="SELECT * from testimonial";

    $result=mysqli_query($db_connection,$query);
    $result=mysqli_query($conn,$query);

    $counter=1;
    while($row=mysqli_fetch_array($result)){
        
  ?>
    <!--start of while loop -->

      <div class="data">
        <?php
          echo "<b>ID</b>: "."$row[id]"."<br>";
          echo "<b>Services</b>: "."$row[services]"."<br>";
          echo "<b>Date</b>: "."$row[date]"."<br>";
          echo "<b>First Name</b>: "."$row[first_name]"."<br>";
          echo "<b>Comment</b>: "."$row[comment]"."<br>";
          echo "<b>Email</b>: "."$row[email]"."<br>";
        ?>
        

        <p></p> 
      </div>


    <!-- while loop ends here -->
    <?php
    }

    $rowResult = mysqli_query($db_connection, "SELECT * FROM testimonial");
    $rowResult = mysqli_query($conn, "SELECT * FROM testimonial");

    $rows = mysqli_num_rows($rowResult);
    for($i = 1; $i <= $rows; $i++) {?>
      <form action="#" method="POST">
        <label for="display"> <h5>Please check if you want to show the testimonial <?php echo $i?> 
        <input type="radio" class="form-check-input" name="display" value="show"/> </h5><br>
        <label for="display"> <h5>Please check if you dont want to show the testimonial <?php echo $i?>
        <input type="radio" class="form-check-input" name="display" value="hide"/> </h5><br>
        <label for="submit"> 
        <input type="submit" class = "btn btn-primary" name="submit" value="Submit<?php echo $counter++ ;?>"/> <br>   
        <input type="submit" class = "btn btn-primary" name="submit" value="Submit<?php echo ' testimonial '.$counter++ ;?>"/> <br>   
      </form><?php
      if($_POST['submit']=='Submit'.$i){
        if($_POST['display'] == 'hide'){

          $update="UPDATE testimonial Set display = 'hide' where id = '$i'";
          $result2=mysqli_query($db_connection,$update);
          $result2=mysqli_query($conn,$update);
          if($result2){
            echo "Wahts up";
          }else{
            //echo $row[first_name];
            //echo "Wrong";
          }
        }
        else if($_POST['display'] == 'show'){
          $update="UPDATE testimonial Set display = 'show' where id = '$i'";
          $result2=mysqli_query($db_connection,$update);
          $result2=mysqli_query($conn,$update);
          if($result2){
            //echo "Waht up";
          }else{
            //echo $row[first_name];
            //echo "Wrong";
          }
        }
       
      }
    }

    ?>
    </div>

</body>
</html>
