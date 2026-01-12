<?php
include "config.php"; // connexion à la DB

$sql = "SELECT * FROM bdd_project";  // récupère toutes les données
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Téléphone</th>
                <th>Message</th>
            </tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['first_name']."</td>
                <td>".$row['last_name']."</td>
                <td>".$row['date']."</td>
                <td>".$row['time']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['message']."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Aucune personne n'a rempli le formulaire pour l'instant.";
}
?>
