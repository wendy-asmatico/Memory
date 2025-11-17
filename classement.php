<?php

session_start();
require_once './fonction/classement.php';


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://db.onlinewebfonts.com/c/7200c6dd8ac604abe09f5159e53a40c0?family=Mark+Pro" rel="stylesheet"
        type="text/css" />
    <link rel="icon" href="./assets/img/icon/favicon_38.png" type="image/x-icon">
</head>
<body>
    <header>
            <nav>
        <ul> 
            <li><a href="index.php">Accueil</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section class="banniere">
            <img src="./assets/img/Memory_logo.png" alt="Logo du site" class="logo">
        </section>
        <section class="classement">
            <h2>Classement des Scores</h2>
            <?php

            if ($scores) {
                echo "<table>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Niveau</th>
                            <th>Temps (secondes)</th>
                        </tr>";
                foreach ($scores as $score) {
                    echo "<tr>
                            <td>" . htmlspecialchars($score['username']) . "</td>
                            <td>" . htmlspecialchars($score['level']) . "</td>
                            <td>" . htmlspecialchars($score['time']) . "</td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Aucun score enregistré pour le moment.</p>";
            }
            ?>
