let num1 = parseInt(prompt("Dime un numero y te dire tu nota"));
if (num1 <= 3) {
    alert('Muy deficiente');
} else if(num1 <= 5 && num1 >= 3) {
    alert('Insuficiente');
} else if(num1 <= 6 && num1 >= 5) {
    alert('Suficiente');
} else if(num1 <= 7 && num1 >=6) {
    alert('Bien');
} else if(num1 <= 9 && num1 >= 7) {
    alert('Notable');
} else if(num1 <= 10 && num1 >= 9) {
    alert('Sobrselaiente');
}  
