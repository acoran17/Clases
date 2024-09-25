// Crea una función que recibe un array con números que representan temperaturas en grados
// fahrenheit (ºF) y devuelve un array con las mismas temperaturas pero representadas en
// grados centígrados (ºC).
// La función para pasar de grados ºF a ºC es la siguiente:
// Grados centígrados = (grados Fahrenheit − 32) × 5/9
// Ejemplo:
// ● ([68, 50, 46.4, 39, 90]) devuelve [20, 10, 8, 3.888888888888889,
// 32.22222222222222]
// ● ([20, 0, -10]) devuelve [-6.666666666666667, -17.77777777777778,
// -23.333333333333332]
// ● ([]) devuelve []

function gradosaCentigrados(arrayf) {
    //creo un array conviertiendo cada uno de los elementos en centigrados
    return arrayf.map((n)=>(n-32) * (5/9));
}

console.log(gradosaCentigrados([68, 50, 46.4, 39, 90]));