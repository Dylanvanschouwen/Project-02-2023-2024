// Initialize flag with value 1, representing the turn of the player ('X' or 'O') at the start of the game
let flag = 1;

// Function to start the tic-tac-toe game
function initializeGame() {
  // Reset flag to 1 for the start of the game (1 = 'X', 0 = 'O')
  flag = 1;
  // Loop through each cell (b1 to b9) to reset their values and enable click events
  for (let i = 1; i <= 9; i++) {
    let cell = document.getElementById("b" + i);
    cell.value = '';
    cell.disabled = false;
    cell.addEventListener('click', cellClickHandler);
  }
}
// Event handler for a cell click
function cellClickHandler(event) {
  let cell = event.target;

  // Check if the cell is empty before proceeding
  if (cell.value === '') {
    // Set the cell value based on the player's turn (flag)
    cell.value = (flag === 1) ? 'X' : 'O';
    cell.disabled = true;
    // Switch player turn
    flag = 1 - flag;

    // Check for win or draw conditions and handle accordingly
    if (checkWinCondition(cell.value)) {
      alert(cell.value + " wins!");
      reloadGame();
    } else if (checkDraw()) {
      alert("It's a draw!");
      reloadGame();
    }
  }
}

// Function to check win conditions for the given symbol ('X' or 'O')
function checkWinCondition(symbol) {
  const winConditions = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9], 
    [1, 4, 7], [2, 5, 8], [3, 6, 9], 
    [1, 5, 9], [3, 5, 7] 
  ];

  // Iterate through each win condition and check if the symbol occupies all three cells
  for (const condition of winConditions) {
    const [a, b, c] = condition;
    if (getCell(a) === symbol && getCell(b) === symbol && getCell(c) === symbol) {
      return true; // Win condition met
    }
  }

  return false; // No win condition met
}

// Function to check if the game is a draw
function checkDraw() {
  // Check if there are any empty cells remaining
  for (let i = 1; i <= 9; i++) {
    if (getCell(i) === '') {
      return false; // Game is not a draw
    }
  }
  return true; // All cells are filled, indicating a draw
}

// Function to get the value of a cell given its number (1 to 9)
function getCell(number) {
  return document.getElementById("b" + number).value;
}

// Function to reload the game by reinitializing it
function reloadGame() {
  initializeGame();
}

// Initialize the game when the script is loaded
initializeGame();