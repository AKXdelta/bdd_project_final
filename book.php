<?php

$host = "127.0.0.1";
$dbname = "reservation";
$username = "root";
$password = "";
$port="3307";

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
    $phone      = $_POST["phone"];
    $date       = $_POST["reservation_date"];
    $time       = $_POST["reservation_time"];
    $message    = $_POST["message"];

   
    $sql = "INSERT INTO reservations 
            (first_name, last_name, phone, reservation_date, reservation_time, message)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $first_name,
        $last_name,
        $phone,
        $date,
        $time,
        $message
    ]);

   header("Location: Enregistrement.php");
exit;

}
?>
