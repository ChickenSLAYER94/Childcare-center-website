<!--
logout file
-->
<?php
    session_start();
    session_destroy();# if there is a session it would be destroyed here 
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
    <div class = "container">
        <h1 class= "text-center" style = "padding:5rem; background-color:white; margin-top:5rem">You have logged-out sucessfully</h1>
    </div>
</body>
</html>



<?php
    header("Refresh:2; url=index.php");
?>