<?php
    $pg = "sobre-ni";
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
    <title>Sobre mi</title>
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row mb-5">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-5 pt-3">Sobre mi</h1>
                    <p>Apasionado por la tecnología y gestión de proyectos. Soy estudiante de cursos de programación
                        Full Stack y de Base de datos.</p>
                        <div class="my-5">
                            <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                        </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center">
                    <img src="images/Steven.jpg" alt="Steven Rojas" class="foto-perfil">
                </div>
        </section>
        <section id="Stack-tecnologico">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnologico
                        </h2>
                    </div>
                </div>
                <div class="row sobre-mi">
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>JavaScript</h3>
                            <img src="images/javascript.jpeg" alt="Javascript">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpg" alt="PHP">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="html5">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="images/react.png" alt="React.js">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jquery.png" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.jpg" alt="Bootstrap">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.jpg" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/logo-mysql.png" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="CSS">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>Git</h3>
                            <img src="images/git.png" alt="Git">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/ASF_Logo.png" alt="Apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnología mb-4 pt-5">
                            <h3>Mercadopago</h3>
                            <img src="images/mercado-pago.png" alt="Mercadopago">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i>
                            Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row  shadow">
                    <div class="col-3 d-none d-sm-block text-center">
                        <img src="images/descarga.png" alt="Bar de la muerte" class="img-fluid gris">
                    </div>
                    <div class="col-sm-9 mt-4">
                        <h3>Empleado en un bar</h3>
                        <h4>Bar de la muerte</h4>
                        <h5>2019 - 2020</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere explicabo sequi dolor
                            architecto, eveniet aliquid dignissimos quis. Officiis, ut. Ea maxime eveniet itaque nihil
                            velit vitae facilis deleniti nemo numquam.</p>
                    </div>
                </div>
        </section>
        <section id="formacion-academica">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"></i>
                            Formacion academica
                        </h2>
                    </div>
                </div>
                <div class="row border shadow">
                    <div class="col-3 d-none d-sm-block text-center">
                        <img src="images/instituto.jpg" alt="Instituto Tecnisistemas" class="img-fluid gris">
                    </div>
                    <div class="col-sm-9 mt-4">
                        <h3>Bachillerato culminado</h3>
                        <h4>Instituto Tecnisistemas</h4>
                        <h5>2021 - 2024</h5>
                        <p>https://institutotecnisistemas.com/</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="curso-desarrollo">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>
                        <i class="fa-solid fa-graduation-cap"></i>
                        Curso de desarrollo profesional
                    </h2>
                </div>
            </div>
            <div class="row border shadow">
                <div class="col-3 d-none d-sm-block p-5">
                    <img src="images/logo-depcsuite.svg" alt="DEPCSUITE SA" class="img-fluid gris">
                </div>
                <div class="col-sm-9 mt-4">
                    <h3>FULL STACK LIBRE MODULO 1 - FULL STACK LIBRE MODULO 2</h3>
                    <h4>DEPCSUITE SA</h4>
                    <h5>En proceso</h5>
                    <p>Expedicion: Ene 2025</p>
                </div>
            </div>
        </div>
        </section>
        <section id="idiomas-hobbies">
            <div class="container">
                <div class="row">
                    <div class="col-6 pt-5 pb-4">
                        <div class="row border shadow">
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div class="col-2">
                                <h2>IDIOMAS</h2>
                                <ul>
                                <li>ESPAÑOL - Nativo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pt-5 pb-4">
                        <div class="row border shadow">
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                            </div>
                            <div class="col-2">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Dormir</li>
                                    <li>Soplar</li>
                                    <li>PC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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