// Crea una función que admite un número indeterminado de muestras de temperatura en ºC y
// nos devuelve verdadero si alguna está por debajo de 0ºC y falso en caso contrario.
// Ejemplo:
// ● (22, 5, 13, 0, 35) devuelve false.
// ● (15, 3, -4, 8, -2, 10, 14, 16) devuelve true.
// ● () devuelve false

function bajoCero(...temperaturas) {
    // itero las temperaturas hasta que encuentro un valor bajo cero
    for (let i = 0; i < temperaturas.length; i++) {
        if(temperaturas[i] < 0) {
            return true;
        }
    }
    //en caso de que no lo encuentra devuelvo falso
    return false;
}

console.log(bajoCero(22, 5, 13, 0, 35));
console.log(bajoCero(15, 3, -4, 8, -2, 10, 14, 16));
console.log(bajoCero());