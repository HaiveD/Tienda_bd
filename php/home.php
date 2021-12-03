<?php
    require_once("session.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <!-- --- -->
    <?php
        require_once("links.php");
    ?>


    <title>Document</title>
</head>
<body>
    <div class="d-flex">
        <div id="sidebar-container">
            <div class="logo shadow p-3 pl-5 ml-0 mb-5">
                <a href="home.php" class="text-decoration-none text-light"><h4>Tienda<i class="material-icons ml-2 text-primary">verified</i></h4></a>
            </div>
        
            <div class="menu">
                <a href="../desktops/admin.php"  class="d-block p-3 text-light"><i class="material-icons mr-3"><span>admin_panel_settings</span></i>Administrador    </a>
                <a href="../desktops/cajero.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>add_shopping_cart</span></i>Cajero</a>
                <a href="../desktops/bodega.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>widgets</span></i>Bodega</a>
                <a href="../desktops/admin_plataforma.php" class="d-block p-3 text-secondary shadow nav-link disabled bg-dark"  tabindex="-1" aria-disabled="true"><i class="material-icons mr-3"><span>do_not_disturb</span></i>Ejemplo deshabilitar</a>
            </div>
        </div>

        <div class="w-100 bg-secondary">
            <nav class="navbar navbar-expand-lg mb-5">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
                            <!--  <li class="nav-item">
                              <a class="nav-link" href="create.php">Nuevo usuario</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="bd.php">Base de datos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="update.php">Editar base de datos</a>
                            </li> -->
        
                        </ul>
                        <span class="navbar-text">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <div class="perfil dropdown">
                                    <a class="nav-link icon-perfil text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons mr-2">account_circle</i>Cuenta<i class="material-icons">expand_more</i>
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item icon-perfil" href="#"><i class="material-icons mr-2">manage_accounts</i>Perfil</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item icon-perfil" href="cerrar_sesion.php"><i class="material-icons mr-2">highlight_off</i>Cerrar sesion</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </span>
                    </div>
                </div>
            </nav>
        </div> 
    </div>
</body>
</html>