document.addEventListener('DOMContentLoaded', function () {
    // Get elements
    const gameContainer = document.getElementById('game-container');
    const resetButton = document.getElementById('resetButton');
    const scoreDisplay = document.getElementById('score');
  
    // Initialize variables
    let score = 0;
    let spawnInterval = 2000;
    let intervalId;
  
    // Get random color
    function getRandomColor() {
        return '#' + Math.floor(Math.random() * 16777215).toString(16);
    }
  
    // Create an orb
    function createOrb() {
        const orb = document.createElement('div');
        orb.className = 'orb';
        const x = Math.floor(Math.random() * (window.innerWidth - 50));
        const y = Math.floor(Math.random() * (window.innerHeight - 50));
  
        // Set orb position
        orb.style.left = `${x}px`;
        orb.style.top = `${y}px`;
        orb.style.backgroundColor = getRandomColor();
  
        // Remove orb when clicked
        orb.addEventListener('click', () => {
            gameContainer.removeChild(orb);
            increaseSpeed();
            updateScore();
        });
  
        // Append orb to the game container
        gameContainer.appendChild(orb);
    }
  
    // Increase orb spawn speed
    function increaseSpeed() {
        spawnInterval *= 0.9;
        clearInterval(intervalId);
        intervalId = setInterval(createOrb, spawnInterval);
    }
  
    // Update the score display
    function updateScore() {
        score++;
        scoreDisplay.innerText = `Score: ${score}`;
    }
  
    // Reset the game
    function resetGame() {
        clearInterval(intervalId);
        removeAllOrbs();
        score = 0;
        updateScore();
        intervalId = setInterval(createOrb, spawnInterval)
        spawninterval = 1;
    }
  
    // Remove all orbs from the game container
    function removeAllOrbs() {
        const orbs = document.querySelectorAll('.orb');
        orbs.forEach((orb) => gameContainer.removeChild(orb));
    }
  
    // Event listener for reset button click
    resetButton.addEventListener('click', resetGame);
  
    // Initial setup: update the score and start orb creation
    updateScore();
    intervalId = setInterval(createOrb, spawnInterval);
});
