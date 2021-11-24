<?php
    

    $db_connection=mysqli_connect('localhost','**studentNumber**','**password**','**studentNumber**');
    mysqli_set_charset($db_connection,'utf8');
    

    if(!$db_connection){
        die("Could not connect");
                
    }else{
        echo "Succesfull connections";
    }


?>