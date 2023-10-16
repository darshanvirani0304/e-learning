<?php

    include "connection.php";
    
    $sql = "CREATE TABLE `e-learning` . `signup` (
        `id` INT(11) NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(255) NOT NULL , 
        `email` VARCHAR(255) NOT NULL , 
        `password` VARCHAR(128) NOT NULL , 
        `phone_no` VARCHAR(20) NOT NULL , 
        PRIMARY KEY (`id`))";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Table Successfully Created";
    }
    else{
        die("Table is Not Created" . mysqli_error($con));
    }

?>