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

    $sql = "SELECT * FROM pass WHERE username = '$username' AND password = '$password'";

    $result = $mysqli->query($sql);

    if($result && $result->num_rows > 0) {
        echo "<span>Login successful</span>";
        exit();
    }
    else {
        echo "<span>Invalid username or password</span>";
    }

    // $mysqli->close();
?>