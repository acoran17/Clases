// Crea una función que admite un string con un texto y un número indeterminado de números
// que representan longitudes de palabras.
// La función debe devolver el mismo texto pero solo con las palabras que tienen dicha
// longitud.
// Todas las palabras están separadas por espacios. No tienes que tener en cuenta los signos
// de puntuación..
// Ejemplo:
// ● ('Primero resuelve el problema y después escribe el código', 8)
// devuelve “resuelve problema”
// ● ('Siempre escribe tu código como si la persona que lo fuera a
// mantener fuera un peligroso psicópata que sabe quien eres y donde
// vives', 9) devuelve “peligroso psicópata”
// ● ('Para entender la recursividad hay que entender lo que es la
// recursividad', 4, 3, 8) devuelve “Para entender hay que entender
// que”
// ● ('Es más difícil leer código que escribirlo') devuelve “”.

function longitudPalabras(frase, ...cantidad) {
    const palabras = frase.replace(/[.,:;]/g, '').split(" ").filter(palabra => palabra.length > 0);
    let palabrasClaves = [];
    for (let i = 0; i < palabras.length; i++) {
        for (let y = 0; y < cantidad.length; y++) {
            if(palabras[i].length == cantidad[y]){
                palabrasClaves.push(palabras[i]);
            }
        }
    }
    return palabrasClaves.join(' ');
}

console.log(longitudPalabras('Para entender la recursividad hay que entender lo que es la recursividad', 4, 3, 8));
console.log(longitudPalabras(('Es más difícil leer código que escribirlo')));
console.log(longitudPalabras('Siempre escribe tu código como si la persona que lo fuera a mantener fuera un peligroso psicópata que sabe quien eres y donde vives', 9));