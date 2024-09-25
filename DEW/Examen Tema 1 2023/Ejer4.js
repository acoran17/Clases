function ruleta() {
    numero = parseInt(Math.random() * 37);
    if (numero === 0) {
        return [0];
    }
    const esPar = (numero % 2 === 0);
    const esRojo = [1, 3, 5, 7, 9, 12, 14, 16, 18, 21, 23, 25, 27, 30, 32, 34, 36].includes(numero);
    const esPasa = (numero >= 19 && numero <= 36);

    return [numero, esPar, esRojo, esPasa];
}

console.log(ruleta());