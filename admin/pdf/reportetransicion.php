<?php
require('./fpdf.php');
 
// Configuración de la conexión a la base de datos
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBNAME = 'Proyecto_matriculas';



// Crear conexión
$conexion = new mysqli($DBHOST, $DBUSER, '', $DBNAME);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'REPORTE DE TODOS LOS ESTUDIANTES MATRICULADOS EN EL NIVEL ESTUDIANTIL TRANSICIÓN', 0, 1, 'C');
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
        $this->Image('../img/escudo.jpg',1,1,31);
    }
}

// Crear instancia de PDF
$pdf = new PDF();
$pdf->AddPage();

// Configurar la consulta SQL
$sql = "SELECT `id`, `name`, `roll`, `level`, `city`, `pcontact`, `photo`, `datetime`, `acudiente_id` FROM `student_info` WHERE `level`= 'Transición'";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Imprimir cabeceras de tabla
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(10, 10, 'ID', 1);
    $pdf->Cell(35, 10, 'Nombre', 1);
    $pdf->Cell(30, 10, 'N° Matricula', 1);
    $pdf->Cell(30, 10, 'Nivel', 1);
    $pdf->Cell(30, 10, 'Direccion', 1);
    $pdf->Cell(30, 10, 'Fotografia', 1);
    $pdf->Cell(30, 10, 'fecha y hora', 1);
    $pdf->Cell(30, 10, 'acudiente_id', 1);
    $pdf->Ln();

    // Imprimir filas de la tabla
    $pdf->SetFont('Arial', '', 12);
    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 10, $fila['id'], 1);
        $pdf->Cell(35, 10, $fila['name'], 1);
        $pdf->Cell(30, 10, $fila['roll'], 1);
        $pdf->Cell(30, 10, $fila['level'], 1);
        $pdf->Cell(30, 10, $fila['city'], 1);
        $pdf->Cell(30, 10, $fila['pcontact'], 1);
        $pdf->Cell(30, 10, $fila['photo'], 1);
        $pdf->Cell(30, 10, $fila['datetime'], 1);
        $pdf->Cell(30, 10, $fila['acudiente_id'], 1);

        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No hay resultados', 1, 1, 'C');
}


ob_end_clean();
// Salida del PDF
$pdf->Output();

// Cerrar conexión
$conexion->close();
?>
