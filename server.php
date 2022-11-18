<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "poll_system";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connect failed :" . $conn->connect_error);
    }
?>