<?php

//esta caroeta es para guardar los archivos, el pdf lo pide del Lab2
$carpeta = "uploads/";

//asi recibe el archivo q se sube
if (isset($_FILES["archivo"])) {
    
    $archivo = $_FILES["archivo"];
    $nombre = $archivo["name"];

    //falta terminar la subida 

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivo</title>
</head>

<body>

    <h1>Subir archivo</h1>

</body>
</html>