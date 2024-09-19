let num1 = parseInt(prompt("Dime un numero"));
let num2 = parseInt(prompt("Dime otro numero"));
let num3 = parseInt(prompt("Dime el ultimo numero"));
if (num1 > num2 >= num3) {
    alert("El mayor es " + num1);
}else if(num2 > num1 >= num3) {
    alert("El mayor es " + num2);
}else {
    alert("El mayor es " + num3);
}
