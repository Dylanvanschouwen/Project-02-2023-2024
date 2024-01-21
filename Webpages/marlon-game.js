// script.js

// Wacht op volledige DOM-lading
document.addEventListener('DOMContentLoaded', function () {
  // Elementen ophalen
  const gameContainer = document.getElementById('game-container');
  const resetButton = document.getElementById('resetButton');
  const scoreDisplay = document.getElementById('score');

  // Spelvariabelen
  let score = 0;
  let spawnInterval = 2000; // tijd voor de ballen 
  let intervalId;

  // Willekeurige kleur 
  function getRandomColor() {
      return '#' + Math.floor(Math.random() * 16777215).toString(16);
  }

  // bal maken
  function createOrb() {
      const orb = document.createElement('div');
      orb.className = 'orb';
      const x = Math.floor(Math.random() * (window.innerWidth - 50));
      const y = Math.floor(Math.random() * (window.innerHeight - 50));

      orb.style.left = `${x}px`;
      orb.style.top = `${y}px`;
      orb.style.backgroundColor = getRandomColor();

      // Verwijder bal bij klik en update score
      orb.addEventListener('click', () => {
          gameContainer.removeChild(orb);
          increaseSpeed();
          updateScore();
      });

      gameContainer.appendChild(orb);
  }

  // ballen sneller laten maken
  function increaseSpeed() {
      spawnInterval *= 0.9;
      clearInterval(intervalId);
      intervalId = setInterval(createOrb, spawnInterval);
  }

  // Score veranderen
  function updateScore() {
      score++;
      scoreDisplay.innerText = `Score: ${score}`;
  }

  // Spel resetten
  function resetGame() {
      clearInterval(intervalId);
      removeAllOrbs();
      score = 0;
      updateScore();
      setTimeout(() => { intervalId = setInterval(createOrb, spawnInterval); }, 0);
      let spawnInterval = 2000;
  }

  // ballen verwijderen
  function removeAllOrbs() {
      const orbs = document.querySelectorAll('.orb');
      orbs.forEach((orb) => gameContainer.removeChild(orb));
  }

  // Resetknop click
  resetButton.addEventListener('click', resetGame);

  // starten
  updateScore();
  intervalId = setInterval(createOrb, spawnInterval);
});
