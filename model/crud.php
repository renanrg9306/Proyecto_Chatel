<?php
    require_once "model/conexion.php";
    class Datos{

        public function RegistroUsuarioModel($DatosModel,$Tabla){
            if($Tabla == "Profesor"){
                $stmt = Conexion::conectar()->prepare("");
            }
            
        }
    }

?>