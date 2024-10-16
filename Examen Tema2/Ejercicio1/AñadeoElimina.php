<?php
    function AddOrRemove($numbers, $number) {
        //compruebo si existe el numero en el arrray
        if(array_search($number, $numbers) == null) {
            //si no existe lo añado al final del array
            $numbers[] = $number; 
            //y devuelvo el array con el numero insertado al final
            return "No existe asi que la añado: " . implode(", ", $numbers);
        }else{
            //si ya existe el numero borro el numero en esa posicion
            unset($numbers[array_search($number, $numbers)]);
            //devuelvo el array con el numero eliminado
            return "Ya existe el numero asi que lo borro: " . implode(", ", $numbers);
        }
    }

    echo AddOrRemove([1, 2, 3, 4, 5],3);
    echo "<p>";
    echo AddOrRemove([1, 2, 4, 5],3);