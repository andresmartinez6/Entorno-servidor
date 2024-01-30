<?php

    class modelo_videoclub{
        private $bd;
        private $videoclub;

        public function __construct(){
            $this->bd=conectar::conexion();
        }

        //CLIENTES:

        public function Insertar_clientes($id,$nombre, $apellidos, $telefono){
            $sentencia_insertarClientes = "INSERT INTO socios (id,nombre, apellidos, telefono) VALUES (?, ?, ?, ?)";
            $consulta = $this->bd->prepare($sentencia_insertarClientes);
            $consulta->bind_param("ssi", $nombre, $apellidos, $telefono);
            $consulta->execute();
            $consulta->close();
        }
    
        public function Buscar_clientes($texto_buscado){
            $sentencia_buscarClientes = "SELECT * FROM socios WHERE nombre LIKE ? OR apellidos LIKE ? OR telefono LIKE ?";
            $consulta = $this->bd->prepare($sentencia_buscarClientes);
            $texto_buscado = "%$texto_buscado%";
            $consulta->bind_param("sss", $texto_buscado, $texto_buscado, $texto_buscado);
            $consulta->execute();
            $result = $consulta->get_result();
            $consulta->close();
    
            $clientes = array();

            while ($row = $result->fetch_assoc()) {
                $clientes[] = $row;
            }
    
            return $clientes;
        }
    
        public function Modificar_datos_cliente($id, $nombre, $apellidos, $telefono){
            $sentencia_modificarCliente = "UPDATE socios SET nombre = ?, apellidos = ?, telefono = ? WHERE id = ?";
            $consulta = $this->bd->prepare($sentencia_modificarCliente);
            $consulta->bind_param("sssi", $nombre, $apellidos, $telefono, $id);
            $consulta->execute();
            $consulta->close();
        }


        //INMUEBLES:
        

    }

?>