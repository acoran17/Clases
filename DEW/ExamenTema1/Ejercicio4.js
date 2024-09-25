// Crea una función que admite un string en formato “dia-mes-año” y debe devolver un array
// mostrando la fecha en el formato “Dia de la semana, dia del mes de año”. En caso de que
// falte el día, mes o año, debe devolver “Fecha no válida”.
// Ejemplo:
// ● ("20-12-2012") devuelve “jueves, 20 de diciembre de 2012”.
// ● ("2-1-2024") devuelve “martes, 2 de enero de 2024”.
// ● ("2-2024") devuelve “Fecha no válida”.
// ● ("40-5-24") puede elegir entre devolver una de las siguientes
// opciones (ambas se considerarán correctas):
// ○ “Fecha no válida” porque no es una fecha correcta.
// ○ “lunes, 9 de junio de 1924”. Porque mayo tiene 31 días y
// sigue contando 9 días de junio para llegar a los 40.

function fechaFormato(fecha) {
    let fechaAr = fecha.split("-");
    let fechaFor;
    console.log(fechaAr);
    if (fechaAr[0] == null) {
        return "Fecha no valida";
    }else if(fechaAr[1] == null) {
        return "Fecha no valida";
    }else if(fechaAr[2] == null) {
        return "Fecha no valida";
    }else{
    }
    
}

console.log(fechaFormato("20-12-2012"));