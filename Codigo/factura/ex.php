<?php
// (c) Xavier Nicolay
// Exemple de génération de devis/facture PDF

require('invoice.php');
$_REQUEST['folio']=1;
$_REQUEST['fecha']=date('d-m-Y');
$_REQUEST['pepe']=1;

if(isset($_REQUEST)){
    $pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
    $pdf->AddPage();
    $pdf->addSociete( "TD-INFORMATICA",
                      "DOMICILIO\n" .
                      "75000 PARIS\n".
                      "R.C.S. PARIS B 000 000 007\n"
                       );
    $pdf->fact_dev( "Numero de Folio", $_REQUEST['folio'] );
    $pdf->addDate( $_REQUEST['fecha']);
    $pdf->addClient("CL01");
    $pdf->addPageNumber("1");
    $pdf->addClientAdresse("Ste\nM. XXXX\n3ème étage\n33, rue d'ailleurs\n75000 PARIS");
    $pdf->addReglement("En Efectivo/Tarjeta de Credito");
    $pdf->addEcheance("03/12/2003");
    $pdf->addNumTVA("FR888777666");
    /*Cambiar letreros de numero cantidad...*/
    $cols=array( "NUMERO"    => 23,
                 "DESCRIPCION"  => 78,
                 "CANTIDAD"     => 22,
                 "PRECIO"      => 26,
                 "MONTO TOTAL" => 30);
    $pdf->addCols( $cols);
    $cols=array( "NUMERO"    => "L",
                 "DESCRIPCION"  => "L",
                 "CANTIDAD"     => "C",
                 "PRECIO"      => "R",
                 "MONTO TOTAL" => "R");
    $pdf->addLineFormat( $cols);
    $pdf->addLineFormat($cols);
    /*Agregar datos*/
    $y    = 109;
    $line = array( "NUMERO"    => "REF1",
                   "DESCRIPCION"  => "Carte Mère MSI 6378\n" .
                                     "Processeur AMD 1Ghz\n" .
                                     "128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo",
                   "CANTIDAD"     => "1",
                   "PRECIO"      => "600.00",
                   "MONTO TOTAL" => "600.00");
    $size = $pdf->addLine( $y, $line );
    $y   += $size + 2;
    
    $line = array( "NUMERO"    => "REF2",
                   "DESCRIPCION"  => "Câble RS232",
                   "CANTIDAD"     => "1",
                   "PRECIO"      => "10.00",
                   "MONTO TOTAL" => "60.00");
    $size = $pdf->addLine( $y, $line );
    $y   += $size + 2;
    
    $tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
                        array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
    $tab_tva = array( "1"       => 19.6,
                      "2"       => 5.5);
    $pdf->addTotal(150.80);
    $pdf->Output();
}
else{
    echo "No se mandaron parametros";
    
    
}
?>
