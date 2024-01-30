<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($datos as  $value) {
        echo "{$value['dni']}, {$value['nombre']}, {$value['edad']} <br>";
    }
    ?>
</body>

</html>