<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshoelist";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Validate Connection
    if($conn->connect_error) {
        die("Connection Invalid: " . $conn->connect_error);
    }

    $styleId = 5; 
    $newStyle = "Adidas Sport";

    $sql = "UPDATE styles SET style_name = '$newStyle' WHERE id = $styleId";

    if($conn->query($sql) === TRUE) {
        echo "Successfully updated the style";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
