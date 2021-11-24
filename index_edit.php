<?php
    require('/home/**StudentNumber**/public_html/ass03/header.php');
    require('/home/**StudentNumber**/public_html/ass03/global_variable.php');
    if($admin == 0){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Irish Child Care Center</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
   <body>
        
        <main>
           <div class="container">
            <div class="row col-md-6 col-md-offset-5">
                <div class="panel panel-primary">
                <div class="heading">
                    <h1>Change Index page</h1>
                </div>
                <form action="index_edit.php" id = "form-control" method="POST">
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 3-7 event one -->
                    <label>Change Child Info one header:</label><br>
                    <input type = "text" name = "ChangeChildHeaderOne" placeholder = "Add header for Age 3-7 event one" class="form-control" required/><br>

                    <!-- This is created to get content from user input for Age 3-7 event one -->
                    <label>Change Child Info one content:</label><br>
                    <textarea type="text" name="event1" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 3-7 event two -->
                    <label>Change Child Info two header:</label><br>
                    <input type = "text" name = "ChangeChildHeaderTwo" placeholder = "Add header for Age 3-7 event two" class="form-control" required/><br>
                    
                    <!-- This is created to get content from user input for Age 3-7 event two -->
                    <label>Change Child Info two header:</label><br>
                    <textarea type="text" name="event2" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>

                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 3-7 event three -->
                    <label>Change Child Info three header:</label><br>
                    <input type = "text" name = "ChangeChildHeaderThree" placeholder = "Add header for Age 3-7 event three" class="form-control" required/><br>
                    
                    <!-- This is created to get content from user input for Age 3-7 event three -->
                    <label>Change Child Info three content:</label><br>
                    <textarea type="text" name="event3" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>

                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 3-7 event four -->
                    <label>Change Child Info four header:</label><br>
                    <input type = "text" name = "ChangeChildHeaderFour" placeholder = "Add header for Age 3-7 event four" class="form-control" required/><br>
                    
                    <!-- This is created to get content from user input for Age 3-7 event four -->
                    <label>Change Child Info four content:</label><br>
                    <textarea type="text" name="event4" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 8-12 event one -->
                    <label>Change Teen Info one header:</label><br>
                    <input type = "text" name = "ChangeTeenHeaderOne" placeholder = "Add header for Age 8-12 event one" class="form-control" required/><br>
                    
                    <!-- This is created to get content from user input for Age 8-12 event one -->
                    <label>Change Teen Info one content:</label><br>
                    <textarea type="text" name="event5" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 8-12 event two -->
                    <label>Change Teen Info two header:</label><br>
                    <input type = "text" name = "ChangeTeenHeaderTwo" placeholder = "Add header for Age 8-12 event two" class="form-control" required/><br>

                        <!-- This is created to get content from user input for Age 8-12 event two -->
                    <label>Change Teen Info two content:</label><br>
                    <textarea type="text" name="event6" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 8-12 event three -->
                    <label>Change Teen Info three header:</label><br>
                    <input type = "text" name = "ChangeTeenHeaderThree" placeholder = "Add header for Age 8-12 event three" class="form-control" required/><br>

                        <!-- This is created to get content from user input for Age 8-12 event three -->
                    <label>Change Teen Info three content:</label><br>
                    <textarea type="text" name="event7" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br><br>
                </div>
                <div class="form-group">
                    <!-- This is created to get  header from  user input for Age 8-12 event four -->
                    <label>Change Teen Info four header:</label><br>
                    <input type = "text" name = "ChangeTeenHeaderFour" placeholder = "Add header for Age 8-12 event four" class="form-control" required/><br>

                        <!-- This is created to get content from user input for Age 8-12 event four -->
                    <label>Change Teen Info four content:</label><br>
                    <textarea type="text" name="event8" placeholder="Add content (limit 256 characters)" rows="4" class="form-control" required></textarea>
                    <br>
                </div>

                <div class="btn btn-primary">
                    <!-- making text of the button white in color -->
                    <button type="submit" name="RegisterCar" class="btn" style="color:#fff">Update </button> 
                </div>
                <br><br>
                </form>
                </div>
            </div>
        </div> 
        </main>
        <?php

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if (isset($_POST['RegisterCar'])) {
                    // echo $_POST['RegisterCar'];
                $errors = array();
                
                
                // $event1 = trim($_POST['event1']);

                //validating first event header
                if(empty($_POST['ChangeChildHeaderOne'])) {
                    $errors[] = 'Age 3-7 event one header is required.'; // if name is required
                    } else {
                        $ChangeChildHeaderOne = trim($_POST['ChangeChildHeaderOne']); 
                        $ChangeChildHeaderOne = stripslashes($ChangeChildHeaderOne);
                        $ChangeChildHeaderOne = htmlspecialchars($ChangeChildHeaderOne);
                    }

                //validating first event content
                if(empty($_POST['event1'])) {
                    $errors[] = 'Age 3-7 event one content is required.'; // if name is required
                    } else {
                        $event1 = trim($_POST['event1']); 
                        $event1 = stripslashes($event1);
                        $event1 = htmlspecialchars($event1);
                    }

                //validating second event header
                if(empty($_POST['ChangeChildHeaderTwo'])) {
                    $errors[] = 'Age 3-7 event two header is required.'; // if name is required
                    } else {
                        $ChangeChildHeaderTwo = trim($_POST['ChangeChildHeaderTwo']); 
                        $ChangeChildHeaderTwo = stripslashes($ChangeChildHeaderTwo);
                        $ChangeChildHeaderTwo = htmlspecialchars($ChangeChildHeaderTwo);
                    }

                //validating second event content
                if(empty($_POST['event2'])) {
                    $errors[] = 'Age 3-7 event two content is required.'; // if name is required
                    } else {
                        $event2 = trim($_POST['event2']); 
                        $event2 = stripslashes($event2);
                        $event2 = htmlspecialchars($event2);
                    }

                //validating third event header
                if(empty($_POST['ChangeChildHeaderThree'])) {
                    $errors[] = 'Age 3-7 event three header is required.'; 
                    } else {
                        $ChangeChildHeaderThree = trim($_POST['ChangeChildHeaderThree']); 
                        $ChangeChildHeaderThree = stripslashes($ChangeChildHeaderThree);
                        $ChangeChildHeaderThree = htmlspecialchars($ChangeChildHeaderThree);
                    }

                //validating third event content
                if(empty($_POST['event3'])) {
                    $errors[] = 'Age 3-7 event three content is required.'; 
                    } else {
                        $event3 = trim($_POST['event3']); 
                        $event3 = stripslashes($event3);
                        $event3 = htmlspecialchars($event3);
                    }

                //validating four event header
                if(empty($_POST['ChangeChildHeaderFour'])) {
                    $errors[] = 'Age 3-7 event four header is required.'; 
                    } else {
                        $ChangeChildHeaderFour = trim($_POST['ChangeChildHeaderFour']); 
                        $ChangeChildHeaderFour = stripslashes($ChangeChildHeaderFour);
                        $ChangeChildHeaderFour = htmlspecialchars($ChangeChildHeaderFour);
                    }

                //validating four event content
                if(empty($_POST['event4'])) {
                    $errors[] = 'Age 3-7 event four content is required.'; 
                    } else {
                        $event4 = trim($_POST['event4']); 
                        $event4 = stripslashes($event4);
                        $event4 = htmlspecialchars($event4);
                    }

                //validating age 8-12 first event header
                if(empty($_POST['ChangeTeenHeaderOne'])) {
                    $errors[] = 'Age 8-12 event one header is required.'; 
                    } else {
                        $ChangeTeenHeaderOne = trim($_POST['ChangeTeenHeaderOne']); 
                        $ChangeTeenHeaderOne = stripslashes($ChangeTeenHeaderOne);
                        $ChangeTeenHeaderOne = htmlspecialchars($ChangeTeenHeaderOne);
                    }

                //validating age 8-12 first event content
                if(empty($_POST['event5'])) {
                    $errors[] = 'Age 8-12 event one content is required.'; 
                    } else {
                        $event5 = trim($_POST['event5']); 
                        $event5 = stripslashes($event5);
                        $event5 = htmlspecialchars($event5);
                    }

                //validating age 8-12 second event header
                if(empty($_POST['ChangeTeenHeaderTwo'])) {
                    $errors[] = 'Age 8-12 event two header is required.'; 
                    } else {
                        $ChangeTeenHeaderTwo = trim($_POST['ChangeTeenHeaderTwo']); 
                        $ChangeTeenHeaderTwo = stripslashes($ChangeTeenHeaderTwo);
                        $ChangeTeenHeaderTwo = htmlspecialchars($ChangeTeenHeaderTwo);
                    }

                //validating age 8-12 second event content
                if(empty($_POST['event6'])) {
                    $errors[] = 'Age 8-12 event two content is required.'; 
                    } else {
                        $event6 = trim($_POST['event6']); 
                        $event6 = stripslashes($event6);
                        $event6 = htmlspecialchars($event6);
                    }

                //validating age 8-12 third event header
                if(empty($_POST['ChangeTeenHeaderThree'])) {
                    $errors[] = 'Age 8-12 event three header is required.'; 
                    } else {
                        $ChangeTeenHeaderThree = trim($_POST['ChangeTeenHeaderThree']); 
                        $ChangeTeenHeaderThree = stripslashes($ChangeTeenHeaderThree);
                        $ChangeTeenHeaderThree = htmlspecialchars($ChangeTeenHeaderThree);
                    }

                //validating age 8-12 third event content
                if(empty($_POST['event7'])) {
                    $errors[] = 'Age 8-12 event three content is required.'; 
                    } else {
                        $event7 = trim($_POST['event7']); 
                        $event7 = stripslashes($event7);
                        $event7 = htmlspecialchars($event7);
                    }

                //validating age 8-12 fourth event header
                if(empty($_POST['ChangeTeenHeaderFour'])) {
                    $errors[] = 'Age 8-12 event four header is required.'; 
                    } else {
                        $ChangeTeenHeaderFour = trim($_POST['ChangeTeenHeaderFour']); 
                        $ChangeTeenHeaderFour = stripslashes($ChangeTeenHeaderFour);
                        $ChangeTeenHeaderFour = htmlspecialchars($ChangeTeenHeaderFour);
                    }

                //validating age 8-12 fourth event content
                if(empty($_POST['event8'])) {
                    $errors[] = 'Age 8-12 event four content is required.'; 
                    } else {
                        $event8 = trim($_POST['event8']); 
                        $event8 = stripslashes($event8);
                        $event8 = htmlspecialchars($event8);
                    }

                // randomly generated id
                $id = rand();
                    
                if (empty($errors)){
                    //initialize the connection
                    require('/home/**StudentNumber**/db_connection/connect.php');

                    //this will delete every thing in the EditIndex database at first after pressing update button 'btn'
                    $delQuery="DELETE FROM EditIndex";
                    $delDataEntry=mysqli_query($db_connection, $delQuery);

                    //add data in EditIndex table;
                    $query="INSERT INTO EditIndex (childInfoOne,childInfoTwo,childInfoThree,childInfoFour,teenInfoOne,teenInfoTwo,teenInfoThree,teenInfoFour,id) VALUES('$event1','$event2','$event3','$event4','$event5','$event6','$event7','$event8',$id);";
                    $dataEntry = mysqli_query($db_connection, $query);

                    //if successfully information added successfully to the server
                    if(!$dataEntry){
                        echo '<Strong>Content Should me less than 257 characters.</Strong>';
                        echo '<br>';
                    }
                    if(mysqli_num_rows($dataEntry)>0){
                        print "Input already exist";
                    }

                    //this will delete every thing in the EditIndexHeader database at first after pressing update button 'btn'
                    $delHeaderQuery="DELETE FROM EditIndexHeader";
                    $delHeaderDataEntry=mysqli_query($db_connection, $delHeaderQuery);

                    //After deletion this will add user input header to the EditIndexHeader
                    $queryHeader="INSERT INTO EditIndexHeader (childInfoheaderOne,childInfoheaderTwo,childInfoheaderThree,childInfoheaderFour,preTeenInfoheaderOne,preTeenInfoheaderTwo,preTeenInfoheaderThree,preTeenInfoheaderFour,id) VALUES('$ChangeChildHeaderOne','$ChangeChildHeaderTwo','$ChangeChildHeaderThree','$ChangeChildHeaderFour','$ChangeTeenHeaderOne','$ChangeTeenHeaderTwo','$ChangeTeenHeaderThree','$ChangeTeenHeaderFour',$id);";
                    $dataEntryHeader = mysqli_query($db_connection, $queryHeader);

                    if($dataEntryHeader){
                        echo '<Strong>Data has been added.</Strong>';
                    } else{
                        echo '<Strong>Invalid entry</Strong>';
                    }
                    if(mysqli_num_rows($dataEntryHeader)>0){
                        print "Input already exist";
                    }
                    //close the connection
                    mysqli_close($db_connection);
                }
            }
            }

        ?>

<!-- adding footer.html  -->
        <?php
            require('/home/**StudentNumber**/public_html/ass03/footer.html');
        ?>
    </body>
  </html>