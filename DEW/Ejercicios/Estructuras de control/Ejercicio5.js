let num1 = parseInt(prompt("Dime un numero y te dire tu nota"));
switch (num1) {
    case 0,1,2:
        alert("Muy deficiente");
        break;
    case 3,4:
        alert("Insuficiente");
        break;
    case 5:
        alert("Suficiente");
        break;
    case 6:
        alert("Bien");
        break;
    case 7,8:
        alert("Notable");
        break;
    case 9,10:
        alert("Sobresaliente");
        break;
}