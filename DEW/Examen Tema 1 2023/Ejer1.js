function sumaArray(array) {
    return array.map(element => 
        Array.isArray(element) 
            ? sumaArray(element) // Llamada recursiva si es un array
            : (typeof element === 'number' ? element : 0) // Sumar si es un número, o 0 si no lo es
    ).reduce((acum, num) => acum + num, 0); // Sumar todos los números
}

// Ejemplos de prueba
console.log(sumaArray([]));  // -> 0
console.log(sumaArray([4, 8, 3]));  // -> 15
console.log(sumaArray([[2, 4], 5, [6, 7]]));  // -> 24
console.log(sumaArray([1, 2, [5, 4], 3, 6, [[2, 4], 8, [9, 2, 0, [1]]], 6, [], [8, 7]]));  // -> 68

// function sumaMultidimensional(arr) {
//     let suma = 0;
    
//     for (let elemento of arr) {
//         if (Array.isArray(elemento)) { // Si el elemento es un array, llamar recursivamente
//             suma += sumaMultidimensional(elemento);
//         } else if (typeof elemento === 'number') { // Si es un número, sumar
//             suma += elemento;
//         }
//     }
    
//     return suma;
// }

//array.flat(array.length);