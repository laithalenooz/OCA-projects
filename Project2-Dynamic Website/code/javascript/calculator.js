function outcome() {
  var x = Number(document.getElementById("num-one").value);
  var y = Number(document.getElementById("num-two").value);
  var z = 0;

  if (document.getElementById("box1").checked) {
    z = x + y;
  } else if (document.getElementById("box2").checked) {
    z = x - y;
  } else if (document.getElementById("box3").checked) {
    z = x * y;
  } else if (document.getElementById("box4").checked) {
    z = x / y;
  } else {
    z = Math.abs(x - y);
  }
  document.getElementById("resultArea").innerHTML = " Result : " + String(z);
}

function Factorial() {
  var i, num, factorial;
  factorial = 1;
  num = document.getElementById("num-fact").value;
  for (i = 1; i <= num; i++) {
    factorial = factorial * i;
  }
  document.getElementById("factorialResult").innerHTML =
    " Result : " + String(factorial);
}
