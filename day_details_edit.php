<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Day care child details edit</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
   <body>
        <header>
            <!-- adding header.php  -->
            <?php
                require('/home/**StudentNumber**/public_html/ass03/header.php');
            ?>
            <br> 
        </header>
        <main>
           <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                <div class="heading">
                    <h1>Child Details Entry/Edit</h1>
                </div>
                <form action="day_details_edit.php" id = "form-control" method="POST">
                <div class="form-group">
                    <label>Child Name:</label><br>
                    <input type = "text" name = "childName" placeholder = "Full name" class="form-control" required/>
                    <br>
                </div>
                <div class="form-group">
                    <label>Child temperature:</label><br>
                    <input type = "number" name = "childTemp" placeholder = "Child temperature" class="form-control" required/>
                    <br>
                </div>

                <div class="form-group">
                <label>Breakfast:</label><br>
                <select name = "Breakfast[]" class="form-control" required>
                    <option value = "">Select Breakfast</option>
                    <option value = "Milk, Whole Wheat Tortilla with PB and Banana">Milk, Whole Wheat Tortilla with PB and Banana</option>
                    <option value = "Milk, Yogert and Rasberries">Milk, Yogert and Rasberries</option>
                    <option value = "Milk, Life Cereal and Nectarines">Milk, Life Cereal and Nectarines</option> 
                    <option value = "Milk, Pancakes and Apple Slices">Milk, Pancakes and Apple Slices</option>  
                    <option value = "Milk, Scrambled Egg and Cantaloupe">Milk, Scrambled Egg and Cantaloupe</option>     
                </select>
                <br>
                </div>

                <div class="form-group">
                <label>Lunch:</label><br>
                <select name = "Lunch[]" class="form-control" required>
                    <option value = "">Select Lunch</option>
                    <option value = "Chicken Drumsticks, Mashed Potatoes, Green Beans, Apple Slices and Milk">Chicken Drumsticks, Mashed Potatoes, Green Beans, Apple Slices and Milk</option>
                    <option value = "Beef & Bean Burrito, Green Salad, Diced Peaches and Milk">Beef & Bean Burrito, Green Salad, Diced Peaches and Milk</option>
                    <option value = "Turkey sandwich (whole wheat bread), Carrot sticks, Baked potato wedges and Milk">Turkey sandwich (whole wheat bread), Carrot sticks, Baked potato wedges and Milk</option> 
                    <option value = "Canned tuna with light mayonnaise, Steamed carrots, banana, wheat crackers and Milk">Canned tuna with light mayonnaise, Steamed carrots, banana, wheat crackers and Milk</option>  
                    <option value = "Macaroni and Cheese, Yogurt, Peas and carrots, Tropical fruit salad and Milk">Macaroni and Cheese, Yogurt, Peas and carrots, Tropical fruit salad and Milk</option>     
                </select>
                <br>
                </div>

                <div class="form-group">
                <label>Activities:</label><br>
                <select name = "Activities[]" class="form-control" required>
                    <option value = "">Select Activities</option>
                    <option value = "Beach Colouring Pages">Beach Colouring Pages</option>
                    <option value = "Nature Paintbrushes">Nature Paintbrushes</option>
                    <option value = "Printable Postcards">Printable Postcards</option> 
                    <option value = "DIY Chalk Table">DIY Chalk Table</option>  
                    <option value = "10 Chocolate Popsicle Stick Recipes">10 Chocolate Popsicle Stick Recipes</option>     
                    <option value = "Handprint Fish">Handprint Fish</option>
                    <option value = "Water Pistol Painting">Water Pistol Painting</option>
                    <option value = "Bug Hunt">Bug Hunt</option> 
                    <option value = "Printable Fathers Day Cards">Printable Father's Day Cards</option>  
                </select>
                <br>
                </div>

                <div class="form-group">
                    <label>Date of record creation:</label><br>
                    <input type="date" name="recordCreation" class="form-control" placeholder="day details record creation" required> 
                    <br>
                </div>
              

                <div class="btn btn-primary">
                    <!-- making text of the button white in color -->
                    <button type="submit" name="addBtn" class="btn" style="color:#fff">Add Child details</button> 
                </div>
         

                <div class="btn btn-primary">
                    <!-- making text of the button white in color -->
                    <button type="submit" name="updateBtn" class="btn" style="color:#fff">Update Child details</button> 
                </div>


            <!-- This php code only runs when 'Add child details' button is pressed -->
             <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        if (isset($_POST['addBtn'])) {
                         
                        //creating an array which can holds all the errors
                        $errors = array();
                        
                        //validating child name input
                        if(empty($_POST['childName'])) {
                            $errors[] = 'Child name is required.'; // child name is required else array "error" store the 'child name is required in the array
                        } else {
                            $childName =  trim($_POST['childName']);
                            $childName = stripslashes($childName);
                            $childName = htmlspecialchars($childName); 
                        }

                        //validating child temperature input
                        if(!is_numeric($_POST['childTemp'])) {
                            $errors[] = 'Child name is required.'; // if child temperature is not present
                        } else {
                            $childTemp = $_POST['childTemp'];
                        }
                    
                        //validating Breakfast option
                        foreach($_POST['Breakfast'] as $Breakfast){
                            if(empty($_POST['Breakfast'])) {
                                $errors[] = 'Breakfast is required.'; // if breakfast is not present
                            } else {
                                $Breakfast = trim($Breakfast);
                                $Breakfast = stripslashes($Breakfast);
                                $Breakfast = htmlspecialchars($Breakfast); 
                            }
                        }
                        
                        //validating Lunch in the form
                        foreach($_POST['Lunch'] as $Lunch){
                            if(empty($_POST['Lunch'])) {
                                $errors[] = 'Lunch is required.'; // if lunch is not present
                            } else {
                                $Lunch = trim($Lunch);
                            }
                        }
                        
                        //validating Activities in the form
                        foreach($_POST['Activities'] as $Activities){
                            if(empty($_POST['Activities'])) {
                                $errors[] = 'Activities is required.'; // if activities is not given
                            } else {
                                $Activities = trim($Activities);
                                $Activities = stripslashes($Activities);
                                $Activities = htmlspecialchars($Activities); 
                            }
                        }

                        // validating date of record creation in the form 
                        if(empty($_POST['recordCreation'])) {
                            $errors[] = 'Date is required.'; // if date of record creation is not given
                        } else {
                            $recordCreation = $_POST['recordCreation'];      
                        }

                        if (empty($errors)){
                            //connect out php file to the server
                            require('/home/**StudentNumber**/db_connection/connect.php');
                    
                            //add data in data base;
                            $query="INSERT INTO dayDetailsEdit (ChildName,ChildTemperature,Breakfast,Lunch,Activities,RecordDate) VALUES('$childName','$childTemp','$Breakfast','$Lunch','$Activities','$recordCreation');";
                            $dataEntry = mysqli_query($db_connection, $query);

                            // if the table is found and query is processed
                            if($dataEntry){
                                echo '<br>'.'<Strong>Data has been added</Strong>';
                            } else{
                                echo '<br>'.'<Strong>Data already exist</Strong>';
                            }
                            if(mysqli_num_rows($dataEntry)>0){
                                print "Input already exist";
                            }

                            //close the database
                            mysqli_close($db_connection);
                        }
                    }
                    }

                ?>
              
                <!-- This php code only runs when 'Update Child details' button is pressed -->
                <?php
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            if (isset($_POST['updateBtn'])) {
                            
                            //creating an array which can holds all the errors
                            $errors = array();
                            
                         //validating child name input
                        if(empty($_POST['childName'])) {
                            $errors[] = 'Child name is required.'; 
                        } else {
                            $childName =  trim($_POST['childName']);
                            $childName = stripslashes($childName);
                            $childName = htmlspecialchars($childName); 
                        }

                        //validating child temperature input
                        if(!is_numeric($_POST['childTemp'])) {
                            $errors[] = 'Child name is required.'; 
                        } else {
                            $childTemp = $_POST['childTemp'];
                        }
                    
                        //validating Breakfast option
                        foreach($_POST['Breakfast'] as $Breakfast){
                            if(empty($_POST['Breakfast'])) {
                                $errors[] = 'Breakfast is required.';
                            } else {
                                $Breakfast = trim($Breakfast);
                                $Breakfast = stripslashes($Breakfast);
                                $Breakfast = htmlspecialchars($Breakfast); 
                            }
                        }
                        
                        //validating Lunch in the form
                        foreach($_POST['Lunch'] as $Lunch){
                            if(empty($_POST['Lunch'])) {
                                $errors[] = 'Lunch is required.'; 
                            } else {
                                $Lunch = trim($Lunch);
                            }
                        }
                        
                        //validating Activities in the form
                        foreach($_POST['Activities'] as $Activities){
                            if(empty($_POST['Activities'])) {
                                $errors[] = 'Activities is required.'; 
                            } else {
                                $Activities = trim($Activities);
                                $Activities = stripslashes($Activities);
                                $Activities = htmlspecialchars($Activities); 
                            }
                        }

                        // validating date of record creation in the form 
                        if(empty($_POST['recordCreation'])) {
                            $errors[] = 'Date is required.'; 
                        } else {
                            $recordCreation = $_POST['recordCreation'];      
                        }

                        

                        if (empty($errors)){
                            require('/home/**StudentNumber**/db_connection/connect.php');
                                                       
                            //mysql code to check if the given child data exist or not
                            $query="SELECT ChildName,ChildTemperature,Breakfast,Lunch,Activities,RecordDate FROM dayDetailsEdit WHERE ChildName='$childName' AND RecordDate='$recordCreation'";

                            $dataEntry = mysqli_query($db_connection, $query);

                            //if data found
                            if(mysqli_num_rows($dataEntry)>0){
                                //query to update the record according to child name and date record.
                                $querySecond = "UPDATE dayDetailsEdit SET ChildName='$childName', ChildTemperature='$childTemp', Breakfast='$Breakfast', Lunch='$Lunch', Activities='$Activities', RecordDate='$recordCreation'WHERE ChildName='$childName' AND RecordDate='$recordCreation'";
                                $dataEntrySecond = mysqli_query($db_connection, $querySecond);
                                echo '<br>'.'<Strong>Data updated.</Strong>';
                             } else{
                                //if data does not exist
                                echo '<br>'.'<Strong>Data do not exist.</Strong>';
                            }
                            //closing the connection
                            mysqli_close($db_connection);
                        }
                        }
                    }

                    ?>
                    <br><br>
                </form>
                </div>
            </div>
        </div> 
        </main>
        <footer>
            <!-- adding footer.html  -->
            <?php
                require('/home/**StudentNumber**/public_html/ass03/Footer/footer.html');
            ?>
        </footer>
    </body>
</html>

