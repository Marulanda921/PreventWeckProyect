<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <script src="https://kit.fontawesome.com/44f8c60f60.js" crossorigin="anonymous"></script>

    <title>preventweck</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1554/1554906.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">Preventweck</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="TipoUsuario.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tipo Usuario</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="grupoestudiante.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Grupo estudiante</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="citaestudiante.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Cita estudiante</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Configuración</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="">Ciudad</a>
                        <a class="collapse-item" href="">Departamento</a>
                        <a class="collapse-item" href="">Tipo Documento</a>
                        <a class="collapse-item" href="">Tipo Usuario</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar por..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal"
                                data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Documento</th>
                                            <th>Tipo Usuario</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    </tfoot>
                                    <tbody>




                                        <tr>
                                            <th>1</th>
                                            <th>103287113</th>
                                            <th>02</th>
                                            <th>Alejandro</th>
                                            <th>Ramirez</th>
                                            <th>3148615324</th>
                                            <th>Alejokr@gmail.com</th>
                                            <th>
                                                <center><button class="btn btn-sm bg-gradient-primary">Eliminar</center>
                                                </button>
                                            </th>
                                            <th>
                                                <center><button class="btn btn-sm bg-gradient-danger">Modificar</center>
                                                </button>
                                            </th>
                                        </tr>


                                        <?php
                                        include('../../Control/conex.php');
                                        $cons = $conexion->query("SELECT * FROM `usuario`");
                                        while ($row = $cons->fetch_row()) {
                                        ?>
                                        <tr>
                                        <tr>
                                            <td>
                                                <?php echo '' . $row[0] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo number_format('' . $row[1] . ''); ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[2] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[3] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[4] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[5] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[6] . ''; ?>
                                            </td>
                                            <td>
                                                <?php echo '' . $row[7] . ''; ?>
                                            </td>
                                            <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>"
                                                    class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['ID'] ?>"
                                                    class="btn btn-danger">Eliminar</a></th>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">
                    <form action= "../../Control/guardar.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Id</label>
                                <input type="number" class="form-control" id="Id" name="Id" placeholder="ID" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Documento</label>
                                <input type="number" class="form-control" id="Documento" name="Documento"
                                    placeholder="documento" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tipo Usuario</label>
                                <input type="number" class="form-control" id="TipoUs" name="TipoUs"
                                    placeholder="Tipo Usuario" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombre"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellido4">Apellido</label>
                                <input type="text" class="form-control" id="Apellido" name="Apellido"
                                    placeholder="Apellidos" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellido4">Telefono</label>
                                <input type="number" class="form-control" id="Telefono" name="Telefono"
                                    placeholder="Telefono" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellido4">Correo</label>
                                <input type="email" class="form-control" id="Correo" name="Correo" placeholder="correo"
                                    required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPS">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                        </div>

                        <center> <button type="submit" class="btn btn-primary" name="Guardar">Guardar</button></center>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
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

</body>

</html>