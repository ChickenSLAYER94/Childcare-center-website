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

        <?php
             require('/home/**studentNumber**/public_html/ass03/header.php');
        ?>
        
        <div class="main">

            <div class="form">
                <form action="registration.php" method="POST">    
                    <!-- styling to make the form in the center -->
                    <div class="mx-auto" style="width: 600px;" id="main">
    
                        <div class="row justify-content-center">
                            <header>
                                <h2>Register</h2>
                            </header>
                        </div>
                        
                        <div class="form-group">
                            <label for="fullName">Parents Full Name *</label>
                            <input type="text" class="form-control" name="fullName" required>
                        </div>

                        <div class="form-group">
                            <label for="fullName">Child Full Name *</label>
                            <input type="text" class="form-control" name="childName" required>
                        </div>
    
                        <div class="form-group">
                            <label for="category">Choose a category of your children</label>
                            <select class="form-control" name="category">
                                <option selected disabled></option>
                                <option value="Babies">Babies</option>
                                <option value="Wobblers">Wobblers</option>
                                <option value="Toddlers">Toddlers</option>
                                <option value="Pre-School">Pre-School</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <p>Choose the length of care</p>
                            <input class="form-group" type="radio" name="length" value="Half Day">
                            <label for="length">Half Day</label><br>
                            <input class="form-group" type="radio" name="length" value="Full Day">
                            <label for="length">Full Day</label><br>
                            <input class="form-group" type="radio" name="length" value="1 Day">
                            <label for="length">1 Day</label><br>
                            <input class="form-group" type="radio" name="length" value="3 Day">
                            <label for="length">3 Day</label><br>
                            <input class="form-group" type="radio" name="length" value="5 Day">
                            <label for="length">5 Day</label>
                        </div>
    
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
    
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" class="form-control" name="password" minlength="7" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="Enter at least one upper/lowercase letter,one digit and 8 or more characters"> 
                        </div>
    
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
    
                    </div>
                </form>
    
            </div>

            <header id="main_header">
                <p>Childcare is the care and <br>supervision of a child or multiple children at a time,<br> whose ages range from two weeks to twenty years. <br>Child care is a broad topic <br>that covers a wide spectrum of professionals, <br>institutions, contexts,activities,<br> and social and cultural conventions</p>
            </header>

        </div>

        <div id="aside_header">           
             <h1>Fee Structure Of Our Care</h1>
        </div>

        <aside>

            <div class="aside one">

                <!-- getting the database connection -->
                <?php
                    //getting database
                    require('/home/**studentNumber**/db_connection/connect.php');

                     //creating table to store the fees structure of all category
                    $sqlTable=" CREATE TABLE Fees(
                        Code VARCHAR(10) NOT NULL PRIMARY KEY,
                        Category TEXT,
                        Half_Day DOUBLE,
                        Full_Day DOUBLE,
                        1_Day DOUBLE,
                        3_Day DOUBLE,
                        5_Day DOUBLE
                    )";

                    $result=mysqli_query($db_connection,$sqlTable);

                    //code to store the babies fees structure
                    $babiesFee="INSERT INTO Fees VALUES('B1','Babies','20','30','40','80','120')";
                    $storeBabiesFee=@mysqli_query($db_connection,$babiesFee);

                    //code to store the wobblers fees structure
                    $wobblersFee="INSERT INTO Fees VALUES('W1','Wobblers','30','40','50','90','130')";
                    $storeWobblersFee=@mysqli_query($db_connection,$wobblersFee);

                    //code to store the Toddlers fees structure
                    $toddlersFee="INSERT INTO Fees VALUES('T1','Toddlerss','40','50','60','100','140')";
                    $storeToddlerssFee=@mysqli_query($db_connection,$toddlersFee);

                    //code to store the Pre-School fees structure
                    $preSchoolsFee="INSERT INTO Fees VALUES('P1','Pre-School','50','60','70','110','150')";
                    $storePreSchoolFee=@mysqli_query($db_connection,$preSchoolsFee);

                ?>

                <h1>Babies</h1>
                <h4>Half-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='B1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Half_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>Full-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='B1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Full_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>1-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='B1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['1_Day'];
                            }
                        }     
                    ?>

                </h4>
                
                <h4>3-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='B1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['3_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>5-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='B1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['5_Day'];
                            }
                        }     
                    ?>
                </h4>

            </div>

            <div class="aside two">
                
                <h1>Wobblers</h1>

                <h4>Half-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='W1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Half_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>Full-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='W1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Full_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>1-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='W1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['1_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>3-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='W1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['3_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>5-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='W1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['5_Day'];
                            }
                        }     
                    ?>
                
                </h4>

            </div>

            <div class="aside three">
                
                <h1>Toddlers</h1>
                <h4>Half-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='T1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Half_Day'];
                            }
                        }     
                    ?>  
                </h4>

                <h4>Full-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='T1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Full_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>1-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='T1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['1_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>3-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='T1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['3_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>5-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='T1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['5_Day'];
                            }
                        }     
                    ?>
                </h4>

            </div>

            <div class="aside four">

                <h1>Pre-School</h1>
                <h4>Half-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='P1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Half_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>Full-Day........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='P1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['Full_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>1-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='P1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['1_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>3-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='P1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['3_Day'];
                            }
                        }     
                    ?>
                </h4>

                <h4>5-Day...........
                    <?php 
                        $query="SELECT * FROM Fees WHERE Code='P1'";//select query
                        $result=mysqli_query($db_connection,$query);
                        //check the number of rows in fee table
                        $num=mysqli_num_rows($result);
                        if($num>0){//if there is a row
                            while($row=mysqli_fetch_array($result)){
                                echo "€".$row['5_Day'];
                            }
                        }     
                    ?>
                </h4>

            </div>


        </aside>

        <?php
            require('/home/**studentNumber**/public_html/ass03/Footer/footer.html');
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    </body>
</html>