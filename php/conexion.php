<?php

header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['busca'])){
    
$precio = $_POST['precio'];
$rama = $_POST['rama'];
$calidad = $_POST['calidad'];
$calibre = $_POST['calibre'];
$serverName = "192.168.1.5";
$connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}



if($calibre=="Todos"){   
  $contador=0; 
$sql = "SELECT * FROM ListaPreciosInter where ListaPrecios='$precio' and Rama='$rama' and Calidad='$calidad'";
         
          $stmt = sqlsrv_query( $conn, $sql );
          $total=sqlsrv_num_rows($stmt);
          if( $stmt === false) {
              die( print_r( sqlsrv_errors(), true) );
          }
          
              while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $contador=$contador+1;
            }
            if($contador>=1){
                header('location: ../vistas/muestraInfoAll.php?precio='.$precio.'&rama='.$rama.'&calidad='.$calidad);
            }
            else {
                header('location: ../vistas/eliminarPDF1.php');
            }

}
else{
    $contador=0; 
$sql = "SELECT * FROM ListaPreciosInter where ListaPrecios='$precio' and Rama='$rama' and Calidad='$calidad' and Calibre='$calibre'";
         
          $stmt = sqlsrv_query( $conn, $sql );
          $total=sqlsrv_num_rows($stmt);
          if( $stmt === false) {
              die( print_r( sqlsrv_errors(), true) );
          }
          
              while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $contador=$contador+1;
            }
            if($contador>=1){
                header('location: ../vistas/muestraInfo.php?precio='.$precio.'&rama='.$rama.'&calidad='.$calidad.'&calibre='.$calibre);
            }
            else {
                header('location: ../vistas/eliminarPDF1.php');
            }



}


}


else if (isset($_POST['buscaMov'])){
    
    $precio = $_POST['precio'];
    $articulo = $_POST['articulo'];
    $serverName = "192.168.1.5";
    $connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    

        $contador=0; 
    $sql = "SELECT * FROM ListaPreciosD WHERE lista='$precio' AND Articulo='$articulo'";
             
              $stmt = sqlsrv_query( $conn, $sql );
              $total=sqlsrv_num_rows($stmt);
              if( $stmt === false) {
                  die( print_r( sqlsrv_errors(), true) );
              }
              
                  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                    $contador=$contador+1;
                }
                if($contador>=1){
                    header('location: ../vistas/muestraInfoMov.php?precio='.$precio.'&articulo='.$articulo);
                }
                else {
                    header('location: ../vistas/eliminarMov1.php');
                }
    
    }
    
    


?>
