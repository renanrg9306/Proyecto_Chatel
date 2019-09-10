<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="stylesheet" href="admin/css/bootstrap.css">-->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <link rel="shortcut icon" href="images/u.png" type="image/x-icon">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->

  
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="login/css/main.css">
</head>

<body class="cover" style="background-image: url(login/assets/img/edificio.jpg);">
 
        <form class="full-box logInForm" role="form" method="post" action="login/validar.php" autocomplete="off" style="color:white;">
          
     <center> <div class="card-header">Login</div></center>
      <div class="">    </div>
        <div style="text-align: center; " >
             <img src="images/unip.png" width="80" height="70">
         </div>
         <div  style="text-align: center;">
                <p style="font-weight: bold"> Introduce tus datos de acceso</p>   
         </div> 
          <div class="form-group"> 
          <div class="col-md-12">
            <i class="fa fa-envelope"></i> 
           <label class="control-label" for="UserEmail">Correo</label>
            <input type="text" style="text-align: center;" class="form-control" name="usuario" placeholder="Introduce tu Correo" required="true" title="Ingrese su contraseña" >   
             </div>                             
          </div>
          <div class="form-group">
           <div class="col-md-12">
               <i class="fa fa-lock"></i>
            <label for="exampleInputPassword1">Contraseña</label>
           <input type="password" style="text-align: center;" class="form-control" name="password" placeholder="Introduce tu Contraseña" required="true">
         </div>
          </div>
           <center><h6 style="color:green;">Contacte al administrador para obtener sus credenciales de acceso</h6></center>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">&nbsp; __Recordar Contraseña</label>
            </div>
          </div>
          <input type="submit" name="Submit" value="Iniciar Sesion"  class="btn btn-primary btn-block" >
         <!-- <a class="btn btn-primary btn-block" href="index.html">Acceso</a> -->
          <a href="index.php" class="btn btn-primary btn-block">Salir</a>
       
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Registrar cuenta</a>
          <a class="d-block small" href="forgot-password.html">Olvido Su contraseña?</a>
        </div>
   </form>
   
  <!-- Bootstrap core JavaScript-->

  <!--====== Scripts -->
	<script src="login/js/jquery-3.1.1.min.js"></script>
	<script src="login/js/bootstrap.min.js"></script>
	<script src="login/js/material.min.js"></script>
	<script src="login/js/ripples.min.js"></script>
	<script src="login/js/sweetalert2.min.js"></script>
	<script src="login/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="login/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>
