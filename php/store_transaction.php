<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $upiId = $_GET['upiId'];
    $amount = $_GET['amount'];
    $msg = $_GET['message'];

    $host = 'localhost';
    $username = 'guru';
    $password = '123';
    $database = 'transactions_db';

    $mysqli = new mysqli($host, $username, $password, $database);

    $query = "INSERT INTO t_data (upiid, amount, msg) VALUES ('$upiId', $amount, '$msg')";

    if ($mysqli->query($query) === true) {
        echo "Payment successful! Transaction stored in the database successfully.";
    } else {
        echo "Error storing transaction: " . $mysqli->error;
    }

    $mysqli->close();
}
?>
