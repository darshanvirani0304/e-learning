<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $con = mysqli_connect($servername, $username, $password);
    // if(!$con){
    //     die("Connection Failure" . mysqli_connect_error());
    // }
    // else{
    //     echo "Connected Successfully";
    // }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e-learning";

    $con = mysqli_connect($servername, $username, $password, $database);
    
    if(!$con){
        die("Connection Failure" . mysqli_connect_error());
    }
    // else{
    //     echo "Connected Successfully";
    // }

?>