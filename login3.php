<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="stylesheet" href="admin/css/bootstrap.css">-->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="images/u.png" type="image/x-icon">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <link href="admin/sweetalert/sweetalert.css" rel="stylesheet">
  <script src="admin/sweetalert/sweetalert.min.js"></script>
  <script src="admin/sweetalert/sweetalert-dev.js"></script>
  <script src="js/jquery.js"></script>
  
</head>
   <!-- Header
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/edificio.jpg" alt="Ingenieria en Computacion" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>UNI</b></span> <span class="w3-hide-small w3-text-light-grey">Bases de Datos</span></h1>
  </div>
</header> -->


<body class="bg-dark">
 
  <div class="container" >
    <div class="card card-login mx-auto mt-5">
    
 
     <center> <div class="card-header">Acceso</div></center>
      <div class="card-body">
        <div style="text-align: center; " >
             <img src="images/uni.png">
         </div>
         <div  style="text-align: center;">
                <p style="font-weight: bold"> Introduce tus datos de acceso</p>   
         </div> 
        <form class="form-horizontal" role="form" method="post" action="login/validar.php">
          <div class="form-group"> 
          <div class="col-md-12">
            <i class="fa fa-envelope"></i> 
           <label for="exampleInputPassword1">Correo</label>
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
                <input class="form-check-input" type="checkbox"> Recordar Contraseña</label>
            </div>
          </div>
          <input type="submit" name="Submit" value="Iniciar Sesion"  class="btn btn-primary btn-block" >
         <!-- <a class="btn btn-primary btn-block" href="index.html">Acceso</a> -->
          <a href="portada.php" class="btn btn-primary btn-block">Salir</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Registrar cuenta</a>
          <a class="d-block small" href="forgot-password.html">Olvido Su contraseña?</a>
        </div>
      </div>
    </div>
        
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
