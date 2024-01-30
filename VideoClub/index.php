<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>index</title>
</head>

<body>

<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../imgs/palomitas.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="../imgs/palomitas.png" alt=""></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Series</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Plataformas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Acceder</a></li>
                                    <li><a class="dropdown-item" href="#">Series</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-success" type="submit">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="series.php">Series</a></li>
                <li><a href="plataformas.php">Plataformas</a></li>
                <li><a href="acceder.php">Acceder</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <!-- Sección de últimos lanzamientos -->
        <h2>Últimos Lanzamientos</h2>
        <!-- Agrega aquí el código para mostrar los últimos lanzamientos -->
    </section>
    
    <section>
        <!-- Sección de comentarios -->
        <h2>Últimos Comentarios</h2>
        <!-- Agrega aquí el código para mostrar el carrousel de comentarios -->
    </section>
    
    <footer>
        <!-- Pie de página personalizado -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <?php
    // require_once 'controlador_videoclub.php';
    // require_once 'vista_videoclub.php';

    // $controlador = new controlador_videoclub();
    // $vista = new vista_videoclub();

    // Lógica para manejar las peticiones del usuario y llamar a los métodos correspondientes del controlador

    // Ejemplo de uso:
    // $controlador->insertarCliente($datos);
    // $controlador->buscarClientes($filtros);
    // 
    ?>

</body>

</html>