<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifie que chaque champ existe
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    if ($email == '') {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    $stmt->execute(); 
    $stmt->close();
    $conn->close();
 header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();

} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

