<?php
require_once 'bd.php';
require_once 'modelos/modelo_videoclub.php';



public function MostrarMenuAdmin() {
    echo '<nav>';
    echo '<ul>';
    echo '<li><a href="listado_series.php">Series</a></li>';
    echo '<li><a href="listado_plataformas.php">Plataformas</a></li>';
    echo '<li><a href="listado_socios.php">Socios</a></li>';
    echo '<li><a href="listado_comentarios.php">Comentarios</a></li>';
    echo '<li><a href="salir.php">Salir</a></li>';
    echo '</ul>';
    echo '</nav>';
}



//SOCIOS:

public function Ver_comentarios($serie_id) {
    // Lógica para mostrar comentarios de una serie
    $comentarios = $this->modelo->Obtener_comentarios_serie($serie_id);
    $this->vista->Mostrar_comentarios($comentarios);
}

public function Añadir_comentario($socio_id, $serie_id, $fecha, $texto) {
    // Lógica para añadir comentario
    $this->modelo->Añadir_comentario($socio_id, $serie_id, $fecha, $texto);
}

public function Borrar_comentario($socio_id, $serie_id) {
    // Lógica para borrar comentario propio
    $this->modelo->Borrar_comentario($socio_id, $serie_id);
}


//CONTROL DE ACCESO:

public function Verificar_permisos($usuario_id, $permiso) {
    $roles = $this->modelo->Obtener_roles_usuario($usuario_id);

    // Verificar si alguno de los roles tiene el permiso necesario
    foreach ($roles as $rol) {
        $tienePermiso = $this->modelo->Verificar_permiso_rol($rol['id'], $permiso);
        if ($tienePermiso) {
            return true;
        }
    }

    return false;
}


include 'vistas/vista_videoclub';
?>