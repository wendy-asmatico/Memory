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
            <nav class="nav-bar">
        <ul> 
            <li><a href="index.php">&#127968; Accueil</a></li>
        </ul>
    </nav>
    </header>
    <main class="main-classement">
        <section class="banniere">
            <img src="./assets/img/Memory_logo.png" alt="Logo du site" class="logo">
        </section>

        <section class="mes_classement">
            <h2>Mon Classement</h2>
        
            <?php
                if (isset($_SESSION['user_id'])) {
                    $userId = $_SESSION['user_id'];
                    $userScores = getUserScores($db, $userId);

                    if (count($userScores) > 0) {
                        echo "<table>";
                        echo "<tr><th>Niveau</th><th>Temps</th></tr>";
                        foreach ($userScores as $score) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($score['level']) . "</td>";
                            echo "<td>" . htmlspecialchars(formatTime($score['time'])) . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "<p>Vous n'avez pas encore de scores enregistrés.</p>";
                    }
                } else {
                    echo "<p>Veuillez vous connecter pour voir votre classement.</p>";
                }
            ?>
        </section>
        
        <section class="classement">
            <h2>Classement des Scores</h2>
                <h3>Niveau 3</h3>
                <table>
                    <tr>
                        <th>Position</th>
                        <th>Nom d'utilisateur</th>
                        <th>Temps</th>
                    </tr>
                    <?php
                    $position = 1;
                    foreach ($scores3 as $score) {
                        echo "<tr>";
                        echo "<td>" . $position . "</td>";
                        echo "<td>" . htmlspecialchars($score['username']) . "</td>";
                        echo "<td>" . htmlspecialchars(formatTime($score['time'])) . "</td>";
                        echo "</tr>";
                        $position++;
                    }
                    ?>
                </table>
                <h3>Niveau 2</h3>
                <table>
                    <tr>
                        <th>Position</th>
                        <th>Nom d'utilisateur</th>
                        <th>Temps</th>
                    </tr>
                <?php
                    $position2 = 1;
                    foreach ($scores2 as $score) {
                        echo "<tr>";
                        echo "<td>" . $position2 . "</td>";
                        echo "<td>" . htmlspecialchars($score['username']) . "</td>";
                        echo "<td>" . htmlspecialchars(formatTime($score['time'])) . "</td>";
                        echo "</tr>";
                        $position2++;
                    }
                    ?>
                </table>
                <h3>Niveau 1</h3>
                <table>
                    <tr>
                        <th>Position</th>
                        <th>Nom d'utilisateur</th>
                        <th>Temps</th>
                    </tr>
                <?php
                    $position3 = 1;
                    foreach ($scores1 as $score) {
                        echo "<tr>";
                        echo "<td>" . $position3 . "</td>";
                        echo "<td>" . htmlspecialchars($score['username']) . "</td>";
                        echo "<td>" . htmlspecialchars(formatTime($score['time'])) . "</td>";
                        echo "</tr>";
                        $position3++;
                    }
                    ?>
                </table>
        </section>
    </main>
    <footer>
<p>&copy; 2025 - Memory Card - Valorant est une marque déposée de Riot Games, Inc.
Ce site n’est pas affilié, soutenu ou approuvé par Riot Games.</p>
    </footer>
</body>
</html>
