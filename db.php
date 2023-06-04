<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshoelist";

    //Create Connection
    $conn = new mysqli($servername, $username, $password);

    //Validate Connection
    if($conn->connect_error) {
        die("Connection Invalid: " . $conn->$connect_error);
    }
        echo "Connected Successfully";
?>