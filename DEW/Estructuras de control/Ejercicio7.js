let num1 = parseInt(prompt("Dime un numero y dire si es divisible entre 2,3,5 o 7"));
if (num1 % 2 == 0) {
    alert('Es divisible entre dos');
} else if(num1 % 3 == 0) {
    alert('Es divisible entre tres');
} else if(num1 % 5 == 0) {
    alert('Es divisible entre cinco');
} else if(num1 % 7 == 0) {
    alert('Es divisible entre siete');
}
