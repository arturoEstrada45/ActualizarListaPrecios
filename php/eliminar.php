<?php
if (isset($_POST['eliminarPDF'])){

$precio = $_POST['precio'];
$calidad = $_POST['calidad'];
$calibre = $_POST['calibre'];
$rama=$_POST['rama'];
$serverName = "192.168.1.5";
$connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
$conn = sqlsrv_connect( $serverName, $connectionInfo );


if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
$sql = "DELETE ListaPreciosInter WHERE ListaPrecios='$precio' AND Rama='$rama' AND Calidad='$calidad' AND Calibre='$calibre'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

sqlsrv_free_stmt($stmt);
header('location: ../index.php');
}
//ELIMINAR PDF COMPLETO SIN IMPORTAR CALIBRE
elseif (isset($_POST['eliminarPDFCompleto'])){
    $precio = $_POST['precio'];
    $rama = $_POST['rama'];
    $calidad=$_POST['calidad'];
    $serverName = "192.168.1.5";
    $connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    
    
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    $sql = "DELETE ListaPreciosInter WHERE ListaPrecios='$precio' AND Rama='$rama' AND Calidad='$calidad'";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    
    sqlsrv_free_stmt($stmt);
    header('location: ../index.php');

}

//ELIMINAR MOV
elseif (isset($_POST['eliminarMov'])){
    $precio = $_POST['precio'];
    $articulo = $_POST['articulo'];
    $serverName = "192.168.1.5";
    $connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    
    
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    $sql = "DELETE ListaPreciosD where lista='$precio' and Articulo='$articulo'";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    
    sqlsrv_free_stmt($stmt);
    header('location: ../index.php');

}



?>