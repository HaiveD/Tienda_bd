<?php
    require_once("../php/session.php");
    require_once("../php/conexion.php");
    require_once "../php/functions.php";

    $sql_select = consulta('tb_roles','*');
    $resultado_select = $conexion->query($sql_select);//Consultqa para mostrar las categorias
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
                <a href="home.php" class="text-decoration-none text-light"><h4>Tienda<i class="material-icons ml-2 text-primary">verified</i></h4></a>
            </div>
        
            <div class="menu">
                <a href="../desktops/admin.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>admin_panel_settings</span></i>Administrador    </a>
                <a href="../desktops/cajero.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>add_shopping_cart</span></i>Cajero</a>
                <a href="../desktops/bodega.php" class="d-block p-3 text-light"><i class="material-icons mr-3"><span>widgets</span></i>Bodega</a>
                <a href="../desktops/admin_plataforma.php" class="d-block p-3 text-light nav-link disabled"  tabindex="-1" aria-disabled="true"><i class="material-icons mr-3"><span>do_not_disturb</span></i>Ejemplo deshabilitar</a>
            </div>
        </div>

        <div class="w-100 bg-secondary"> <!-- contenedor principal -->
            <nav class="navbar navbar-expand-lg mb-2">
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
            <div class="registro rounded container bg-light mt-3 pl-4 pe-4 pt-3  ">
                <form action="../querys/query_empleado.php" method="post" class="form pb-3">
                    <h1>Nuevo empleado</h1>
                    <label class="mt-3"for="rol">Rol</label>
                    <select class="form-control" name="rol" id="rol" required>
                        <option value="">Seleccione una opción</option>
                    <?php
                        foreach ($resultado_select as $opciones) {  /*  CICLO PARA MOSTRAR LAS CATEGORIAS EN UN SELECT OPTION   */
                    ?>
                        <option value="<?php imprimir($opciones['IdRol'])?>"><?php imprimir($opciones['Rol'])?></option>
                    <?php }?>   
                    </select>

                    <label class="mt-2" for="doc">Número de documento</label>
                    <input class="form-control" type="number" name="doc_emple" id="doc" required>

                    <label class="mt-2" for="nombre">Nombres</label>
                    <input class="form-control" type="text" name="nombre_emple" id="nombre" required>

                    <label class="mt-2" for="apellidos">Apellidos</label>
                    <input class="form-control" type="text" name="ape_emple" id="apellidos" required>

                    <label class="mt-2" for="correo">Correo</label>
                    <input class="form-control" type="email" name="correo_emple" id="email" required>

                    <label class="mt-2" for="cel">Celular</label>
                    <input class="form-control" type="number" name="cel_emple" id="cel" required>
                    
                    <label class="mt-2" for="cel">Direccion</label>
                    <input class="form-control" type="text-area" name="direccion_emple" id="direccion" required>
                    <br>
                    <button class="btn btn-primary mb-3 ancla-btn-medium" type="submit"><i class="material-icons mr-2">person_add</i>Registrar</button>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>
