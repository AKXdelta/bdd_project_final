<?php

$host = "127.0.0.1";
$dbname = "reservation";
$username = "root";
$password = "";
$port = "3307"; // Mets ici le port correct de ton MySQL

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

    // Récupérer les données du formulaire
    $first_name = $_POST["first_name"];
    $last_name  = $_POST["last_name"];
    $area       = $_POST["area"];
    $street     = $_POST["street_address"];
    $apartment  = $_POST["apartment"];
    $phone      = $_POST["phone"];
    $email      = $_POST["email"];
    $payment    = $_POST["payment_method"];

    // Préparer la requête SQL avec placeholders
    $sql = "INSERT INTO billing_details
            (first_name, last_name, area, street_address, apartment, phone, email, payment_method)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    // Exécuter la requête avec les valeurs
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

    // Redirection après enregistrement
    header("Location: order-success.php");
    exit;
}
?>
