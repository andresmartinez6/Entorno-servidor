<?php

    class conectar{
        public static function conexion(){
            $conexion=new_msqli("localhost","root","","series");
            $conexion->set_charset("utf-8");
            return $conexion;
        }
    }

?>