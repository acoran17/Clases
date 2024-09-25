//Ejercicio1
function invert(number) {
    return number.toString().split("").reverse().reduce((n,b) => n+b);
    
}
console.log("Ejericio1");
console.log(invert(321));
console.log(invert(45678));
console.log(invert(41354646));

//Ejercicio2
function palindromo(frase) {
    let frase2 = frase.replace(/ /g, '').split("").reverse();
    if(frase.replace(/ /g, '').split("").reduce((n,b) => n+b) == frase2.reduce((n,b) => n+b)) 
    {
        return "Es un palindromo";
    }else {
        return "No es un palindromo";
    }
}
console.log(palindromo('dabale arroz a la zorra el abad'));

//Ejercicio3
function generateCombinations(str) {
    const result = new Set(); // Use a set to avoid duplicate combinations

    function backtrack(start, combination) {
        if (combination.length > 0) {
            result.add(combination);
        }

        for (let i = start; i < str.length; i++) {
            backtrack(i + 1, combination + str[i]);
        }
    }

    backtrack(0, '');
    return Array.from(result).sort(); // Convert the set to an array and sort it
}

const input = 'dog';
const combinations = generateCombinations(input);
console.log(combinations.join(',')); // Output: d,o,do,g,dg,og,dog

//Ejercicio4
function ordenAlfabetico(frase) {
    letras = frase.replace(/ /g, '').split("");
    return letras.sort().join();
    // .reduce((n,b) => n+b)
}

console.log(ordenAlfabetico("hola que tal como andamos"));

//Ejercicio5
function mayusculas(frase) {
    var fraseConMayusculas = [];
    palabras = frase.split(" ");
    for (let i = 0; i < palabras.length; i++) {
        fraseConMayusculas.push(palabras[i].charAt(0).toUpperCase() + palabras[i].slice(1));     
    }
    return fraseConMayusculas.join(' ');
}

console.log(mayusculas("hola no se poner mayusculas"));

//Ejercicio6
function mayorPalabra(frase) {
    let palabras = frase.replace(/[.,:;]/g, '').split(" ").filter(palabra => palabra.length > 0); 
    let result = palabras[0];
    for (let i = 0; i < palabras.length; i++) {
        if (result.length < palabras[i].length) {
            result = palabras[i];
        }
    }
    return result;
}

console.log(mayorPalabra('Web: Development, Tutorial'));

//Ejercicio7
function vocales(frase) {
    let vocales = "aeiouyAEIOUY";
    let count = 0;
    for (let i = 0; i < frase.length; i++) {
        if (vocales.indexOf(frase[i]) !== -1) {
            count++;
        }
    }
    return count;
}

console.log(vocales('Web: Development, Tutorial'));