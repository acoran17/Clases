let nombre = prompt("Como te llamas?");
alert('Hola ' + nombre);

alert("Multiplicacion")
let num1 = prompt("Dime un numero: ");
let num2 = prompt("Dime otro numero: ");
alert(num1 * num2);

alert("Resto de una division")
let num3 = prompt("Dime un numero: ");
let num4 = prompt("Dime otro numero: ");
alert(num1 % num2);

alert("Suma")
let num5 = parseInt(prompt("Dime un numero: "));
let num6 = parseInt(prompt("Dime otro numero: "));
alert(num5 + num6);

let dividendo = prompt("Dividendo: ");
let divisor = prompt("Divisor: ");
let resto = dividendo % divisor;
document.getElementById("dividendo").textContent = dividendo;
document.getElementById("divisor").textContent = divisor;
document.getElementById("resto").textContent = resto; 