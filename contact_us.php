<?php
    //if the method is get
    if($_SERVER['REQUEST_METHOD']=="POST"){

        //if the sumbit is click
        if(isset($_POST['submit'])){

            $errors=array();//this will hold the errors if not correctly validated

            //validation for form inputs
            $name=$_POST['Name'];
            if(empty($name)){
                $errors[]="Name is required";
            }

            $email=$_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[]="Invalid email format";
            }else if(empty($email)){
                $errors[]="Email is required";
            }

            $phoneNumber=$_POST['phoneNumber'];
            if(empty($phoneNumber)){
                $errors[]="Phone number is required";
            }

            $textarea=$_POST['textarea'];
            //there is no need to check if textarea is empty because its not mandatory
            //trim white space
            $textarea=trim($textarea);


            if(empty($errors)){

                //getting database
                require('/home/**StudentNumber**/db_connection/connect.php');

                // //creating table 
                // $sqlTable=" CREATE TABLE Contact_Us(
                //                     id INT(20) AUTO_INCREMENT PRIMARY KEY,
                //                     email TEXT,
                //                     firstname TEXT,
                //                     phoneNumber INT,
                //                     textarea TEXT
                // )";

                // $result=@mysqli_query($db_connection,$sqlTable);
                // //if the table is created succesfully in the database
                // echo "Table created"."<br>";
                $insertValues="INSERT INTO Contact_Us (email,firstname,phoneNumber,textarea) VALUES('$email','$name','$phoneNumber','$textarea')";
                $resultTwo=@mysqli_query($db_connection,$insertValues);

                if($resultTwo){
                    echo "Thank you for contacting us"."<br>";
                    echo '<a href="contact_us_home.php">Contact Page</a>';
                }else{
                    echo mysqli_error($db_connection);
                    echo '<a href="contact_us_home.php">Contact Page</a>';
                }

            }else{
                echo "<h2>Error!</h2>";
                foreach($errors as $msg){
                    echo $msg."<br>";
                    echo '<a href="contact_us_home.">Contact Page</a>';
                }
            }






        }

    }


?>