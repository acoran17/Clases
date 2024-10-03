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
            <input type="hidden" name="MAX_FILE_SIZE" value="200000">
            <input type="file" name="file" id="file">
    </p>
    <input type="submit" value="Enviar">
    </form>
    <?php 
        if (!empty($_FILES['file'])) {
            $filesTextDir = "text/";
            $filesBinDir = "bin/";
            var_dump($_FILES);
            if ($_FILES['file']['error'] != 0) {
                echo "<h2>Ha habido un error</h2>";
            }else{
                if($_FILES['file']['type'] === 'text/plain' || $_FILES['file']['type'] === 'text/html'){
                    move_uploaded_file($_FILES['file']['tmp_name'], $filesTextDir . $_FILES['file']['name']);
                    echo "<p>Se ha metido en txt</p>";
                    $destination = $filesTextDir . basename($_FILES['file']['name']);
                    echo htmlspecialchars(file_get_contents($destination));
                }else{
                    move_uploaded_file($_FILES['file']['tmp_name'], $filesBinDir . $_FILES['file']['name']);
                    echo "<p>Se ha metido en Bin</p>";
                }
            }
        }
        
    ?>
</body>
</html>

<!-- <?php
// // Directorios para almacenar archivos
// $textDir = 'text/';
// $binDir = 'bin/';

// // Crear carpetas si no existen
// if (!is_dir($textDir)) {
//     mkdir($textDir, 0777, true);
// }
// if (!is_dir($binDir)) {
//     mkdir($binDir, 0777, true);
// }

// Verificar si se ha enviado el formulario
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
//     $file = $_FILES['file'];
    
//     // Obtener información del archivo
//     $fileName = $file['name'];
//     $fileTmpPath = $file['tmp_name'];
//     $fileType = $file['type'];
//     $fileSize = $file['size'];
//     $fileError = $file['error'];

//     // Comprobar si hubo errores
//     if ($fileError === UPLOAD_ERR_OK) {
//         // Determinar la carpeta de destino
//         if (strpos($fileType, 'text/') === 0 || $fileType === 'text/html') {
//             $destination = $textDir . basename($fileName);
//             // Mover el archivo a la carpeta de texto
//             move_uploaded_file($fileTmpPath, $destination);
//             $message = "Archivo subido correctamente a la carpeta 'text'.";
//             $showContent = true;
//         } else {
//             $destination = $binDir . basename($fileName);
//             // Mover el archivo a la carpeta bin
//             move_uploaded_file($fileTmpPath, $destination);
//             $message = "Archivo subido correctamente a la carpeta 'bin'.";
//             $showContent = false;
//         }
//     } else {
//         $message = "Error al subir el archivo.";
//     }
// }
//?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h1>Subir Archivo</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="file">Selecciona un archivo:</label>
        <input type="file" id="file" name="file" required>
        <br><br>
        <input type="submit" value="Subir">
    </form>

    //<?php 
    // Mostrar mensaje de resultado
    // if (isset($message)) {
    //     echo "<p>$message</p>";
    // }

    // Mostrar contenido del archivo si es de tipo texto
    // if (isset($showContent) && $showContent) {
    //     echo "<h2>Contenido del Archivo:</h2>";
    //     echo "<pre>";
    //     echo htmlspecialchars(file_get_contents($destination)); // Mostrar contenido de forma segura
    //     echo "</pre>";
    // }
    ?>
</body>
</html> -->