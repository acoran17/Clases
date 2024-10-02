<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <p>
        Envia un documento:
            <input type="file" name="file" id="file">
    </p>
    <input type="submit" value="Enviar">
    </form>
    <?php 
        if (!empty($_FILES['file'])) {
            $filesDir = "files/";
            var_dump($_FILES);
            if ($_FILES['file']['error'] != 0) {
                echo "<h2>Ha habido un error</h2>";
            }else{
                printf("<p>%s</p>", $_FILES['file']['name']);
            }
        }
    ?>
</body>
</html>