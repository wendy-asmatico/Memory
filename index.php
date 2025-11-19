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
    <link rel="stylesheet" href="./assets/modal.css">
    <link href="https://db.onlinewebfonts.com/c/7200c6dd8ac604abe09f5159e53a40c0?family=Mark+Pro" rel="stylesheet"
        type="text/css" />
    <link rel="icon" href="./assets/img/icon/favicon_38.png" type="image/x-icon">

    
</head>
<body>
    <header>
            <nav class="nav-bar">
        <ul>
            <li><a href="classement.php">&#127942; Classement</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section class="banniere">
            <img src="./assets/img/Memory_logo.png" alt="Logo du site" class="logo">
        </section>

<section class="regle">
    <!-- Règles du jeu -->
    <section class="regles-jeu">
        <h2>Règles du jeu <img width="50" height="50" src="https://img.icons8.com/office/80/goal--v1.png" alt="goal--v1"/></h2>
        <p>Bienvenue sur notre jeu de mémoire ! Le but est de retrouver toutes les paires de cartes identiques en un minimum de temps. Cliquez sur deux cartes pour les retourner. Si elles correspondent, elles restent visibles. Sinon, elles se retournent à nouveau. Bonne chance !</p>
    </section>

    <!-- Instructions -->
    <section class="instructions">
        <h3>Instructions :</h3>
        <section class="etapes-container">
            <div class="etape-card">
                <h3>ÉTAPE 1</h3>
                <p>Cliquez sur une carte pour la retourner</p>
                <img src="https://img.icons8.com/ios/200/000000/flip-vertical.png" alt="Flip Icon">
            </div>

            <div class="etape-card">
                <h3>ÉTAPE 2</h3>
                <p>Essayez de mémoriser l'emplacement des cartes</p>
                <img src="https://img.icons8.com/ios/200/000000/brain.png" alt="Brain Icon">
            </div>

            <div class="etape-card">
                <h3>ÉTAPE 3</h3>
                <p>Retrouvez toutes les paires pour gagner</p>
                <img src="https://img.icons8.com/ios/200/000000/trophy.png" alt="Trophy Icon">
            </div>
        </section>
    </section>

    <!-- Choix du niveau de difficulté -->
    <h3 class="instructions">Choisissez votre niveau de difficulté et les éléments :</h3>
    <section class="niveaux_cartes">
        <div class="etape-card">
            <h3>NIVEAU 1 : Les MAPS</h3>
            <p>24 cartes — 12 paires</p>
            <img src="https://img.icons8.com/ios/200/000000/map.png" alt="Icône map">
        </div>

        <div class="etape-card">
            <h3>NIVEAU 2 : Les ARMES</h3>
            <p>36 cartes — 18 paires</p>
            <img src="https://img.icons8.com/ios/200/000000/assault-rifle.png" alt="Icône arme">
        </div>

        <div class="etape-card">
            <h3>NIVEAU 3 : Les AGENTS</h3>
            <p>54 cartes — 27 paires</p>
            <img src="https://img.icons8.com/ios/200/000000/user-shield.png" alt="Icône agent">
        </div>
    </section>
</section>


</section>

</div>
        
        <?php if ($connexion === true): ?>
            <section class="welcome-message">
                <div class="user-info">
                <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
                <a href="./fonction/deconnexion.php" class="logout-button"><img src="./assets/img/icon/logout.png" class="icon_deco"></a>
                </div>
                <button id="btn" class="btn"><img src="./assets/img/play.png" alt="logo play" class="img_button"></button>

    <div id="myModal" class="modal">
            <div class="modal-content">
                <span id="close" class="close">&times;</span>
                <section class="start-game">
                <h3 class="titre_partie">Commencer une partie</h3>
                <p>Choisissez un niveau de difficulté et lancez le jeu !</p>
            
                <form action="game.php" method="get" class="select-level-form">
                    <label for="level">Niveau de difficulté :</label>
                    <select id="level" name="level" required>
                        <option value="1">Niveau 1 - Maps</option>
                        <option value="2">Niveau 2 - Armes</option>
                        <option value="3">Niveau 3 - Agents</option>
                    </select>
                    <button type="submit" class="enregistrer">Démarrer le jeu</button>
                </form>
            </section>
</div>
            
        <?php else: ?>
                <section class="modal-section">
        <button id="btn" class="btn"><img src="./assets/img/play.png" alt="logo play" class="img_button"></button>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span id="close" class="close">&times;</span>
                <section class="welcome-message">
                <p>Veuillez vous inscrire ou vous connecter pour commencer à jouer et enregistrer vos scores.</p>
            </section>
            <section class="inscription">
            <h2>Inscription</h2>
            <form action="./fonction/register.php" method="post" class="form">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" value="S'inscrire" class="form_btn">S'inscrire</button>
            </form>
        </section>
        <section class="connexion">
            <h2>Connexion</h2>
                <form action="./fonction/login.php" method="post" class="form">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" value="Se connecter" class="form_btn">Se connecter</button>
            </form>
</div>
</section>
            
        <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 - Memory Card - Valorant est une marque déposée de Riot Games, Inc.
Ce site n’est pas affilié, soutenu ou approuvé par Riot Games.</p>
    </footer>

    <script>
        // Récupération des éléments
var modal = document.getElementById("myModal");
var btn = document.getElementById("btn");
var span = document.getElementById("close");

// Ouvrir la modal au clic sur le bouton
btn.onclick = function() {
  modal.style.display = "block";
}

// Fermer la modal au clic sur la croix
span.onclick = function() {
  modal.style.display = "none";
}

// Fermer la modal si clic en dehors du contenu
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>