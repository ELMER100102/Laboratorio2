<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grupo 1 - Carga de archivos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-sm border-0">

                    <div class="card-body p-5">

                        <h1 class="text-center mb-2">
                            Grupo 1
                        </h1>

                        <p class="text-center text-secondary mb-4">
                            Elmer López · Derek Farley · Naygell Arias
                        </p>

                        <hr class="mb-4">

                        <h4 class="mb-3">
                            Cargar archivo
                        </h4>

                        <form action="subir.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-4">
                                <label for="archivo" class="form-label">
                                    Seleccione un archivo
                                </label>

                                <input
                                    type="file"
                                    class="form-control"
                                    id="archivo"
                                    name="archivo"
                                    required>

                                <div class="form-text">
                                    Puede seleccionar una imagen o un documento PDF.
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Subir archivo
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>