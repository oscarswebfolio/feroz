<?php

    $host = "localhost";
    $username = "boothbng_bootybodyyouth";
    $password = "BBY1993x)";
    $DBname = "boothbng_ad";

    $DBconnect = new mysqli($host, $username, $password, $DBname);

    if ($DBconnect->connect_error) {
        die("Connection Failed" . $DBconnect_connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
  

    $sql = "INSERT INTO ad (name, email, phone, type)
    VALUES ('$name', '$email', '$phone', '$type')";

    $results = mysqli_query($DBconnect, $sql);

    if (!$results) {
        die('Query not sent');
    }
    header("Location: thanks.php");
?>