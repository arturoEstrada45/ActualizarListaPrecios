<?php
$rama=$_REQUEST['rama'];
$calidad=$_REQUEST['calidad'];
$precio=$_REQUEST['precio'];
 
$serverName = "192.168.1.5";
$connectionInfo = array( "Database"=>"PruebasInter3", "UID"=>"sa", "PWD"=>"Int3r_Cart0n.");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
$sql = "SELECT * FROM ListaPreciosInter where ListaPrecios='$precio' and Rama='$rama' and Calidad='$calidad'";
$stmt = sqlsrv_query( $conn, $sql );

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
   $precio=$row['ListaPrecios'];
   $rama=$row["Rama"];
   $calidad=$row["Calidad"];
     } 


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Actualización SaldoU</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<script>
alert("Ten cuidado con los cambios que hagas");
</script>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

           <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Precio <?php echo $precio?></h1>
                                        <h1 class="h4 text-gray-900 mb-2">Rama:</h1>
                                        <p class="mb-4"><?php echo $rama ?></p>
                                        <h1 class="h4 text-gray-900 mb-2">Calidad: </h1>
                                        <p class="mb-4"><?php echo $calidad ?></p>
                                        
                                    </div>
                                    
                                    <div class="text-center">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="text-gray-400"></i>
                                    Eliminar PDF Lista precio completo
                                </a>
                                    </div>
                                
                                    <div class="text-center">
                                        <a class="small" href="../vistas/eliminarPDF.php">Regresar a la busqueda</a>
                                    </div>
                                </div>
                    </div>
                </div>


        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea eliminar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="../php/eliminar.php" method="POST" id="updateUser">
                <div class="form-group">
                                    
                                        <p class="mb-4">El precio es <?php echo $precio;?></p>
                                        <p class="mb-4">La rama es <?php echo $rama;?></p>
                                        <p class="mb-4">La calidad es <?php echo $calidad;?></p>
                                        <input type="text" hidden class="form-control form-control-user" id="precio" name="precio" value="<?php echo $precio?>" >
                                        <input type="text" hidden class="form-control form-control-user" id="rama" name="rama" value="<?php echo $rama?>" >
                                        <input type="text" hidden class="form-control form-control-user" id="calidad" name="calidad" value="<?php echo $calidad?>" >
                                            
                                  
                                    
                </div>                           
                    </form>
                
    </div>
                <div class="modal-footer"> 
                <button class="btn btn-primary" type="submit" name="eliminarPDFCompleto" form="updateUser">Eliminar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    </div>
            </div>
        </div>
    </div>
    </div>
    
   <!-- Bootstrap core JavaScript-->
   <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
