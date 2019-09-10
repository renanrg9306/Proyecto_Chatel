<?php include ('../admin/conex.php');
session_start();
$codigo = $_SESSION["Codigo"];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$rutaservidor='images/fotos_perfil';
$rutatemporal=$_FILES['foto']['tmp_name'];
$nombrefoto=$_FILES['foto']['name'];
 $tipo = $_FILES['foto']['type'];
$rutadestino=$rutaservidor.'/'.$nombrefoto;
move_uploaded_file($rutatemporal, $rutadestino);

 if (($tipo == "image/jpeg") || ($tipo == "image/png") || ($tipo == "image/jpg")) 
     {  
		$sql="UPDATE estudiantes SET Foto = '$rutadestino' where idEstudiantes = '$codigo'";
		$res=mysqli_query($conexion,$sql);
		if($res){ 
		 echo '<script> alert("Se ha actualizado su Foto.");</script>';
		 echo '<script> window.location="estudiantes.php"; </script>';			
		}
		else {
		 echo '<script> alert("Error al actualizar su Foto.");</script>';
		 echo '<script> window.location="estudiantes.php"; </script>';
			 }

    }
    
	else{
		 echo '<script> alert("Solo se permiten imagenes de Tipo PNG y JPG.");</script>';
		 echo '<script> window.location="estudiantes.php"; </script>';
	     }



?>
