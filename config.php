<?php
// Le 3ème paramètre (le mot de passe) doit être ""
$conn = mysqli_connect("localhost", "root", "", "bdd_project");

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
} else {
    echo "Succès ! Le serveur est de nouveau accessible.";
}
?>
