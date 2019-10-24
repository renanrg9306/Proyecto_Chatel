<?php
    include 'conex.php';
    $conex = mysqli_connect("localhost", "agat", "1234", "bd");
    sleep(1);

    if(isset($_POST)){
        $NoCarnet = (string)$_POST['carnet'];

        $result = $conex->query("SELECT * FROM estudiantes WHERE carnet = '$NoCarnet'");
        
        if($result->num_rows > 0){
            echo '<div class="alert alert-danger"><strong>Oh no!</strong> El Carnet ya pertenece a un estudiante registrado.</div>';
        }
        else {
            echo '<div class="alert alert-success"><strong>Enhorabuena!</strong>Carnet Disponible.</div>';
        }

    }

?>