<?php
    require('/home/**StudentNumber**/public_html/ass03/header.php');
    require('/home/**StudentNumber**/db_connection/connect.php');

require('/home/**studentNumber/public_html/ass03/global_variable.php');
if($admin == 0){
    header("location:index.php");
}

$query="SELECT * FROM Contact_Us";
$result = mysqli_query($db_connection, $query); // run query


    echo "<p>Contact Us Details"."<br>";
    echo "<br>";
    $counter=1;
    while($row=mysqli_fetch_array($result)){
        echo "Detail Number: $counter"."<br>";
        echo "ID: $row[0]"."<br>";
        echo "<b>Email</b>: "."$row[1]"."<br>";
        echo "<b>Name</b>: "."$row[2]"."<br>";
        echo "<b>Phone Number</b>: "."$row[3]"."<br>";
        echo "<b>Messages</b>: "."$row[4]"."<br>";
        $counter++;
        echo "<br>";
    }

?>