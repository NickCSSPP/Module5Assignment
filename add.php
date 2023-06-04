<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshoelist";

     //Create Connection
     $conn = new mysqli($servername, $username, $password, $database);

     //Validate Connection
     if($conn->connect_error) {
         die("Connection Invalid: " . $conn->$connect_error);
     }

    $sql = "INSERT INTO styles (id,cat_id,style_name)
            VALUES(7, 2, 'Adidas Limited')";
    
    if($conn->query($sql) === TRUE) {
        echo "Successfully added a new style";
    } else {
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>