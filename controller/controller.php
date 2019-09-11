<?php
    class MvcController{

        public function RegistroUsuarioController(){
            $datos = array("nombreusuario"=>$_POST["nombreusuario"],"apellidousuario"=>$_POST["apellidousuario"],
                           "correousuario"=>$_POST["correousuario"],"cedulausuario"=>$_POST["cedulausuario"],
                           "celularusuario"=>$_POST["celularusuario"], "direccionusuario"=>$_POST["direccionusuario"],
                           "rol"=>$_POST["rolusuario"],"carnetusuario"=>$_POST["carnetusuario"],"passworduser"=>$_POST["passworduser"],
                           "passworduserc"=>$_POST["passworduserc"] );

                           $rpt = Datos::RegistroUsuarioModel($datos,"profesor");
                           

        }
    }
?>