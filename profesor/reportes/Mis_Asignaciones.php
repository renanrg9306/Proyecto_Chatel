<?php
require('../fpdf/fpdf.php');
require('../../admin/conex.php'); 
session_start();
$codigo = $_SESSION["Codigo"];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

class PDF extends FPDF
{
		function Header()
		{
            $conex = mysqli_connect("localhost", "agat", "1234", "bd");
			$this->Image('../../images/u.png' , 10 ,10, 40 , 20,'PNG');
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			$this->Cell(50,20,'Reporte de mis Asignaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(160);
			$this->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0, 'R');
			$this->Ln(5);
            $this->SetFont('Arial','B',12);
		    $this->Cell(20,20,'Mis Asignaciones:',0,0,'L');
		    $codigo = $_SESSION["Codigo"];
		        $docente = mysqli_query($conex,"SELECT concat(NombresProfesor, ' ',ApellidosProfesor) as Profesor from profesor where idProfesor = '$codigo'");
		            while($row = mysqli_fetch_row($docente)){
		            $NombreDocente = $row[0];

            }

		 $this->Cell(75,20, $NombreDocente, 0,0,'R');
			$this->Ln(15);
		    // Colores de los bordes, fondo y texto
		    $this->SetDrawColor(222,227,221);
		     $this->SetFillColor(200,220,255);
		    //Cabecera de Titulos
			$this->Cell(10, 8, '#' ,1,0,'C');
			$this->Cell(35, 8, 'Asignacion' ,1,0,'C');
			$this->Cell(20, 8, 'Numero' ,1,0,'C');
			$this->Cell(40, 8, 'Asignatura' ,1,0,'C');
			$this->Cell(15, 8, 'Grupo' ,1,0,'C');
			$this->Cell(30, 8, 'Horario' ,1,0,'C');
			$this->Cell(20, 8, 'Estado' ,1,0,'C');
			$this->Ln(5);
		}
		function Footer()
		{
			// Posición: a 1,5 cm del final
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Pagina '.$this->PageNo().' / {nb}',0,0,'C');
		}
}
		// Creación del objeto de la clase heredada
		$pdf = new PDF();
		//$pdf = new FPDF('L','mm','legal'); //Tamaño en forma Horizontal
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(70, 8, '', 0);
		$pdf->Ln(8);
		$pdf->SetFont('Arial', '', 8);
		//Consulta a la base de Datos
		$asignaciones = mysqli_query($conex,"SELECT asignaciones.Descripcion AS Asignacion, concat(profesor.NombresProfesor,' ',profesor.ApellidosProfesor) as Profesor, asignaturas.NombreAsignatura AS Asignatura, grupo.NumeroGrupo AS Grupo, horarios.NombreHorario AS Horario, asignaciones.NumeroAsignacion AS NumeroA, asignaciones.Estado AS Estado FROM asignaciones INNER JOIN profesor ON asignaciones.idProfesor = profesor.idProfesor
		INNER JOIN asignaturas ON asignaciones.idAsignatura = asignaturas.idAsignatura 
		INNER JOIN grupo ON asignaciones.idGrupo = grupo.idGrupo
		INNER JOIN horarios ON asignaciones.idHorario = horarios.idHorario
        where profesor.idProfesor = '$codigo' and asignaciones.Estado = '1'");
        
        $item = 0;
			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				$pdf->Cell(10, 8, $item, 0,'C');
				$pdf->Cell(35, 8, utf8_decode($asignaciones2['Asignacion']), 0,'C');
				$pdf->Cell(20, 8, $asignaciones2['NumeroA'], 0, 'C');
				$pdf->Cell(40, 8, utf8_decode($asignaciones2['Asignatura']), 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['Grupo'], 0,'C');
			   	$pdf->Cell(30, 8, $asignaciones2['Horario'], 0,'C');
			   	$pdf->Cell(20, 8, $asignaciones2['Estado'], 0,'C');
				$pdf->Ln(5);
			}
			$pdf->Ln(8);
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
?>