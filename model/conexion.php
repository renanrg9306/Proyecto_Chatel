<?php
    class Conexion{
        function conectar(){
            $link = new PDO("mysql:host=localhost;dbname=bd","agat","1234");
            return $link;
        }
    }

$a = new Conexion();
$a -> conectar();
?>