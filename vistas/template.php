<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software</title>
    <!--estilos css-->
    <link rel="stylesheet" href="./vistas/css/style.css">
</head>
<body>
    <header>
        <h1>LOGO EMPRESA SENATI</h1>
    </header>
    <?php include "layout/navegacion.php"; ?>
    <section>
        <!--llamar al controlador que contiene nuestra pagina internas-->
        <?php
        $enlace = new PlantillaControlador();
        $enlace -> enlacesPaginaController();
        ?>
    </section>
</body>
</html>