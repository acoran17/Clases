let num1 = parseInt(prompt("Dime un numero y dire si es divisible entre 2,3,5 o 7"));

res = "Es divisible por ";
if (num1 % 2 == 0) {
    res += "[2] ";
    console.log('Es divsible entre dos');
}
if(num1 % 3 == 0) {
    res += "[3] ";
    console.log('Es divsible entre tres');
}
if(num1 % 5 == 0) {
    res += "[5] ";
    console.log('Es divsible entre cinco');
}
if(num1 % 7 == 0) {
    res += "[7] ";
    console.log('Es divsible entre siete');
}
alert(res);