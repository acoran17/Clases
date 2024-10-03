<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <textarea name="text" id="text">Escribe aqui el texto que quieras</textarea>
        <textarea name="words" id="words">Escribe las palabras que quieras encontrar en el texto</textarea>
        <input type="submit" value="Comprobar">
    </form>

    <?php
        if (!empty((String)$_GET['text']) && !empty((String)$_GET['words'])) {
            $text = $_GET['text'];
            $words = $_GET['words'];
            $wordsArray = explode(" ", $words);
            foreach ($wordsArray as $word) {
                // si fuera para una letra seria strpos()
                $res = str_contains($text, $word);
                if ($res === true) {
                    printf("<li>%s = true</li>", $word);
                }else{
                    printf("<li>%s = false</li>", $word);
                }
            }
        }
    ?>
</body>
</html>