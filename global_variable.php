<?php

if(!isset($_SESSION['log-in'])&& !isset($_SESSION['adminLog'])){
    $login = 0;
}
else{
    $login = 1;
}
if(!isset($_SESSION['adminLog'])){
    $admin = 0;
}
else{
    $admin = 1;
}
?>
