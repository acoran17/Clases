function mediaLongitudPalabras(texto) {
    const palabras = texto.replace(/[.,:;]/g, '').split(" ").filter(palabra => palabra.length > 0); 

    // Calculamos la longitud total de las palabras
    const totalLetras = palabras.reduce((suma, palabra) => suma + palabra.length, 0);

    // Calculamos la media
    const media = palabras.length > 0 ? totalLetras / palabras.length : 0;

    return media;
}

console.log(mediaLongitudPalabras("")); 
console.log(mediaLongitudPalabras("Este texto tiene palabras más palabras y signos"));  
console.log(mediaLongitudPalabras("Este texto tiene: palabras, más palabras y signos."));  
