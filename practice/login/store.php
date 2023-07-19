<?php
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "password";

    $mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    /*
    if($mysqli->connect_error) {
        die("Connection failed" . $mysqli->connect_error);
    }
    */

    $sql = "INSERT INTO pass(username, password) VALUES('$username', '$password')";

    $result = $mysqli->query($sql);

    if($result) {
        header("Location: home.php");
        exit();
    }
    else {
        echo $sql . "<br>" . $mysqli->error;
    }

    // $mysqli->close();
?>