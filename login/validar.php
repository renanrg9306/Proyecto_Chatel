
<?php session_start(); ?>

		<?php
			include '../admin/conex.php';
			if(isset($_POST['usuario'])){
				
			$usuario =mysqli_real_escape_string($conexion , $_POST['usuario']);
			$pw = mysqli_real_escape_string($conexion , $_POST['password']);
                

			//	$numero = srand((double)microtime()*1000000);

				$log = mysqli_query($conexion,"SELECT * FROM usuarios WHERE NombreUsuario= '$usuario'  AND ContUsuario='$pw'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);

					$_SESSION["NombreUsuario"] = $row['NombreUsuario']; 
				  	$_SESSION["idNiveles"] = $row['idNiveles']; 
				  	$_SESSION["Codigo"] = $row['Codigo']; 
				  	if ($_SESSION["idNiveles"] == 1) {
				  		echo '<script> window.location="../admin/paneladmin.php"; </script>';
				  	}
					  	  elseif ($_SESSION["idNiveles"] == 2) {
					  	 	echo '<script> window.location="../profesor/profesor.php"; </script>';
					  	 }

							 else {
						  	 	echo '<script> window.location="../alumnos/estudiantes.php"; </script>';
						  	 	echo $numero;
						  	 }
				}
				else{
				echo '<script> alert("Usuario o contraseña incorrectos. ");</script>';
				echo '<script> window.location="../login.php"; </script>';
				}
			}
		?>	
