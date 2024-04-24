<?php

    $dbcon = mysqli_connect('localhost','nodejs','1234','courierdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>