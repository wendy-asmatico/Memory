<?php
require_once './class/card.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$level = $_GET['level'] ?? 1;

switch ($level) {
    case 1:
        $cards = $cards_level1;
        break;
    case 2:
        $cards = $cards_level2;
        break;
    case 3:
        $cards = $cards_level3;
        break;
    default:
        $cards = $cards_level1;
}

$deck = array_merge($cards, $cards);
shuffle($deck);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jeu de Mémoire</title>
        <link rel="stylesheet" href="./assets/style.css">
        <link rel="stylesheet" href="./assets/jeu.css">
        <link href="https://db.onlinewebfonts.com/c/7200c6dd8ac604abe09f5159e53a40c0?family=Mark+Pro" rel="stylesheet"
            type="text/css" />
        <link rel="icon" href="./assets/img/icon/favicon_38.png" type="image/x-icon">
        <script src="./script.js" defer></script>
    </head>

    <body>
      <h1>Jeu de Mémoire - Niveau <?= htmlspecialchars($level) ?></h1>

<section class="game-area">
<div id="timer">00:00</div>

  <script src="./assets/js/timer.js"></script>

  <?php foreach ($deck as $index => $card): ?>
    <div class="card" data-index="<?= $index ?>" data-name="<?= htmlspecialchars($card->getName()) ?>">
      <div class="inner">
        <div class="front">
          <img src="<?= $card->getRecto() ?>" alt="<?= htmlspecialchars($card->getName()) ?>">
        </div>
        <div class="back">
          <img src="<?= $card->getVerso() ?>" alt="dos">
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<div id="scoreModal" style="display:none;">
  <p>🎉 Bravo, vous avez trouvé toutes les paires !</p>
  <p>Enregistrer votre score ?</p>
  <form id="scoreForm" method="POST" action="./fonction/save_score.php">
    <input type="hidden" name="level" value="<?= $level ?>">
    <input type="hidden" name="time" id="scoreInput">
    <button type="submit">Enregistrer</button>
  </form>
</div>


    </body>
</html>