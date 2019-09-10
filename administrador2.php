<php>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BD_UNI</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
</head>
   <style>
      table {
                width: auto;
                margin: auto;
            }

            td { 
                padding: 5px 10px;
                text-align: center;
                border: 0px;
             
            }

            tr:nth-child(1) {
                background: #dedede;
                padding-bottom: auto;
            }
    
    </style>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

   <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <img src="images/u.png" width="30" class="d-inline-block alingn-top" alt="Logo UNI">
    <a class="navbar-brand" href="index.html">Base de Datos</a>
            
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlumnos" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Alumnos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAlumnos">
            <li>
              <a href="index.html">Pruebas</a> 
            </li>
            <li>
              <a href="index.html">Examenes</a> 
            </li>
              <li>
                  <a href="index.html">Laboratorios</a>
              </li>
          </ul>
        </li>
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesor">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfesor" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Profesor</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProfesor">
             <li>
                  <a  href="index.html">Pruebas</a>
            </li>
            <li>
                  <a  href="index.html">Examenes</a>
            </li>
            <li>
                  <a  href="blank.html">Laboratorios</a>
            </li>
               <li>
                  <a href="index.html"> Reportes </a>
              </li>
          </ul>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Administrador</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Alumnos</a>
            </li>
            <li>
              <a href="register.html">Profesores</a>
            </li>
            <li>
              <a href="forgot-password.html">Examenes</a>
            </li>
            <li>
              <a href="blank.html">Laboratorios</a>
            </li>
              <li>
                  <a href="index.html"> Pruebas </a>
              </li>
               <li>
                  <a href="index.html"> Reportes </a>
              </li>
          </ul>
        </li>
   
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="portada.html">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Uni on line</span>
          </a>
        </li>
      </ul> 
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">1111111111111111111111111111111</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="portada.php" >
            <i class="fa fa-fw fa-sign-out" ></i>Salir</a>
        </li>
      </ul>
    </div>
        </nav>
            
          <!--*************Comienzo del contenido del contenido de las unidades*******-->
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Alumnos</a>
        </li>
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
        </div>
        
            <!--*************************carroussel******************************-->
        
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="rounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        <div class="carousel-item">
           <img class="rounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        <div class="carousel-item">
            <img class="img-fluidrounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
             </a>
        </div>
        
                    <!-- *******************Table.com************************** -->
<div class="table-responsive-md ">

    <table >
        <tbody>
             
                
               <thead>
                <center>  <th1>Descripcion de las unidades</th1></center> 
                   
               </thead>
                
                <tr style="height: 83%;">
                <td style="width: 24%; height: 83%;">&nbsp;
                
                <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 24%; height: 83px;">&nbsp;
                     <p aling="Justify" > Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran </p>
                   </td>
                    <td style="width: 24%; height: 83px;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>
                    </td>
                <td style="width: 398.152%; height: 83px;">&nbsp;4</td>
                </tr>
                <tr style="height: 80px;">
                 
                <td style="width: 24%; height: 80px;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 24%; height: 80px;">&nbsp;6</td>
                <td style="width: 24%; height: 80px;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>
                    
                    </td>
                <td style="width: 398.152%; height: 80px;">&nbsp;8</td>
                </tr>
                <tr style="height: 72px;">
                <td style="width: 24%; height: 72px;">&nbsp;
                    <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>    
                   
                    </td>
                <td style="width: 24%; height: 72px;">&nbsp;10</td>
                <td style="width: 24%; height: 72px;">&nbsp;
                 <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">Inidad I</div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something </a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>
                              <a class="dropdown-item" href="#">Dropdown link</a>    
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 398.152%; height: 72px;">&nbsp;12</td>
                </tr>
        </tbody>
</table>
  </div>

        

         <!-- Iconos con las unidades>
      <div class="dropdown show" >
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Inidad I</div>
            </div>
             </div>
         <div class=" text-white bg-primary o-hidden h-100">    
            <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          
              <span class="float-left">Ver Detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </button> 
              
              <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>   
             </div> 
        </div>
         
 
     <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Unidad II</div>
            </div>
              </div>
            <div class=" text-white bg-primary o-hidden h-100">    
            <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                
            <span class="float-left">Ver Detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                
            </button>  
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div> 
          </div>
        
          </div>
           
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Unidad III</div>
            </div>
              
           <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              <span class="float-left">Ver Detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </button>
              <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div> 
            </div>
        </div>
        </div> 
           
       
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Unidad IV</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Ver Detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>     -->   
            
        
     <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Base de Datos UNI derechos reservados 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seguro que desea Salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Seleccione la opcion de salir si esta seguro!!</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="portada.php">Salir</a>
              </div>
            </div>
          </div>
        </div>   
    
        
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
</php>