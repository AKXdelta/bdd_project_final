<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifie que chaque champ existe
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if ($email == '') {
        die("Erreur : le champ email est vide !");
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: contact.php");
    exit();
}
?>

