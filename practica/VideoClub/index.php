<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <?php
    require_once 'controlador_videoclub.php';
    require_once 'vista_videoclub.php';
    
    $controlador = new ControladorVideoclub();
    $vista = new VistaVideoclub();
    
    // Lógica para manejar las peticiones del usuario y llamar a los métodos correspondientes del controlador
    
    // Ejemplo de uso:
    $controlador->insertarCliente($datos);
    $controlador->buscarClientes($filtros);
    ?>

</body>
</html>