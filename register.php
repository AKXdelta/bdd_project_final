<?php
include "config.php";

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments 
(first_name, last_name, date, time, phone, message)
VALUES ('$first', '$last', '$date', '$time', '$phone', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Rendez-vous enregistré avec succès";
} else {
  echo "Erreur";
}
?>
