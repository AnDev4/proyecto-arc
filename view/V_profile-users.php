<?php
// Trae controlador de db rutas
require_once('../model/Conection.php');

session_start();
if (!isset($_SESSION['tbl_usuario'])) {
    echo '
            <script>
                alert("Debes inicar sesion");
                window.location = "V_login.php";
            </script>
            ';
    //header('location: login.php');
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/profile-users.css">
    <title>Index</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <i class='bx bxs-plane-take-off'></i>
                    <a class="navbar-brand" href="#">Hidden brand</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="ingresar" action="vuelos.php">
                        <button class="btn btn-outline-success" type="submit">volver</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white user-section"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="./assets/img/destination2.jpg" alt="Avatar" class="img-fluid my-5"
                                    style="width: 80px;" />
                                <h5>Papucho Flensho</h5>
                                <i class='bx bxs-plane-take-off'></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Información</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Fecha de nacimiento</h6>
                                            <p class="text-muted">Lorem ipsum</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Teléfono</h6>
                                            <p class="text-muted">123 456 789</p>
                                        </div>
                                    </div>
                                    <h6>Usuario</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Correo</h6>
                                            <p class="text-muted">info@example.com</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>ID</h6>
                                            <p class="text-muted">4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="d-flex" role="logout" action="../model/M_logout.php">
                        <button class="btn btn-outline-success" type="submit">cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-secondary text-white text-center text-md-start">
        <footer class="bg-secondary text-white text-center text-md-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Footer Content</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                            aliquam voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class='bx bxs-envelope'></i>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <i class='bx bxl-linkedin-square'></i>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <i class='bx bxl-youtube'></i>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <i class='bx bxl-telegram'></i>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0">Links</h5>

                        <ul class="list-unstyled">
                            <li>
                                <i class='bx bxl-instagram-alt'></i>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <i class='bx bxl-facebook-circle'></i>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <i class='bx bxl-twitter'></i>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <i class='bx bxl-reddit'></i>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://google.com/">google.com</a>
            </div>
        </footer>




        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>