<?php
require('/home/**studentnumber**/public_html/ass03/header.php');
require('/home/**studentnumber**/public_html/ass03/global_variable.php');
    if($admin == 0){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="initial-scale=1.0 width=device-width">
    </head>
    
    <body>

        <aside>


            <div class="aside one">

                <div class="mx-auto" style="width:200px;">    
                
                        
                    <form method="GET">

                        <div class="form-group ">
                            <h2>Babies</h2>
                            Half Day<input type="number" class='form-control' name="half_day_Babies">  
                        </div> 

                        <div class="form-group ">
                            Full Day<input type="number" class='form-control' name="full_day_Babies">  
                        </div> 

                        <div class="form-group ">
                            1-Day<input type="number" class='form-control' name="1_day_Babies">  
                        </div> 

                        <div class="form-group ">
                            3-Day<input type="number" class='form-control' name="3_day_Babies">  
                        </div> 

                        <div class="form-group ">
                            5-Day<input type="number" class='form-control' name="5_day_Babies">  
                        </div> 

                        <button type="submit" name="update_Babies" class="btn btn-primary">Update</button>

                    </form>

                    <?php
                        //if the Update button is clicked

                        if($_SERVER['REQUEST_METHOD']=="GET"){

                            if(isset($_GET['update_Babies'])){
                                // header("Refresh:3");
                                $errors=array();

                                //getting form input value and storing each in given variable names
                                //validating
                                $halfDay=$_GET['half_day_Babies'];           
                                if(empty($halfDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($halfDay)){
                                        $errors[]="half day music be in numeric value";
                                    }
                                }

                                $fullDay=$_GET['full_day_Babies'];   
                                if(empty($fullDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fullDay)){
                                        $errors[]="full day music be in numeric value";
                                    }
                                }   

                                $oneDay=$_GET['1_day_Babies'];
                                if(empty($oneDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($oneDay)){
                                        $errors[]="one day music be in numeric value";
                                    }
                                }                     

                                $threeDay=$_GET['3_day_Babies']; 
                                if(empty($threeDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($threeDay)){
                                        $errors[]="three day music be in numeric value";
                                    }
                                }                       

                                $fiveDay=$_GET['5_day_Babies'];
                                if(empty($fiveDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fiveDay)){
                                        $errors[]="five day music be in numeric value";
                                    }
                                }

                                if(empty($errors)){
                                    require('/home/**studentNumber**/db_connection/connect.php');
    
                                    $queryOne="UPDATE Fees SET Half_Day='$halfDay' WHERE Code='B1'";
                                    $resultOne=mysqli_query($db_connection,$queryOne);
                                    if($resultOne){
                                        echo "Half Day Updated To: "."€"."$halfDay";
                                        
                                    }

                                    $queryFive="UPDATE Fees SET 5_Day='$fiveDay' WHERE Code='B1'";
                                    $resultFive=mysqli_query($db_connection,$queryFive);
                                    if($resultFive){
                                        echo "5 Day Updated To: "."€"."$fiveDay";
                                    }
        
                                    $queryTwo="UPDATE Fees SET Full_Day='$fullDay' WHERE Code='B1'";
                                    $resultTwo=mysqli_query($db_connection,$queryTwo);
                                    if($resultTwo){
                                        echo "Full Day Updated To: "."€"."$fullDay";
                                    }
        
                                    $queryThree="UPDATE Fees SET 1_Day='$oneDay' WHERE Code='B1'";
                                    $resultThree=mysqli_query($db_connection,$queryThree);
                                    if($resultThree){
                                        echo "1 Day Updated To: "."€"."$oneDay";
                                    }
        
                                    $queryFour="UPDATE Fees SET 3_Day='$threeDay' WHERE Code='B1'";
                                    $resultFour=mysqli_query($db_connection,$queryFour);
                                    if($resultFour){
                                        echo "3 Day Updated To: "."€"."$threeDay";
                                    }
        
                                    

                                }else{
                                    echo "<h2>Error!</h2>";
                                    foreach($errors as $msg){
                                        echo $msg."<br>";
                                        echo '<a href="../index.html">Home Page</a>';
                                    }
                                }  
                            }
    

                        }
                        
                    ?>

                </div>

            </div>

            <div class="aside two">

                <div class="mx-auto" style="width:200px;">     

                    <form method="GET">

                        <div class="form-group ">
                            <h2>Wobblers</h2>
                            Half Day<input type="number" class='form-control' name="half_day_Wobblers">  
                        </div> 

                        <div class="form-group ">
                            Full Day<input type="number" class='form-control' name="full_day_Wobblers">  
                        </div> 

                        <div class="form-group ">
                            1-Day<input type="number" class='form-control' name="1_day_Wobblers">  
                        </div> 

                        <div class="form-group ">
                            3-Day<input type="number" class='form-control' name="3_day_Wobblers">  
                        </div> 

                        <div class="form-group ">
                            5-Day<input type="number" class='form-control' name="5_day_Wobblers">  
                        </div> 

                        <button type="submit" name="update_Wobblers" class="btn btn-primary">Update</button>

                    </form>

                    <?php
                        //if the Update button is clicked

                        if($_SERVER['REQUEST_METHOD']=="GET"){

                            if(isset($_GET['update_Wobblers'])){

                                $errors=array();

    
                                //getting form input value and storing each in given variable names
                                $halfDay=$_GET['half_day_Wobblers'];  
                                if(empty($halfDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($halfDay)){
                                        $errors[]="half day music be in numeric value";
                                    }
                                }

                                $fullDay=$_GET['full_day_Wobblers']; 
                                if(empty($fullDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fullDay)){
                                        $errors[]="full day music be in numeric value";
                                    }
                                } 

                                $oneDay=$_GET['1_day_Wobblers'];
                                if(empty($oneDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($oneDay)){
                                        $errors[]="one day music be in numeric value";
                                    }
                                }   

                                $threeDay=$_GET['3_day_Wobblers']; 
                                if(empty($threeDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($threeDay)){
                                        $errors[]="three day music be in numeric value";
                                    }
                                }   

                                $fiveDay=$_GET['5_day_Wobblers'];
                                if(empty($fiveDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fiveDay)){
                                        $errors[]="five day music be in numeric value";
                                    }
                                }

                                if(empty($errors)){
                                    require('/home/**studentNumber**/db_connection/connect.php');
    
                                    $queryOne="UPDATE Fees SET Half_Day='$halfDay' WHERE Code='W1'";
                                    $resultOne=mysqli_query($db_connection,$queryOne);
                                    if($resultOne){
                                        echo "Half Day Updated To: "."€"."$halfDay";
                                    }
        
                                    $queryTwo="UPDATE Fees SET Full_Day='$fullDay' WHERE Code='W1'";
                                    $resultTwo=mysqli_query($db_connection,$queryTwo);
                                    if($resultTwo){
                                        echo "Full Day Updated To: "."€"."$fullDay";
                                    }
        
                                    $queryThree="UPDATE Fees SET 1_Day='$oneDay' WHERE Code='W1'";
                                    $resultThree=mysqli_query($db_connection,$queryThree);
                                    if($resultThree){
                                        echo "1 Day Updated To: "."€"."$oneDay";
                                    }
        
                                    $queryFour="UPDATE Fees SET 3_Day='$threeDay' WHERE Code='W1'";
                                    $resultFour=mysqli_query($db_connection,$queryFour);
                                    if($resultFour){
                                        echo "3 Day Updated To: "."€"."$threeDay";
                                    }
                                    
                                    $queryFive="UPDATE Fees SET 5_Day='$fiveDay' WHERE Code='W1'";
                                    $resultFive=mysqli_query($db_connection,$queryFive);
                                    if($resultFive){
                                        echo "5 Day Updated To: "."€"."$fiveDay";
                                    }

                                }else{
                                    echo "<h2>Error!</h2>";
                                    foreach($errors as $msg){
                                        echo $msg."<br>";
                                        echo '<a href="../Registration/registration_home.php">Registration Page</a>';
                                    }
                                }
                               
                               
                                       
                            }
    
                        }
                        
                    ?>


                </div>
                 
            </div>

            <div class="aside three">

                <div class="mx-auto" style="width:200px;">    
                
                    <form method="GET">

                        <div class="form-group ">
                            <h2>Toddlers</h2>
                            Half Day<input type="number" class='form-control' name="half_day_Toddlers">  
                        </div> 

                        <div class="form-group ">
                            Full Day<input type="number" class='form-control' name="full_day_Toddlers">  
                        </div> 

                        <div class="form-group ">
                            1-Day<input type="number" class='form-control' name="1_day_Toddlers">  
                        </div> 

                        <div class="form-group ">
                            3-Day<input type="number" class='form-control' name="3_day_Toddlers">  
                        </div> 

                        <div class="form-group ">
                            5-Day<input type="number" class='form-control' name="5_day_Toddlers">  
                        </div> 

                        <button type="submit" name="update_Toddlers" class="btn btn-primary">Update</button>

                    </form>

                    <?php
                        //if the Update button is clicked

                        if($_SERVER['REQUEST_METHOD']=="GET"){

                            if(isset($_GET['update_Toddlers'])){

                                $errors=array();

    
                                //getting form input value and storing each in given variable names
                                $halfDay=$_GET['half_day_Toddlers']; 
                                if(empty($halfDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($halfDay)){
                                        $errors[]="half day music be in numeric value";
                                    }
                                }

                                $fullDay=$_GET['full_day_Toddlers']; 
                                if(empty($fullDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fullDay)){
                                        $errors[]="full day music be in numeric value";
                                    }
                                } 

                                $oneDay=$_GET['1_day_Toddlers']; 
                                if(empty($oneDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($oneDay)){
                                        $errors[]="one day music be in numeric value";
                                    }
                                }  

                                $threeDay=$_GET['3_day_Toddlers'];  
                                if(empty($threeDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($threeDay)){
                                        $errors[]="three day music be in numeric value";
                                    }
                                }                       
                             
                                $fiveDay=$_GET['5_day_Toddlers'];
                                if(empty($fiveDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fiveDay)){
                                        $errors[]="five day music be in numeric value";
                                    }
                                }
                               
                                if(empty($errors)){
                                    require('/home/**studentNumber**/db_connection/connect.php');
    
                                    $queryOne="UPDATE Fees SET Half_Day='$halfDay' WHERE Code='T1'";
                                    $resultOne=mysqli_query($db_connection,$queryOne);
                                    if($resultOne){
                                        echo "Half Day Updated To: "."€"."$halfDay";
                                    }

                                    $queryTwo="UPDATE Fees SET Full_Day='$fullDay' WHERE Code='T1'";
                                    $resultTwo=mysqli_query($db_connection,$queryTwo);
                                    if($resultTwo){
                                        echo "Full Day Updated To: "."€"."$fullDay";
                                    }
        
                                    $queryThree="UPDATE Fees SET 1_Day='$oneDay' WHERE Code='T1'";
                                    $resultThree=mysqli_query($db_connection,$queryThree);
                                    if($resultThree){
                                        echo "1 Day Updated To: "."€"."$oneDay";
                                    }
        
                                    $queryFour="UPDATE Fees SET 3_Day='$threeDay' WHERE Code='T1'";
                                    $resultFour=mysqli_query($db_connection,$queryFour);
                                    if($resultFour){
                                        echo "3 Day Updated To: "."€"."$threeDay";
                                    }
        
                                    $queryFive="UPDATE Fees SET 5_Day='$fiveDay' WHERE Code='T1'";
                                    $resultFive=mysqli_query($db_connection,$queryFive);
                                    if($resultFive){
                                        echo "5 Day Updated To: "."€"."$fiveDay";
                                    }

                                }else{
                                    echo "<h2>Error!</h2>";
                                    foreach($errors as $msg){
                                        echo $msg."<br>";
                                        echo '<a href="../index.html">Home Page</a>';
                                    }
                                }
                               
                                       
                            }
    

                        }
                        
                    ?>



                </div>
                 
            </div>

            <div class="aside four">

                <div class="mx-auto" style="width:200px;">     

                    <form method="GET">

                        <div class="form-group ">
                            <h2>Pre-School</h2>
                            Half Day<input type="number" class='form-control' name="half_day_School">  
                        </div> 

                        <div class="form-group ">
                            Full Day<input type="number" class='form-control' name="full_day_School">  
                        </div> 

                        <div class="form-group ">
                            1-Day<input type="number" class='form-control' name="1_day_School">  
                        </div> 

                        <div class="form-group ">
                            3-Day<input type="number" class='form-control' name="3_day_School">  
                        </div> 

                        <div class="form-group ">
                            5-Day<input type="number" class='form-control' name="5_day_School">  
                        </div> 

                        <button type="submit" name="update_Schools" class="btn btn-primary">Update</button>

                    </form>

                    <?php
                        //if the Update button is clicked

                        if($_SERVER['REQUEST_METHOD']=="GET"){

                            if(isset($_GET['update_Schools'])){

                                $errors=array();

    
                                //getting form input value and storing each in given variable names
                                $halfDay=$_GET['half_day_School'];  
                                if(empty($halfDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($halfDay)){
                                        $errors[]="half day music be in numeric value";
                                    }
                                } 

                                $fullDay=$_GET['full_day_School']; 
                                if(empty($fullDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fullDay)){
                                        $errors[]="full day music be in numeric value";
                                    }
                                }  

                                $oneDay=$_GET['1_day_School'];
                                if(empty($oneDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($oneDay)){
                                        $errors[]="one day music be in numeric value";
                                    }
                                }   

                                $threeDay=$_GET['3_day_School'];
                                if(empty($threeDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($threeDay)){
                                        $errors[]="three day music be in numeric value";
                                    }
                                } 

                                $fiveDay=$_GET['5_day_School'];
                                if(empty($fiveDay)){
                                    //if empty the database will be as it is
                                } else {
                                    if(!is_numeric($fiveDay)){
                                        $errors[]="five day music be in numeric value";
                                    }
                                }

                                if(empty($errors)){
                                    require('/home/**studentNumber**/db_connection/connect.php');
        
                                    $queryOne="UPDATE Fees SET Half_Day='$halfDay' WHERE Code='P1'";
                                    $resultOne=mysqli_query($db_connection,$queryOne);
                                    if($resultOne){
                                        echo "Half Day Updated To: "."€"."$halfDay";
                                    }
        
                                    $queryTwo="UPDATE Fees SET Full_Day='$fullDay' WHERE Code='P1'";
                                    $resultTwo=mysqli_query($db_connection,$queryTwo);
                                    if($resultTwo){
                                        echo "Full Day Updated To: "."€"."$fullDay";
                                    }

                                    $queryThree="UPDATE Fees SET 1_Day='$oneDay' WHERE Code='P1'";
                                    $resultThree=mysqli_query($db_connection,$queryThree);
                                    if($resultThree){
                                        echo "1 Day Updated To: "."€"."$oneDay";
                                    }
        
                                    $queryFour="UPDATE Fees SET 3_Day='$threeDay' WHERE Code='P1'";
                                    $resultFour=mysqli_query($db_connection,$queryFour);
                                    if($resultFour){
                                        echo "3 Day Updated To: "."€"."$threeDay";
                                    }

                                    $queryFive="UPDATE Fees SET 5_Day='$fiveDay' WHERE Code='P1'";
                                    $resultFive=mysqli_query($db_connection,$queryFive);
                                    if($resultFive){
                                        echo "5 Day Updated To: "."€"."$fiveDay";
                                    }
                                    
                                }else{
                                    echo "<h2>Error!</h2>";
                                    foreach($errors as $msg){
                                        echo $msg."<br>";
                                        echo '<a href="../index.html">Home Page</a>';
                                    }
                                }
                               
                                
                                       
                            }
    

                        }
                        
                    ?>



                </div>
 
            </div>
            

        </form>

        </aside>
    
    
    </body>

</html>