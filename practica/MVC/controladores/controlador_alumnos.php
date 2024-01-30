<?php
//llamada al modelo
require_once "modelos/modelo_alumnos.php";

$per = new modelo_alumnos();
if ($_POST['nom'] != "") {
    //si han introducido algo, llamo a un metodo
    $datos = $per->get_alumnos_nombre($_POST["nom"]);
} else {
    //si no han introducido nada , llamo a otro metodo
    $datos = $per->get_alumnos();
}
//llamada a la vista
//a la vista le da igual si hay alumnos en $datos o uno solo
include "vistas/vista_alumnos.php";
