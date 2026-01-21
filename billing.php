<?php

$host = "127.0.0.1";
$dbname = "reservation";
$username = "root";
$password = "";
$port = "3307"; 

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first_name = $_POST["first_name"];
    $last_name  = $_POST["last_name"];
    $area       = $_POST["area"];
    $street     = $_POST["street_address"];
    $apartment  = $_POST["apartment"];
    $phone      = $_POST["phone"];
    $email      = $_POST["email"];
    $payment    = $_POST["payment_method"];

    $sql = "INSERT INTO billing_details
            (first_name, last_name, area, street_address, apartment, phone, email, payment_method)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $first_name,
        $last_name,
        $area,
        $street,
        $apartment,
        $phone,
        $email,
        $payment
    ]);

    header("Location: order-success.php");
    exit;
}
?>
