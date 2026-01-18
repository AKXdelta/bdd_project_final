<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "reservation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $area       = $_POST['area'];
    $street     = $_POST['street_address'];
    $apartment  = $_POST['apartment'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];

    $sql = "INSERT INTO billing_details (first_name, last_name, area, street_address, apartment, phone, email)
            VALUES ('$first_name', '$last_name', '$area', '$street', '$apartment', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Billing details saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
