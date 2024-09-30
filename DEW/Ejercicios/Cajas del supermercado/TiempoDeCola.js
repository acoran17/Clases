//Creo la funcion con sus determinados valores y poniendo un limite de cajas y de clientes.
function queueTime(clients = [], cash = 1) {
    cashArr = new Array(cash);
    cashArr.fill(0);
    //creo un array con la cantidad de cajas rellenandolo con ceros.
    for (let i = 0; i < clients.length; i++) {
        cashArr.sort((a,b)=>a-b);
        cashArr[0] += clients[i];
        //iterando sobre cada cliente y ordenando las cajas de menor a mayor voy sumando los productos al primer elemento del array el mas pequeño.
    }
    return cashArr[cash-1];
    //devuelvo la ultima caja que al haberla ordenado sera la mas grande.
}

console.log(queueTime([2,3,10,4,3],2));
console.log(queueTime([10,2,3,3],2));
console.log(queueTime([5,2,3,6,7,1,4,9,2,6,4],3));
//hago las comprobaciones