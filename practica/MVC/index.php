<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>

<body>
    <?php
    echo "<form action='#' method='post'>
    NOMBRE DE ALUMNO <input type='text' name='nom'>
    <br><input type='submit' name='enviar'>
    </form>";

    if (isset($_POST['enviar'])) {
        include "bd/bd.php";
        include "controladores/controlador_alumnos.php";
    }
    ?>
</body>

</html>