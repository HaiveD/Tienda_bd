<?php
    require_once("../php/conexion.php");
    require_once("../php/functions.php");

    $sql = consulta('tb_empleados','*');
    $resultado = mysqli_query($conexion,$sql);
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
        require_once("../php/links.php");
    ?>
    <title>Document</title>
</head>
<body>
    <div class="d-flex">
        <div id="sidebar-container">
            <div class="logo shadow  p-3 pl-5 ml-0 mb-5">
                <a href="../php/home.php" class="text-decoration-none text-light"><h4>Tienda<i class="material-icons ml-2 text-primary">verified</i></h4></a>
            </div>
        
            <div class="menu">
                <a href="../desktops/admin.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>admin_panel_settings</span></i>Administrador    </a>
                <a href="../desktops/cajero.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>add_shopping_cart</span></i>Cajero</a>
                <a href="../desktops/bodega.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>widgets</span></i>Bodega</a>
                <a href="../desktops/admin_plataforma.php" class="d-block p-3 text-light nav-link disabled"  tabindex="-1" aria-disabled="true"><i class="material-icons mr-3"><span>do_not_disturb</span></i>Ejemplo deshabilitar</a>
            </div>
        </div>

        <div class="w-100 bg-secondary">
            <nav class="navbar navbar-expand-lg mb-5">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
                            <li class="nav-item">
                              <button class=" btn btn-primary rounded me-2"><a class="nav-link text-light" href="../php/registro_producto_admin.php">Nuevo Producto</a></button>
                            </li>
                            <li class="nav-item">
                              <button class=" btn btn-primary rounded me-2"><a class="nav-link text-light" href="../php/nuevo_empleado.php">Nuevo empleado</a></button>
                            </li>
                            <li class="nav-item">
                              <button class=" btn btn-primary rounded me-2"><a class="nav-link text-light" href="../php/empleados.php">Empleados</a></button>
                            </li>
                            <!-- <li class="nav-item">
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
            <div class="princi-bd">
        <table>
            <thead>
                <th>Numero de documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Dirección</th>
                <th>Rol</th>
                <th  class="editar-bd"><i class="material-icons">edit</i>Editar</th>
                <th class="eliminar-bd"><i class="material-icons">delete</i>Eliminar</th>
            </thead>
            <?php
                while ($row = mysqli_fetch_array($resultado)) {         
            ?>
                <tbody>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td class="editar-bd-link"><a href="editar_usu.php?id=<?php imprimir($row['numDoc']);?>"><i class="material-icons">edit</i></a></td>
                    <td class="eliminar-bd-link"><a href="eliminar_usu.php?id=<?php imprimir($row['numDoc']);?>"><i class="material-icons">delete</i></a></td>
                </tbody>
            <?php }?>
        </table>
    </div> 
        </div> 
    </div>
</body>
</html>