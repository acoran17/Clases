<!-- Continuando con el problema anterior, ahora nos piden hacer 2 cambios:

Nos solicitan que mostremos la página requerida por el usuario. Por ejemplo, si han solicitado la página 2, debemos mostrar los productos del 10 al 19, es decir, cada página tiene 10 productos.
Ya no es necesario filtrar la categoría.
El valor de la página solicitada lo tendremos disponible en la variable $pagina. El resto del ejercicio es igual que el anterior. -->
<?php
$total_productos = sizeof( $arrayProductos );
$posicion_inicial = ($pagina - 1) * 10;
$posicion_final = $posicion_inicial + 9;
for ( $i = $posicion_inicial; $i <= $posicion_final && $i < $total_productos; $i++ ) {
$producto = $arrayProductos[$i];
echo $productp['nombre'];
 
}
?>