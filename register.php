<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar Cuenta</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombreusuario" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidousuario" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class = "col-md-6">
            <label for="exampleInputEmail1">Direccion de Correo Electronico</label>
            <input class="form-control" id="exampleInputEmail1" name="correousario" type="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>  

            <div class = "col-md-6">
            <label for="exampleInputEmail1">Cedula</label>
            <input class="form-control" id="exampleInputCarnet" name="cedulausuario" type="email" aria-describedby="emailHelp" placeholder="Cedula">
            </div>  

          </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputCelular">Celular</label>
                <input class="form-control" id="exampleInputCelular" name="celularusuario" type="text" placeholder="Cedular">
              </div>
              <div class="col-md-6">
                <label for="exampleDireccion">Direccion</label>
                <input class="form-control" id="exampleDireccion" name="direccionusuario" type="text" placeholder="Direccion">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleRol">Rol</label>
                <select class="form-control" id="exampleRol" name="rolusuario" type="text" placeholder="Cedular">
                <?php
                       include 'conex.php';
                        $conex = mysqli_connect("localhost", "agat", "1234", "bd");
                        $query = mysqli_query($conex,"SELECT `idNiveles`, `NombreNivel` FROM `niveles` WHERE NombreNivel <>'Administrador'");
                            while($valores = mysqli_fetch_array($query)){
                                        echo "<option value='$valores[idNiveles]'>$valores[NombreNivel]</option>";
                              }
                ?>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleDireccion">Carnet</label>
                <input class="form-control" id="exampleCarnet" name="carnetusuario" type="text" placeholder="Carnet">
              </div>
            </div>
          </div>




          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Contraseña</label>
                <input class="form-control" id="exampleInputPassword1" name="passworduser" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmar Contraseña</label>
                <input class="form-control" id="exampleConfirmPassword" name="passworduserc" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Registrarse">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Pagina Principal</a>
          <a class="d-block small" href="forgot-password.html">olvido su Contraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="validacion.js"></script>
<?php

    require_once "model/crud.php";
    require_once "controller/controller.php";

  $registro = new  MvcController();
  $registro -> RegistroUsuarioController();

?>

</body>

</html>

