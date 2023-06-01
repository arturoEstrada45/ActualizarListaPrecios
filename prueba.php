<?php

$serverName = "192.168.1.5";
$connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


?>