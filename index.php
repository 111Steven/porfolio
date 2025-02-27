<?php
    $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                    <img src="images/cohete.svg" alt="">
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                    <p class="px-5 py-2">Bienvenid@ a mi sitio web sobre aprendizaje en sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5"> 
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-3">
        <div class="btn-whatsapp px-3 pb-4">
        <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://www.instagram.com/111steven__/">SteveCompany</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:stevenrojas479@gmail.com">stevenrojas479@gmail.com</a>
            </div>
        </div>
    </footer>
    
</body>
</html>