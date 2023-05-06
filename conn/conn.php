<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sales-order-db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        // echo "successful";
        die("connection issue: " . mysqli_connect_error());
    // }else {
    //     die("connection issue: " . mysqli_connect_error());
         }

?>