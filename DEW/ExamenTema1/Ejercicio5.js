// Crea una función a la que se le pasa un número indeterminado de números de un dígito (0 a
//     9) y te devuelve un array indicando el número de 0s, 1s,...9s que había.
//     Ejemplos:
//     ● (4,5,2,3,2,2,0,6,5,2) devuelve [1, 0, 4, 1, 1, 2, 1, 0, 0, 0]
//     ● (1,2,2,3,3,3,4,4,4,4,5,5,5,5,6,6,6,7,7,8) devuelve [0, 1, 2, 3, 4,
//     4, 3, 2, 1, 0]
//     ● () devuelve [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
//     ● (9,8,7,6,5,4,3,2,1,0) devuelve [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]

function contarNumeros(...numeros) {
    const solucion = new Array(10).fill(0);
    for (let i = 0; i < numeros.length; i++) {
        solucion[numeros[i]]++;      
    }
    return solucion;
}

console.log(contarNumeros(9,8,7,6,5,4,3,2,1,0));
console.log(contarNumeros(1,2,2,3,3,3,4,4,4,4,5,5,5,5,6,6,6,7,7,8));