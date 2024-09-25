// function contarOcurrencias(texto, ...palabras) {
//     const palabrasEnTexto = texto.toLowerCase().replace(/[.,]/g, '').split(" "); // Normalizo el texto y lo separo por palabras
//     return palabras.map(palabra => {
//         // Contar las ocurrencias de cada palabra en el array de palabras
//         return palabrasEnTexto.filter(p => p === palabra.toLowerCase()).length;
//     });
// }

function contarOcurrencias(texto, ...palabras) {
    // Convertir el texto a minúsculas y eliminar signos de puntuación
    const palabrasEnTexto = texto.toLowerCase().replace(/[.,]/g, '').split(/\s+/);
    const ocurrencias = [];

    for (const palabra of palabras) {
        let contador = 0;

        // Contar ocurrencias de la palabra
        for (const p of palabrasEnTexto) {
            if (p === palabra.toLowerCase()) {
                contador++;
            }
        }

        ocurrencias.push(contador);
    }

    return ocurrencias;
}

// Ejemplos de prueba
let text = "De las palabras de la lista, la palabra está en la lista.";
console.log(contarOcurrencias(text, 'las'));  // -> [1]
console.log(contarOcurrencias(text));  // -> []
console.log(contarOcurrencias(text, 'lista', 'en', 'berenjena', 'palabra'));  // -> [2, 1, 0, 2]