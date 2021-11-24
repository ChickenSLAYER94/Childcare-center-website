<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Day Care Child Center</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <header>
            <?php
                require('/home/**StudentNumber**/public_html/ass03/header.php');
            ?>  
        </header>
        <main>
            <div class ="mainImage">
                <div class="row col-md-6 col-md-offset-5">
                    <div class="masthead">
                        <h1>Child Details</h1>
                    </div>
                    <form action="day_details.php" id = "form-control" method="POST">
                        <div class ="includeAllForm">
                            <div class="form-group">
                            <label>Filter Time:</label><br>
                                <select name = "filterTime[]" class="form-control" >
                                    <option value = "">Choose time</option>
                                    <option value = "2 DAY">Last day</option>
                                    <option value = "1 WEEK">Week</option>
                                    <option value = "1 Month">Month</option>
                                </select>
                                </div>
                                <br> 

                            <div class="btn btn-primary">
                                <!-- making text of the button white in color -->
                                <button type="submit" name="searchBtn" class="btn" style="color:#fff">Search</button> 
                            </div>
                            <br><br> 

                                <div class="form-group">
                                    <label>Child Name:</label><br>
                                    <input type = "text" name = "childName" placeholder = "Full name" class="form-control"/>
                                    <br>
                                </div>

                                <div class="btn btn-primary">
                                <!-- making text of the button white in color -->
                                    <button type="submit" name="displayChildRecord" class="btn" style="color:#fff">Find</button> 
                                </div> 

                        </div>
                    </div>
                </form>
            </div>
        </div>
        </main>

        <table>
           
        
        <!-- this php code will initiate when filter time option is selected and 'searchBtn' button is pressed   -->
        <?php   
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                   if (isset($_POST['searchBtn'])) {
                    
                    //Validating text in filterTime input option in html code
                     foreach($_POST['filterTime'] as $filterTime){
                        if(!empty($_POST['filterTime'])) {
                                $filterTime = trim($filterTime);
                                $filterTime = stripslashes($filterTime);
                                $filterTime = htmlspecialchars($filterTime);      
                        }
                        else{
                            $errors[] = "Invalid Input."; //if the option is not selected 
                            }
                        }

                    if (empty($errors)) { // if no errors process input
                        require('/home/**StudentNumber**/db_connection/db_connection.php');

                        //this will check if the information is present or not in given amount of time
                        $query=  "SELECT * FROM dayDetailsEdit WHERE RecordDate > NOW() - INTERVAL $filterTime";
                        $dataEntry = mysqli_query($db_connection, $query);

                        // creating a list of heading and printing in the page 
                        echo"<tr>".
                                "<th>"."Child Name"."</th>".
                                "<th>". "Temperature"."</th>".
                                "<th>"."Breakfast"."</th>".
                                "<th>"."Lunch</th>".
                                "<th>"."Activities"."</th>".
                                "<th>"."Date"."</th>".
                            "</tr>";
                        //if search childName found it will print the data in the screen.
                        //here we are using while to get multiple data of related information
                        while ($row = mysqli_fetch_array($dataEntry))
                        {
                            echo "<tr><td>" .$row['ChildName']. "</td><td>" . $row['ChildTemperature']. "</td><td>" . $row['Breakfast']. "</td><td>" . $row['Lunch']. "</td><td>" . $row['Activities']. "</td><td>" . $row['RecordDate']. "</td></tr>";
                        }
                        echo "</tables>";

                        // if data base does not exit
                        if(!mysqli_num_rows($dataEntry)>0){
                            echo '<br>'.'<Strong>Data do not exist.</Strong>';
                        }
                        mysqli_close($db_connection);
                        }
                    }
                }

                ?>

        <!-- this php code will initiate when child name is given in the input box is  and 'displayChildRecord' button is pressed   -->
        <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    if (isset($_POST['displayChildRecord'])) {

                        //validating child name input
                        if(empty($_POST['childName'])) {
                            $errors[] = 'Record is required.'; // if name is required
                            } else {
                                $childName = trim($_POST['childName']); 
                                $childName = stripslashes($childName);
                                $childName = htmlspecialchars($childName);
                            }

                        if (empty($errors)) { // if no errors process input
                            require('/home/**StudentNumber**/db_connection/db_connection.php');

                            //this will check if the information is present or not for the given name
                            $query="SELECT ChildName,ChildTemperature,Breakfast,Lunch,Activities,RecordDate FROM dayDetailsEdit WHERE ChildName='$childName'";
                            $dataEntry = mysqli_query($db_connection, $query);
                            
                            echo"<tr>".
                                    "<th>"."Child Name"."</th>".
                                    "<th>". "Temperature"."</th>".
                                    "<th>"."Breakfast"."</th>".
                                    "<th>"."Lunch</th>".
                                    "<th>"."Activities"."</th>".
                                    "<th>"."Date"."</th>".
                                "</tr>";
                            //if search information found it will print the data in the screen.
                            //here we are using while to get multiple data of related information
                            while ($row = mysqli_fetch_array($dataEntry))
                            {
                                echo "<tr><td>" .$row['ChildName']. "</td><td>" . $row['ChildTemperature']. "</td><td>" . $row['Breakfast']. "</td><td>" . $row['Lunch']. "</td><td>" . $row['Activities']. "</td><td>" . $row['RecordDate']. "</td></tr>";
                            }
                                echo "</tables>";
                            
                            //If the data does not exist
                            if(!mysqli_num_rows($dataEntry)>0){
                                echo "<Strong>Data not found</Strong>";
                            }
                            // close the connection 
                            mysqli_close($db_connection);
                    
                            }
                        }
                    }

            ?>
        </table>
        <footer>
            <!-- adding footer.html  -->
            <?php
                require('/home/**StudentNumber**/public_html/Project/Footer/footer.html');
            ?>
        </footer>
    </body>
</html>   

