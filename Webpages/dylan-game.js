let flag = 1;

function initializeGame() {
  flag = 1;
    for (let i = 1; i <= 9; i++) {
    let cell = document.getElementById("b" + i);
    cell.value = '';
    cell.disabled = false;
    cell.addEventListener('click', cellClickHandler);
  }
}

function cellClickHandler(event) {
  let cell = event.target;

  if (cell.value === '') {
    cell.value = (flag === 1) ? 'X' : 'O';
    cell.disabled = true;
    flag = 1 - flag;

    if (checkWinCondition(cell.value)) {
      alert(cell.value + " wins!");
      reloadGame();
    } else if (checkDraw()) {
      alert("It's a draw!");
      reloadGame();
    }
  }
}

function checkWinCondition(symbol) {
  const winConditions = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9], 
    [1, 4, 7], [2, 5, 8], [3, 6, 9], 
    [1, 5, 9], [3, 5, 7] 
  ];

  for (const condition of winConditions) {
    const [a, b, c] = condition;
    if (getCell(a) === symbol && getCell(b) === symbol && getCell(c) === symbol) {
      return true;
    }
  }

  return false;
}

function checkDraw() {
  for (let i = 1; i <= 9; i++) {
    if (getCell(i) === '') {
      return false;
    }
  }
  return true;
}

function getCell(number) {
  return document.getElementById("b" + number).value;
}

function reloadGame() {
  initializeGame();
}

initializeGame();
