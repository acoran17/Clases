//Ejercicio Par/Impar
numbers = [1,5,6,8,3,2,9];
function evenOrOdd(array) {
    nuevoArray = [];
    // for (let i = 0; i < array.length; i++) {
    //         if (array[i] % 2 == 0) {
    //             nuevoArray[i] = "Even";
    //         }else{
    //             nuevoArray[i] = "Odd";
    //         }
    // }
    // return nuevoArray;
    return array.map( n => n % 2==0 ? "Even" : "Odd");
}

console.log(evenOrOdd(numbers));

//Ejercicio Sumar Números
function sumNumbers(...numeros) {
    return numeros.reduce((n,b) => n+b);
}

console.log(sumNumbers(1,4,6));

//Ejercicio Sumar Positivos
function sumPositives(...numeros) {
    return numeros.filter(n => n > 0).reduce((b,c) => b + c);
}

console.log(sumPositives(1,-2,1));

//Ejercicio Cuadrado de cada dígito
function sumCubes(numero) {
    let result = 0;
    for (let i = 0; i < numero ;i++) {
        result += i**3;
    }
    return result;
    
    // return Array(n).fill(0).map((n,i) => i+1).reduce((a,n) => a+=n**3);
}

console.log(sumCubes(2));
console.log(sumCubes(4));

//Cuadrado de cada dígito
function squareDigits(numero) {
    numeroStr = numero.toString();
    return numeroStr.split('').reduce((b,c) => b+=c**2, "");

}

console.log(squareDigits(213));
console.log(squareDigits(90345));

//Ejercicio Categorizar programadores
function categorizeProgrammers(...programers) {
    return programers.map( programer => programer[0]>=24 && programer[1]>2 ? "Senior" : "Junior");
}

console.log(categorizeProgrammers([10,4], [30,2], [25,3], [10,6], [15,2], [24,3]));

//Ejercicio Persistencia de un número
count = 0;
function persistence(numero) {
    if(numero < 10) {
        return 0;
    }else{
        return 1+persistence(numero.toString().split('').reduce((n,c)=> n*=c));
        
    }
    // count = 0;
    // numeroStr = numero.toString();
    // while (numeroStr>10) {
    //     count++;
    //     numeroStr = numeroStr.split('').reduce((n,c) => n *= c);
    // }
    // return count;
}

console.log(persistence(34));
console.log(persistence(11111));
console.log(persistence(3478));

//