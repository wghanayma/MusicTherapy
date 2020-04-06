function checkNumber(event) {
  let flag = false;
  for (let i = 0; i < 10; i++) {
    if (event.key == i) {
      flag = true;
      break;
    }
  }
  if (event.which == 8) {
    flag = true;
  }
  if (event.which == 13) {
    flag = true;
  }
  if (flag == false) {
    event.preventDefault();
  }
}