<?php
//if the method is post
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    //check whether the button is clicked or not
    if(isset($_POST['register'])){

        $errors=array();//this will hold the errors if not correctly validated

        //validation for all the values of the form input
        $fullName=$_POST['fullName'];
        if(empty($fullName)){
            $errors[]="Full name is required";
        }else{
            $fullName=trim($fullName);//leave back the whitespace
        }

        $childName=$_POST['childName'];
        if(empty($childName)){
            $errors[]="Full name is required";
        }else{
            $childName=trim($childName);//leave back the whitespace
        }

        $category=$_POST['category'];
        if(empty($category)){
            $errors[]="Category is required";
        }

        $lengthOfCare=$_POST['length'];
        if(empty($lengthOfCare)){
            $errors[]="Length of care is required";
        }

        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[]="Invalid email format";
        }else if(empty($email)){
            $errors[]="Email is required";
        }

        $password=$_POST['password'];
        if(empty($password)){
            $errors[]="Password is required";
        }else{
            if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password)){
                $errors[]="Invalid pattern for password";
            }
        }
        
        
        //if there is no error in validation 
        if(empty($errors)){

            //code to send an emial confirmation
            $to=$email;
            $subject="Childcare Email Confirmation";
            $message="Your details has been successfully registered into our account";
            $from="sandiptmg1010@gmail.com";
            $headers="From : $from";
            if(mail($to,$subject,$message,$headers)){
                echo "Email send"."<br>";
            }else{
                echo "Email fail to send";
                echo '<a href="registration.html">Register Page</a>';
            }

            //getting database
            require('/home/**studentNumber**/db_connection/connect.php');

            //creating table 
            $sqlTable=" CREATE TABLE Registration_Detail(
                                email VARCHAR(55) NOT NULL PRIMARY KEY,
                                parents_name VARCHAR(25) NOT NULL,
                                child_name VARCHAR(25) NOT NULL,
                                category VARCHAR(20),
                                length VARCHAR(10),
                                password TEXT
            )";

            $result=mysqli_query($db_connection,$sqlTable);
            //if the table is created succesfully in the database
            echo "Table created"."<br>";
            $insertValues="INSERT INTO Registration_Detail VALUES('$email','$fullName','$childName','$category','$lengthOfCare','$password')";
            $resultTwo=@mysqli_query($db_connection,$insertValues);
            if($resultTwo){
                  echo "You registration has been successful"."<br>";
                  echo '<a href="registration_home.php">Register Page</a>';
                }else{
                   echo "Fail to register";
                   echo "Register Again";
                   echo '<a href="registration_home.php">Register Page</a>';
            }
            

        }else{
            echo "<h2>Error!</h2>";
            foreach($errors as $msg){
                echo $msg."<br>";
                echo '<a href="registration_home.php">Register Page</a>';
            }
        }

    }

}




?>