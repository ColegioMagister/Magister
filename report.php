<?php
require('fpdf/fpdf.php');
include('php/config.php');

$query="SELECT * FROM factura";

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if ($result =$db->query($query)){
    while($row=$result->fetch_assoc()){

        $id = $row['id'];
        $des_factura = $row['des_factura'];
        $cod_factura = $row['cod_factura'];
        $cliente = $row['cliente'];
        $ruc_cliente = $row['ruc_cliente'];
        $fecha = $row['fecha'];
        $direc_cliente = $row['direc_cliente'];

    }
}




$pdf->Cell(60,10, "");
$pdf->Cell(15,10, $des_factura);
$pdf->Cell(-75,30, $cod_factura);
$pdf->line(10, 35, 200, 35);
$pdf->Cell(0.4,65, "Sres: ".$cliente);
$pdf->Cell(0.01,85, "RUC: ".$ruc_cliente);
$pdf->line(10, 59, 200, 59);
$pdf->Cell(-0.01,113, "Fecha: ".$fecha);
$pdf->Cell(0.01,132, utf8_decode("Dirección: ").$direc_cliente);
$pdf->line(10, 83, 200, 83);

$pdf->Cell(60,162, "Producto");
$pdf->Cell(50,162, "Cant.");
$pdf->Cell(50,162, "Precio");
$pdf->Cell(-160,162, "Importe");


$pdf->line(10, 98, 200, 98);

$query="SELECT desc_producto, cantidad, precio FROM detalle_factura";

if ($result =$db->query($query)){

    while($row=$result->fetch_assoc()){

        $desc_producto = $row['desc_producto'];
        $cantidad = $row['cantidad'];
        $precio = $row['precio'];

        $importe = $cantidad * $precio;

        $pdf->Cell(60, 195, utf8_decode($desc_producto));
        $pdf->Cell(50, 195, $cantidad);
        $pdf->Cell(50, 195, $precio);
        $pdf->Cell(50, 195, $importe);
        $pdf->Ln(10);


    }
}

$pdf->Output();

?>