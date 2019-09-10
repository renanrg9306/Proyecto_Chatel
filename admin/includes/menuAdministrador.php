       <?php
       include ('conex.php');
        $conex = mysqli_connect("localhost", "agat", "1234", "bd");

        $TotalEstudiantes = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM estudiantes"));// or die(mysql_error());
        $TotalDocentes = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM profesor"));
        $TotalAsignaturas = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM asignaturas"));
        $TotalGrupos = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM grupo"));
        $TotalHorarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM horarios"));
        $TotalUsuarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM usuarios"));
        $TotalNumeroAsignaciones = mysqli_num_rows(mysqli_query($conex,"SELECT * FROM numeros_asignaciones"));
         $TotalUsuarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM usuarios"));
        $Totalasignaciones = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM asignaciones"));
        ?>

         <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Estudiantes</h4>
                         <p>Total de Estudiantes: <span class="label label-danger pull-right"><?php echo $TotalEstudiantes ?></span></p>
                         <a href="estudiantes.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-sign-in fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Asignaciones</h4>
                       <p>Total de Asignaciones: <span class="label label-danger pull-right"> <?php echo $Totalasignaciones ?></span></p>
                      <a href="asignaciones.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
          <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-group fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Profesor</h4>
                       <p>Total de Profesor: <span class="label label-danger pull-right"><?php echo $TotalDocentes ?></span></p>
                       <a href="profesor.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-sort-numeric-asc fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Numeros Asignaciones</h4>
                         <p>Total de Asignaciones: <span class="label label-danger pull-right"><?php echo $TotalNumeroAsignaciones ?></span></p>
                       <a href="numero_asignaciones.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-clipboard fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Reportes</h4>
                    <p>Total de Reportes: <span class="label label-danger pull-right">10</span></p>
                       <a href="#" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                       <h4 class="media-heading">Asignaturas</h4>
                       <p>Total de Asignaturas: <span class="label label-danger pull-right"><?php echo $TotalAsignaturas ?></span></p>
                       <a href="asignaturas.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                 <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-list-ol fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Grupos</h4>
                      <p>Total de Grupos: <span class="label label-danger pull-right"><?php echo $TotalGrupos ?></span></p>
                      <a href="grupos.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
             <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                            <h4 class="media-heading">Horarios</h4>
                        <p>Total de Horarios: <span class="label label-danger pull-right"><?php echo $TotalHorarios ?></span></p>
                      <a href="horarios.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                      <h4 class="media-heading">Usuarios</h4>
                        <p>Total de Usuarios: <span class="label label-danger pull-right"><?php echo $TotalUsuarios ?></span></p>
                        <a href="administrador.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Backups</h4>
                      <p>Copias y Restauracion de BD <span class="label label-danger pull-right"></span></p>
                      <a href="copias_seguridad2.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                            <h4 class="media-heading">Configuraciones</h4>
                        <p>Configuracion de Cuenta<span class="label label-danger pull-right"></span></p>
                      <a href="cambiar_foto.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
          3
            </div>
        </div>


         <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                
            </div>
            <div class="col-md-3 col-sm-6">
        
            </div>
            <div class="col-md-3 col-sm-6">
         4
            </div>
            <div class="col-md-3 col-sm-6">
        5
            </div>
        </div>