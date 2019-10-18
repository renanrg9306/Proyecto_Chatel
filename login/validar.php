
<?php session_start(); ?>

		<?php
			include '../admin/conex.php';
			if(isset($_POST['usuario'])){
				
			$usuario =mysqli_real_escape_string($conexion , $_POST['usuario']);
			$pw = mysqli_real_escape_string($conexion , $_POST['password']);
                

			//	$numero = srand((double)microtime()*1000000);

				$log = mysqli_query($conexion,"SELECT U.idUsuario,U.idPersona, U.NombreUsuario,U.ContUsuario,U.idNivel FROM usuarios As U INNER JOIN persona as P ON P.idPersona = U.idPersona WHERE U.NombreUsuario= '$usuario'  AND U.ContUsuario='$pw'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);

					$_SESSION["NombreUsuario"] = $row['NombreUsuario']; 
					  $_SESSION["idNivel"] = $row['idNivel']; 
					  $_SESSION["idUsuario"] = $row['idUsuario'];
					  $_SESSION["idPersona"] = $row['idPersona'];
				  	if ($_SESSION["idNivel"] == 1) {
				  		echo '<script> window.location="../admin/paneladmin.php"; </script>';
				  	}
					  	  elseif ($_SESSION["idNivel"] == 2) {
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
