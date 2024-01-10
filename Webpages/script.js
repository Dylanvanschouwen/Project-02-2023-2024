// Generate a random number between 1 and 10
const secretNumber = Math.floor(Math.random() * 100) + 1;

function checkGuess() {
  // Get user's guess from the input field
  const userGuess = parseInt(document.getElementById('guessInput').value);

  // Check if the guess is correct, too high, or too low
  if (userGuess === secretNumber) {
    document.getElementById('result').innerHTML = 'Congratulations! You guessed the correct number!';
  } else if (userGuess > secretNumber) {
    document.getElementById('result').innerHTML = 'Too high. Try again!';
  } else {
    document.getElementById('result').innerHTML = 'Too low. Try again!';
  }
}
