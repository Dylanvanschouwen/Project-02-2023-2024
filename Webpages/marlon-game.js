document.addEventListener('DOMContentLoaded', function () {
    // Get DOM elements
    const gameContainer = document.getElementById('game-container');
    const resetButton = document.getElementById('resetButton');
    const scoreDisplay = document.getElementById('score');

    // Game variables
    let score = 0;
    let spawnInterval = 2000;
    const initialSpawnInterval = 2000; // Initial spawn interval (milliseconds)
    let intervalId;

    // Generate a random color
    function getRandomColor() {
        return '#' + Math.floor(Math.random() * 16777215).toString(16);
    }

    // Create an orb and add click event listener
    function createOrb() {
        const orb = document.createElement('div');
        orb.className = 'orb';
        const x = Math.floor(Math.random() * (window.innerWidth - 50));
        const y = Math.floor(Math.random() * (window.innerHeight - 50));

        // Set orb properties
        orb.style.left = `${x}px`;
        orb.style.top = `${y}px`;
        orb.style.backgroundColor = getRandomColor();

        // Add click event listener to remove orb, increase speed, and update score
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
        spawnInterval = initialSpawnInterval; // Reset the spawn interval
        intervalId = setInterval(createOrb, spawnInterval);
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
