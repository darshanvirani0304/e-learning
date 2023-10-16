<?php

    include "connection.php";

    $sql = "CREATE TABLE `e-learning`.`contact_us` (
        `id` INT(11) NOT NULL AUTO_INCREMENT , 
        `name` VARCHAR(255) NOT NULL , 
        `email` VARCHAR(255) NOT NULL , 
        `msg` TEXT NOT NULL , 
        PRIMARY KEY (`id`))";;

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Contect us Table Created";
    }
    else{
        die("Table is not Created");
    }

?>