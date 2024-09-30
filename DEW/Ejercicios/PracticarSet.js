let nuevoSet = new Set([1, 2, 3, 4, 5]);
console.log("Tiene el 3:", nuevoSet.has(3));

nuevoSet.delete(4);
console.log(nuevoSet);

const miArray = [...nuevoSet];
console.log(miArray);

const otroSet = new Set([4,5,6,7]);
console.log(otroSet);

const setJuntos = new Set([...nuevoSet, ...otroSet]);
console.log(setJuntos);

const intersectionSet = new Set([[...nuevoSet].filter(n => otroSet.has(n))]);

console.log(intersectionSet);

let arrayDiff = [...nuevoSet].filter(e => !otroSet.has(e));
const differenceSet = new Set(arrayDiff);
console.log(arrayDiff);