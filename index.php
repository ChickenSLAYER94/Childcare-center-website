
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="indexStyle.css">
    
    </head>
    <body>
        <div id = "container">
        <div class="All_Header_Details">               
            <header id = "masthead"> 
                <!-- added header.php  -->
                   <?php
                    require('/home/**StudentNumber**/public_html/ass03/header.php');
                ?>
            </header>
        </div>
            <main>
                <div id="allFeatureBox">
                    <div class="firstTitleImage">
                        <a href = "#"><img src="img/ChildCare.jpg" width="100%" alt="Child care center"></a>
                    </div>
                    <div id="informationBox">
                        <h2>From age 3-7</h2>
                        <div id="grid">
                            <header>
                                <h1>Events</h1>
                            </header>    
                            <div class="eventAll">
                                <div class="eventOne">
                                    <a href ="#"><img src="img/playkid.jpg" width="100%" alt="Children playing" ></a>
                                    <div class="eventOneText">
                                    <!-- retrive the data from EditIndexHeader database to get the header of first event(for age 3-7)  -->
                                        <h2><?php
                                            // initiate connection  
                                            require('/home/**studentNumber**/db_connection/db_connection.php');
                                            
                                            // checks for the data with this query 
                                            $query = "SELECT childInfoheaderOne from EditIndexHeader";
                                            $dataEntry = mysqli_query($db_connection, $query);

                                            // loop the table and print required information 
                                            while ($row = mysqli_fetch_array($dataEntry))
                                            {
                                                echo $row['childInfoheaderOne'];
                                            }
                                            //close connection
                                            mysqli_close($db_connection);
                                            ?>
                                        </h2>

                                        <!-- retrive the data from EditIndex database to get the content of first event(for age 3-7) -->    
                                        <p><?php
                                            require('/home/**studentNumber**/db_connection/db_connection.php');
                                            
                                            //check for data in EditIndex
                                            $query = "SELECT childInfoOne from EditIndex";
                                            $dataEntry = mysqli_query($db_connection, $query);
                                            
                                            // loop the table and print required information
                                            while ($row = mysqli_fetch_array($dataEntry))
                                            {
                                                echo $row['childInfoOne'];
                                            }

                                            //close connection
                                            mysqli_close($db_connection);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="eventTwo">
                                    <a href ="index.html"><img src="img/kidlaugh.jpg" width="100%" alt="children having fun" ></a>
                                    <div class="eventOneText">
                                        <!-- retrive the data from EditIndexHeader database to get the header of second event(for age 3-7) -->
                                        <h2><?php
                                            require('/home/**studentNumber**/db_connection/db_connection.php');
                                            
                                            //Check if the data is there or not.
                                            $query = "SELECT childInfoheaderTwo from EditIndexHeader";
                                            $dataEntry = mysqli_query($db_connection, $query);
                                            
                                            // loop the database and print required header
                                            while ($row = mysqli_fetch_array($dataEntry))
                                            {
                                                echo $row['childInfoheaderTwo'];
                                            }

                                            //close connection
                                            mysqli_close($db_connection);
                                            ?>
                                        </h2>
                                        
                                         <!-- retrive the data from EditIndex database to get the content of second event(for age 3-7) -->    
                                        <p><?php
                                            require('/home/**studentNumber**/db_connection/db_connection.php');
                                            
                                            //search for the content for the second event
                                            $query = "SELECT childInfoTwo from EditIndex";
                                            $dataEntry = mysqli_query($db_connection, $query);

                                            while ($row = mysqli_fetch_array($dataEntry))
                                            {
                                                echo $row['childInfoTwo'];
                                            }
                                            //close connection
                                            mysqli_close($db_connection);
                                            ?>
                                        </p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class = "extraActivities">
                                    <!-- retrive the data from EditIndexHeader database to get the header of third event (for age 3-7)-->
                                    <h4><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the header for the third event
                                        $query = "SELECT childInfoheaderThree from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['childInfoheaderThree'];
                                        }
                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </h4>

                                    <!-- retrive the data from EditIndex database to get the content of third event (for age 3-7)-->  
                                    <p><?php
                                        //initiate connection
                                        require('/home/**studentNumber**/db_connection/db_connection.php');

                                        //search for the content for the third event
                                        $query = "SELECT childInfoThree from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['childInfoThree'];
                                        }

                                        mysqli_close($db_connection);
                                         ?>
                                    </p>
                                    
                                    <!-- retrive the data from EditIndexHeader database to get the header of fourth event(for age 3-7) -->
                                    <h4><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the header for the fourth event
                                        $query = "SELECT childInfoheaderFour from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['childInfoheaderFour'];
                                        }

                                        mysqli_close($db_connection);
                                         ?>
                                    </h4>

                                    <!-- retrive the data from EditIndex database to get the content of fourth event(for age 3-7) -->  
                                    <p><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the content for the fourth event
                                        $query = "SELECT childInfoFour from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['childInfoFour'];
                                        }
                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </p>
                        </div>
                    </div>

                    <div id="informationBox2">
                        <h2>From age 8-12</h2>
                        <div id="grid">
                            <header>
                                <h1>Events</h1>
                            </header>
                        <div class="eventAll">
                            <div class="eventOne">
                                <a href ="#"><img src="img/child.jpg" width="100%" alt="Children playing" ></a>
                                <div class="eventOneText">
                                    <!-- retrive the data from EditIndexHeader database to get the header of first event(for age 8-12)  -->
                                    <h2><?php
                                        // initiate connection  
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        // checks for the data with this query 
                                        $query = "SELECT preTeenInfoheaderOne from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        // loop the table and print required information 
                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['preTeenInfoheaderOne'];
                                        }
                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </h2>

                                    <!-- retrive the data from EditIndex database to get the content of first event(for age 8-12) -->    
                                    <p><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //check for data in EditIndex
                                        $query = "SELECT teenInfoOne from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        // loop the table and print required information
                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['teenInfoOne'];
                                        }
                                        //close connection                                                                                                          
                                        mysqli_close($db_connection);
                                         ?>
                                    </p>  
                                </div>
                            </div>
                            <div class="eventTwo">
                                <a href ="#"><img src="img/kidwalk.jpg" width="100%" alt="kids running" ></a>
                                <div class="eventOneText">
                                    <!-- retrive the data from EditIndexHeader database to get the header of second event(for age 8-12) -->
                                    <h2><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //Check if the data is there or not.
                                        $query = "SELECT preTeenInfoheaderTwo from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        // loop the database and print required header
                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['preTeenInfoheaderTwo'];
                                        }
                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </h2>

                                    <!-- retrive the data from EditIndex database to get the content of second event(for age 8-12) -->    
                                    <p><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the content for the second event
                                        $query = "SELECT teenInfoTwo from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['teenInfoTwo'];
                                        }
                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class = "extraActivities">  
                                    <!-- retrive the data from EditIndexHeader database to get the header of third event(for age 8-12) -->                      
                                    <h4><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the header for the third event
                                        $query = "SELECT preTeenInfoheaderThree from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['preTeenInfoheaderThree'];
                                        }

                                        //close connection
                                        mysqli_close($db_connection);
                                         ?>
                                    </h4>

                                    <!-- retrive the data from EditIndex database to get the content of third event(for age 8-12) -->  
                                    <p><?php
                                        //initiate connection
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        //search for the content for the third event
                                        $query = "SELECT teenInfoThree from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['teenInfoThree'];
                                        }

                                        mysqli_close($db_connection);
                                         ?>
                                    </p>

                                    <!-- retrive the data from EditIndexHeader database to get the header of fourth event(for age 8-12) -->
                                    <h4><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');
                                        
                                        $query = "SELECT preTeenInfoheaderFour from EditIndexHeader";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['preTeenInfoheaderFour'];
                                        }

                                        mysqli_close($db_connection);
                                         ?>
                                    </h4>

                                    <!-- retrive the data from EditIndex database to get the content of fourth event(for age 8-12) -->  
                                    <p><?php
                                        require('/home/**studentNumber**/db_connection/db_connection.php');

                                        //search for the content for the fourth event
                                        $query = "SELECT teenInfoFour from EditIndex";
                                        $dataEntry = mysqli_query($db_connection, $query);

                                        while ($row = mysqli_fetch_array($dataEntry))
                                        {
                                            echo $row['teenInfoFour'];
                                        }

                                        mysqli_close($db_connection);
                                        ?>
                                    </p>
                            </div>
                    </div>
                </div>  
            </main>
            <!-- added header.html  -->
            <?php
                require('/home/**StudentNumber**/public_html/ass03/footer.html');
            ?>

    </body>
</html>
