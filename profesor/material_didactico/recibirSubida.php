<?php
include_once '../../admin/conex.php';
session_start();
 $codigo = $_SESSION["Codigo"];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");


if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "pdf/archivos/" . $nombre;
    if ($nombre != "") {
         if ($tamanio < 1000 * 1024 ) { //validando que el archivo sea menor a 1 MB
                 if (($tipo == "application/pdf") || ($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($tipo == "application/msword")) {       //validando que el archivo sea de tipo PDF y WORD (.docx, .doc)          
                   if (copy($ruta, $destino)) {
                    $descripcion= $_POST['descripcion'];
                    $codigo1= $_POST['codigo'];
                    $numero= $_POST['numero'];
                    $fecha =date("Y-m-d");
                  // $sql = "INSERT INTO material_didactico (Descripcion, Archivo,CodigoMaterial,Fecha_subida,idNumeroAsignacion, //idDocente) VALUES('$descripcion','$nombre','$codigo1','$fecha','$numero','$codigo')";
                    $query = mysqli_query($conex, "INSERT INTO material_didactico (Descripcion, Archivo,CodigoMaterial,Fecha_subida,idNumeroAsignacion, idProfesor) VALUES('$descripcion','$nombre','$codigo1','$fecha','$numero','$codigo')");
                        if($query){
                                echo '<script> alert("El Libro PDF se ha subido al servidor con Exito.");</script>';
                                echo '<script> window.location="subirMaterial.php"; </script>';
                          }
                } else {
                      echo '<script> alert("Error al subir el Libro.");</script>';
                }

            }
           else{
             echo '<script> alert("Solo se permiten archivos PDF.");</script>';
             echo '<script> window.location="subirMaterial.php"; </script>';
           }  
         }
         else{
            echo '<script> alert("El Archivo es muy Grande.");</script>';
            echo '<script> window.location="subirMaterial.php"; </script>';
         }
    }
}

?>