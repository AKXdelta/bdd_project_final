<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Requête SQL sécurisée pour éviter injection SQL
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $success = "Message envoyé avec succès !";
    } else {
        $error = "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
