
  // Sélectionne toutes les cartes du plateau
  const cards = document.querySelectorAll('.card');
  const sound = new Audio('./assets/son/flip_card.mp3');
  const foundSound = new Audio('./assets/son/ace.mp3');
  const finishSound = new Audio('./assets/son/jett-ace.mp3');

  // Variables pour le jeu
  let firstCard = null;
  let secondCard = null;
  let lock = false;
  let matchedCount = 0;

  // Gestion des cartes
  cards.forEach(card => {
    card.addEventListener('click', () => {
      if (lock) return;
      if (card.classList.contains('flipped')) return;

      sound.currentTime = 0;
      sound.play();
      card.classList.add('flipped');

      if (!firstCard) {
        firstCard = card;
        return;
      }

      secondCard = card;
      lock = true;

      const isMatch = firstCard.dataset.name === secondCard.dataset.name;

      if (isMatch) {
        firstCard.classList.add('matched');
        secondCard.classList.add('matched');
        foundSound.currentTime = 0;
        foundSound.play();
        matchedCount += 2;

        resetSelection();
        checkWin();
      } else {
        setTimeout(() => {
          firstCard.classList.remove('flipped');
          secondCard.classList.remove('flipped');
          resetSelection();
        }, 1000);
      }
    });
  });

  function resetSelection() {
    [firstCard, secondCard] = [null, null];
    lock = false;
  }

  function checkWin() {
    if (matchedCount === cards.length) {
      setTimeout(() => {
          const finalTimeSec = Math.floor((Date.now() - start) / 1000);
          document.getElementById('scoreInput').value = finalTimeSec;
          finishSound.currentTime = 0;
          finishSound.play();
        document.getElementById('scoreModal').style.display = 'block';
      }, 500);
    }
  }

// Réinitialise les cartes sélectionnées
function resetSelection() {
  [firstCard, secondCard] = [null, null];
  lock = false;
}

function quitgame() {
    if (confirm("Vous allez quitter la partie en cours. Êtes-vous sûr ?")) {
        window.location.href = "index.php";
    } else {
        return;
    }
}
