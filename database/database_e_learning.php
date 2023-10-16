<?php

    include "connection.php";

    $sql = "CREATE DATABASE `e-learning`";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "database Created";
    }
    else{
        die("Database not Created" . mysqli_error($con));
    }

?>