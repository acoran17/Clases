//Ejercicio1
let num = prompt("Dime un numero");
let res;
function isPar(num) {
    if(num % 2 == 0) {
        return "es par";
    }
    return "no es par";
}

res = isPar(num);

document.getElementById("num").textContent = num;
document.getElementById("res").textContent = res;

//Ejercicio2
let base = prompt("Dime la base del triangulo");
let altura = prompt("Dime la altura del triangulo");
let area;
function areaTriangulo(base, altura) {
    return (base * altura)/2;
}

area = areaTriangulo(base,altura);
document.getElementById("area").textContent = area;
document.getElementById("base").textContent = base;
document.getElementById("altura").textContent = altura;


//Ejercicio3
let precioBase = prompt('Dime el precio base del producto que quieres y te dire el precio final');
let precioTotal;
function calcularPrecioTotal(precioBase, impuesto=0.10) {
    return precioBase * (impuesto + 1);
}

precioTotal = calcularPrecioTotal(precioBase);
document.getElementById("precioBase").textContent = precioBase;
document.getElementById("precioTotal").textContent = precioTotal;


//Ejercicio4
let precioBase2 = prompt ('Dime el precio base del productor');
let tipoIVA = prompt('Que tipo de IVA:General, Reducido o Superreducido');
let precioTotal2;
function calcularIVA(precioBase, tipoIVA) {
    switch (tipoIVA) {
        case "General":
            return precioBase * (0.24 + 1);
            break;
        case "Reducido":
            return precioBase * (0.10 + 1);
            break;
        case "Superreducido":
            return precioBase * (0.5 + 1);
            break;
        default:
            return "Error: no existe ese tipo de IVA";
            break;
    }
}

precioTotal2 = calcularIVA(precioBase2, tipoIVA);
document.getElementById("tipoIVA").textContent = tipoIVA;
document.getElementById("precioBase2").textContent = precioBase2;
document.getElementById("precioTotal2").textContent = precioTotal2;


//Ejercicio5
let number = prompt('Dime un numero y te digo si es primo');
let result;
function esPrimo(num) {
    for (let i = 2; i < num; i++) {
        if (num % i == 0) {
            return false;
        }
    }
    return true;
}

if (esPrimo(num) == false) {
    result = "no es primo";
}else{
    result = "es primo";
}

document.getElementById("number").textContent = number;
document.getElementById("result").textContent = result;


//Ejercicio6
// let arg = prompt('Escribeme una palabra un numero o lo que quieras y te dire que tipo de argumento es');
// function typeArg(arg) {
//     if()
// }