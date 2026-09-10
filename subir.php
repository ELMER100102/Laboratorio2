<?php
// Carpeta donde se guardarán los archivos
$carpeta = "uploads/";

$mensaje = "";
$exito = false;

if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {

    $archivo = $_FILES["archivo"];
    $nombre = basename($archivo["name"]);
    $rutaDestino = $carpeta . $nombre;

    // Verifica que la carpeta uploads exista; si no, la crea
    if (!is_dir($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    // Intenta mover el archivo desde la ubicación temporal a la carpeta uploads
    if (move_uploaded_file($archivo["tmp_name"], $rutaDestino)) {
        $exito = true;
        $mensaje = "El archivo \"$nombre\" se subió correctamente.";
    } else {
        $mensaje = "Ocurrió un error al mover el archivo al servidor.";
    }

} else {
    $mensaje = "No se pudo subir el archivo. Verifique que haya seleccionado uno.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la carga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5 text-center">

                        <?php if ($exito): ?>
                            <div class="alert alert-success" role="alert">
                                <?= htmlspecialchars($mensaje) ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger" role="alert">
                                <?= htmlspecialchars($mensaje) ?>
                            </div>
                        <?php endif; ?>

                        <a href="index.php" class="btn btn-primary mt-3">Volver al formulario</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>