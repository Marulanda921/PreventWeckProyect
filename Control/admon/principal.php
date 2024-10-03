<?php

session_start();

if (!isset( $_SESSION ["id_usuario"])){

    header("location: login.php");
}
$nombre = $_SESSION ["nombre_usuario"];

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Preventweck</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="principal.php">Preventweck</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre;?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Usuario
                            </a>
                            <a class="nav-link" href="profesional.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Profesional
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            </div>
                            <a class="nav-link" href="citas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Cita
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            </div>   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Panel de servisios de:</div>
                        Preventweck
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Usuario</h1>
                       
                        <div class="card mb-4">
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-success offset-md-10 col-md-2 " data-toggle="modal"
                                data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">

        
                  
                        <?php  
 
include  'conex.php';
$conexion = mysqli_connect($server,$user,$pass,$basedatos);
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query( $conexion ,$sql );


?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Usuario</th>
                                            <th>Nombre</th>
                                            <th>Tipo Usuario</th>                                         
                                            <th>Tipo Documento</th>
                                            <th>Documento</th>
                                            <th>Email</th>
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    </tfoot>
                                    <tbody>

<?php 
while ($filas = mysqli_fetch_array($resultado)) {
    # code...

?>


                                        <tr>
                                            <th> <?php echo $filas["id_usuario"] ?> </th>
                                            <th><?php echo $filas["nombre_usuario"] ?></th>
                                            <th><?php echo $filas["tipo_usuario"] ?></th>
                                            <th><?php echo $filas["tipo_documento"] ?></th>
                                            <th><?php echo $filas["documento"] ?></th>
                                            <th><?php echo $filas["email"] ?></th>

                                            <th>
                                                <center><div class="card mb-4">
                                                    <button class="btn btn-primary"  data-toggle="modal" 
                                                    data-target="#exampleModal1"  ><a  class="text-decoration-none text-light" href="Modificar.php?id= <?php echo $filas["id_usuario"] ?> ">Modificar</a></button>
                                                </div></center>
                                            </th>
                                            <th>
                                                <center><button class="btn btn-danger"><a class="text-decoration-none text-light" href="eliminar.php?id= <?php echo $filas["id_usuario"] ?>">Eliminar</a></button></center>
                                                
                                            </th>
                                        </tr>
<?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

       <!--Otro modal-->

 


       


                

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="btn btn-success" id="exampleModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">
                    <form action= "guardar.php">
                        <div class="form-row">
                        <div class="form-group col-md-12">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombre"
                                    required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Documento</label>
                                <input type="number" class="form-control" id="Documento" name="Documento"
                                    placeholder="documento" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Tipo Usuario</label>
                                <input type="number" class="form-control" id="TipoUs" name="TipoUs"
                                    placeholder="Tipo Usuario" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Tipo Documento</label>
                                <input type="number" class="form-control" id="Tipodoc" name="Tipodoc"
                                    placeholder="Tipo Documento" required>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" id="Correo" name="Correo" placeholder="correo"
                                    required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña"
                                    required>
                            </div>
                        </div>
                        <br>

                        <center> <button type="submit" class="btn btn-success" name="Guardar">Guardar</button></center>
                    </form>
                </div>

            </div>
        </div>
    </div>


        







    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>