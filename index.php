<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $connexion = true;
} else {
    $connexion = false;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://db.onlinewebfonts.com/c/7200c6dd8ac604abe09f5159e53a40c0?family=Mark+Pro" rel="stylesheet"
        type="text/css" />
    <link rel="icon" href="./assets/img/icon/favicon_38.png" type="image/x-icon">

    
</head>
<body>
    <header>
            <nav>
        <ul> 
            <li><a href="index.php">Classement</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section class="banniere">
            <img src="./assets/img/Memory_logo.png" alt="Logo du site" class="logo">
        </section>

        <section class="regle">
            <h2>Règles du jeu</h2>
            <p>Bienvenue sur notre jeu de mémoire ! Le but est de retrouver toutes les paires de cartes identiques en un minimum de temps. Cliquez sur deux cartes pour les retourner. Si elles correspondent, elles restent visibles. Sinon, elles se retournent à nouveau. Bonne chance !</p>
            <h3>Instructions :</h3>
            <ul>
                <li>Cliquez sur une carte pour la retourner.</li>
                <li>Essayez de mémoriser l'emplacement des cartes.</li>
                <li>Retrouvez toutes les paires pour gagner.</li>
            </ul> 
            <h3>3 niveaux de jeu: </h3>
            <ul>
                <li>Niveau 1 : 24 cartes (12 paires)</li>
                <li>Niveau 2 : 36 cartes (18 paires)</li>
                <li>Niveau 3 : 54 cartes (27 paires)</li>
            </ul>
        </section>

        <?php if ($connexion === true): ?>
            <section class="welcome-message">
                <div class="user-info">
                <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
                <a href="./fonction/deconnexion.php" class="logout-button">Se déconnecter</a>
                </div>
                <p>Vous êtes connecté. Prêt à jouer ?</p>

            <section class="start-game">
                <h2>Commencer une partie</h2>
                <p>Choisissez un niveau de difficulté et lancez le jeu !</p>
                
                <form action="game.php" method="get">
                    <label for="level">Niveau de difficulté :</label>
                    <select id="level" name="level" required>
                        <option value="1">Niveau 1 - Maps</option>
                        <option value="2">Niveau 2 - Armes</option>
                        <option value="3">Niveau 3 - Agents</option>
                    </select>
                    <button type="submit" class="start-button">Démarrer le jeu</button>
                </form>
            </section>
        <?php else: ?>
            <section class="welcome-message">
                <h2>Bienvenue sur notre jeu de mémoire !</h2>
                <p>Veuillez vous inscrire ou vous connecter pour commencer à jouer et enregistrer vos scores.</p>
            </section>
            <section class="inscription">
            <h2>Inscription</h2>
            <p>Pour enregistrer votre score et apparaître dans le classement, veuillez vous inscrire avant de commencer une partie.</p>
            <form action="./fonction/register.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" value="S'inscrire" class="register-button">S'inscrire</button>
            </form>
        </section>
        <section class="connexion">
            <h2>Connexion</h2>
                <form action="./fonction/login.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" value="Se connecter" class="login-button">Se connecter</button>
            </form>
        <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Mon Site Web</p>
    </footer>
</body>
</html>