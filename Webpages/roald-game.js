// Generate a random number between 1 and 100
const secretNumber = Math.floor(Math.random() * 100) + 1;

// Initialize guess counter
let guessCount = 0;

// Function to check the user's guess
function checkGuess() {
  // Get user's guess from the input field
  const userGuess = parseInt(document.getElementById('guessInput').value);

  // Increment the guess counter
  guessCount++;

  // Check if the guess is correct, too high, or too low
  if (!isNaN(userGuess)) {
    // Check if the user entered a valid number
    if (userGuess === secretNumber) {
      document.getElementById('result').innerHTML = `Congratulations! You guessed the correct number in ${guessCount} guesses!`;
    } else if (userGuess > secretNumber) {
      document.getElementById('result').innerHTML = 'Too high. Try again!';
    } else {
      document.getElementById('result').innerHTML = 'Too low. Try again!';
    }
  } else {
    // Display an error message if the user did not enter a valid number
    document.getElementById('result').innerHTML = 'Please enter a valid number.';
  }
}
