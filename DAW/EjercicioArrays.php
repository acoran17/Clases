<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios Arrays</h1>
    <p>
        <h4>Ejercicio1</h4>

    <?php $fruits = ['manzana', 'platano', 'kiwi']; ?>
    <p>
        <h4>Ejercicio2</h4>

    <?php echo "Las frutas son: " . implode(", " , $fruits); ?>
    <p>
        <h4>Ejercicio3</h4>

    <?php echo "La cantidad de elementos del array son " . count($fruits); ?>
    <p>
        <h4>Ejercicio4</h4>

    <?php $fruits[] = 'naranja'; echo "Las frutas son: " . implode(", " , $fruits);?>
    <p>
        <h4>Ejercicio5</h4>

    <?php $fruitsCopy = $fruits; echo "La copia es: " . implode(", " , $fruits);?>
    <p>
        <h4>Ejercicio6</h4>

    <?php array_unshift($fruitsCopy, 'sandía'); echo "Las frutas son: " . implode(", " , $fruitsCopy); ?>
    <p>
        <h4>Ejercicio7</h4>

    <?php
        echo "Las frutas son: " . implode(", " , $fruits);
        echo "No se modifica la original";
    ?>
    <p>
        <h4>Ejercicio8</h4>

    <?php
        if(array_search('papaya', $fruits) != null) {
            echo "Existe papaya";
        }else{
            echo "No existe papaya";
        }
    ?>
    <p>
        <h4>Ejercicio9</h4>

    <?php
        $fruits[] = 'papaya';
        echo "Las frutas son: " . implode(", " , $fruits);
    ?>
    <p>
        <h4>Ejercicio10</h4>

    <?php
        echo "La posicion de manzana es " . array_search('manzana', $fruits);
    ?>
    <p>
        <h4>Ejercicio11</h4>

    <?php
        unset($fruits[0]);
        echo "Las frutas son: " . implode(", " , $fruits);
    ?>
    <p>
        <h4>Ejercicio12</h4>

    <?php
        array_splice($fruits, 1, 0, "manzana");
        echo "Las frutas son: " . implode(", " , $fruits);
    ?>
    <p>
        <h4>Ejercicio13</h4>

    <?php
        arsort($fruits);
        echo "Las frutas son: " . implode(", " , $fruits);
    ?>
    <p>
        <h4>Ejercicio14</h4>

    <?php
        echo "Las frutas son: " . implode(", " , array_reverse($fruits));
    ?>
    <p>
        <h4>Ejercicio15</h4>

    <?php
        echo $fruits[array_rand($fruits)];
    ?>
    <p>
        <h4>Ejercicio16</h4>

    <p>
        <h4>Ejercicio 17</h4>

    <?php
        $vegetables = ['tomate', 'pimineto', 'pepino'];
        echo "Las verduras son: " . implode(", " , $vegetables);
    ?>
    <p>
        <h4>Ejercicio18</h4>
        
    <?php
        echo implode(", " , array_merge($fruits, $vegetables));
    ?>
</body>
</html>

