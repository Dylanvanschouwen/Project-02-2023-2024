let flag = 1;

// Use a loop to set initial values and disabled properties
function initializeGame() {
  flag = 1; // Set X to start
  for (let i = 1; i <= 9; i++) {
    let cell = document.getElementById("b" + i);
    cell.value = '';
    cell.disabled = false;
    cell.addEventListener('click', cellClickHandler);
  }
}

// Event handler for cell clicks
function cellClickHandler(event) {
  let cell = event.target;

  if (cell.value === '') {
    cell.value = (flag === 1) ? 'X' : 'O';
    cell.disabled = true;
    flag = 1 - flag; // Toggle between 0 and 1

    if (checkWinCondition(cell.value)) {
      alert(cell.value + " wins!");
      reloadGame();
    } else if (checkDraw()) {
      alert("It's a draw!");
      reloadGame();
    }
  }
}

// Check all win conditions for the given symbol
function checkWinCondition(symbol) {
  const winConditions = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9], // Rows
    [1, 4, 7], [2, 5, 8], [3, 6, 9], // Columns
    [1, 5, 9], [3, 5, 7]              // Diagonals
  ];

  for (const condition of winConditions) {
    const [a, b, c] = condition;
    if (getCell(a) === symbol && getCell(b) === symbol && getCell(c) === symbol) {
      return true;
    }
  }

  return false;
}

// Check if the game ended in a draw
function checkDraw() {
  for (let i = 1; i <= 9; i++) {
    if (getCell(i) === '') {
      return false; // If any cell is empty, the game is not a draw
    }
  }
  return true; // All cells are filled, it's a draw
}

// Get the value of the cell with the given number
function getCell(number) {
  return document.getElementById("b" + number).value;
}

// Reload the game and restart with X
function reloadGame() {
  initializeGame();
}

// Call initializeGame() at the beginning
initializeGame();
