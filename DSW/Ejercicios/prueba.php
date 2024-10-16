<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo 1</h1>
        <?php
            $subject = "Desarrollo del lado del servidor";
            echo $subject, "<p>";
            print "dio mio dio";
            $a = "hola";
            $$a = "mundo";
            echo "<p>$a ${$a}</p>";
            $a = "adios";
            $$a = "mundo";
            echo "<p>$a ${$a}</p>";
            $start = "hola";
            $end = "adios";
            $heredoc = <<<PASO
            "$start", podemos emplear la sintaxis "heredocs" para
            añadir 'comilla simple' y "comillas dobles en una cadena.
            $end
            PASO;
            print $heredoc;
            print "<h3>Ejercicios para practicar</h3>";
            print "<p>Ejercicio 1<p>";
                $pi = pi();
                printf ("[%.2f]\n", $pi);
            print "<p>Ejercicio 2<p>";
                $nombre = "Pedro";
                $edad = "88";
                $edadynombre = sprintf("%s tiende de edad %d", $nombre, $edad);
                print $edadynombre;
            print "<p>Ejercicio 3<p>";
                print "<pre>";
                printf("[%20s]\n", 'JavaScript');
                printf("[%20s]\n", 'PHP');
                printf("[%20s]\n", 'Java');
                print("</pre>");
            print "<p>Ejercicio 4<p>";
                $fecha = sprintf("%2d - %2d - %2d", 123, 62, 20235);
                print $fecha;
                echo "<br>";

            print "<p>Dime los impares entre dos numeros<p>";
            function impares($start, $end = 10) {
                for ($i=$start; $i <= $end; $i++) { 
                    if ($i % 2 !== 0) {
                        printf($i, ", ");
                    }
                }
            }
            impares(2, 10);
            print "<p>Dime los impares entre dos numeros modo lista<p>";
            function impares2($start, $end = 10) {
                for ($i=$start; $i <= $end; $i++) { 
                    if ($i % 2 !== 0) {
                        echo "<li>$i</li>";
                    }
                }
            }
            
        ?>
        <ul>
            <?php
                impares2(2, 10);
            ?>
        </ul>

        <table>
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <?php
            foreach ($_SERVER as $key => $subject) {
            ?>
            <tr>
                <tbody>
                    <td><?= $key?></td>
                    <td><?php echo $subject?></td>
                </tbody>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        function isPrime($p) : bool {
            for ($i = 2;$i < $p;$i++) { 
                if ($p % $i == 0) {
                    return false;
                }
            }
            return true;

        }
        function HowManyPrimes($start, $amount = 10) : array{
            $listp = [];
            for ($i=$start; $i <= $amount ; $i++) { 
                if(isPrime($i) == true) {
                    $listp[] = $i;
                }
            }
            return $listp;
        }

        echo "Los numeros primos son: " . implode(", " , HowManyPrimes(2, 40));
        ?>
</body>
</html>