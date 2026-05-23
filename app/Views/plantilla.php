<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
</head>

<body>
<style>
    body {
        background-color: #F9FAFB;
    }
</style>
    <nav class="navbar navbar-expand-lg" style="padding: 18px; background-color: #2d3436; color: #fff; font-size: 24px; font-weight: 700; font-family: Montserrat">
        <div class="container-fluid">
            <a href="<?= base_url('/') ?>" class="navbar-brand" style=" color: #fff; font-size: 26px; font-weight: bold;">CATALOGO DE PRODUCTOS</a>
            <div class="dropdown ms-auto">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #2980B9;">
                    Articulos
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="<?= base_url('/hogar') ?>">HOGAR</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/electro') ?>">ELECTRONICOS</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/limpieza') ?>">LIMPIEZA</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/acercade') ?>">ACERCA DE</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="card" style="border-style: none;">
        <?= $this->renderSection('content') ?>
    </div>
</body>
<footer style="font-family: Montserrat; padding: 8px; background-color: #2d3436; color: #fff; text-align: center; font-weight: bold; position: fixed; bottom: 0; width: 100%;">Rodrigo Ernesto Chavez Miranda</footer>


</html>