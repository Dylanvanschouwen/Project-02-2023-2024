// start the flag with value 1, representing the turn of the player ('X' or 'O') at the start of the game
let flag = 1;

// Function to start the game
function initializeGame() {
  // Reset flag to 1 for the start of the game so the game always starts with player X (1 = 'X', 0 = 'O')
  flag = 1;
  // Loop through every cell in the grid to reset them all so the game is ready to be played again
  for (let i = 1; i <= 9; i++) {
    let cell = document.getElementById("b" + i);
    cell.value = '';
    cell.disabled = false;
    cell.addEventListener('click', cellClickHandler);
  }
}
// Function to handle the cells being clicked
function cellClickHandler(event) {
  let cell = event.target;

  // Check if the cell is empty before allowing it to be clicked
  if (cell.value === '') {
    // Set the value of the cell to 'X' or 'O' depending on the flag
    cell.value = (flag === 1) ? 'X' : 'O';
    cell.disabled = true;
    // Toggle the flag to alternate between 'X' and 'O'
    flag = 1 - flag;

    // Check for win conditions or draw
    if (checkWinCondition(cell.value)) {
      alert(cell.value + " wins!");
      reloadGame();
    } else if (checkDraw()) {
      alert("It's a draw!");
      reloadGame();
    }
  }
}

// Function to check if a player has won
function checkWinCondition(symbol) {
  const winConditions = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9], 
    [1, 4, 7], [2, 5, 8], [3, 6, 9], 
    [1, 5, 9], [3, 5, 7] 
  ];

  // Check if any of the win conditions are met
  for (const condition of winConditions) {
    const [a, b, c] = condition;
    if (getCell(a) === symbol && getCell(b) === symbol && getCell(c) === symbol) {
      // Win condition has been met
      return true; 
    }
  }
// No win condition has been met
  return false; 
}

// Function to check if the game is a draw
function checkDraw() {
  // Check if there are any empty cells remaining
  for (let i = 1; i <= 9; i++) {
    if (getCell(i) === '') {
       // Game is not a draw
      return false;
    }
  }
  // All cells are filled, so its a draw
  return true; 
}

// Function to get the value of a cell
function getCell(number) {
  return document.getElementById("b" + number).value;
}

// Function to reload the game
function reloadGame() {
  initializeGame();
}

// Call the initializeGame function to start the game
initializeGame();