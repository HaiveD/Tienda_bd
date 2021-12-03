<?php
    require_once("../php/session.php");
    require_once("../php/conexion.php");
    require_once "../php/functions.php";

    if(isset($_POST['categoria'])) //Para registrar una nueva categoria
    {
        $nombre = $_POST['nombre_categoria'];
        $campos = 'id_categoria,nombre';
        $values = "NULL,'$nombre'";
        $sql = insertar('tb_categoria',$campos,$values);
        $resultado = mysqli_query($conexion,$sql);

        if($resultado == true)
        {   
            imprimir_js('alert("¡Categoría registrada!");');
            imprimir_js('window.location.href="registro_producto.php";');
        }
        else
        {
            imprimir_js('alert("¡Ha ocurrido un error!");');
            imprimir_js('window.location.href="registro_producto.php";');  
        }

    }
    $sql_select = consulta('tb_categoria','*');
    $resultado_select = $conexion->query($sql_select);//Consultqa para mostrar las categorias

/*     echo $sql_select; */
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
            <div class="registro rounded container bg-light mt-3 pl-4 pe-4 pt-3">
                <form action="registro_producto.php" method="post" class="form form-1">
                    <h1>Inserte una nueva categoría</h1>
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre_categoria" id="nombre">
                    <br>
                    <div class="botones">
                        <button class="btn btn-primary mb-3 ancla-btn btn-g" type="submit" name="categoria"><i class="material-icons mr-2">add</i>Agregar categoría</button> 
                        <a  class="btn btn-primary mb-3 ancla-btn btn-g" href=""><i class="material-icons mr-2">edit</i>Editar categorías</a>
                    </div>
                </form>
                
                <form action="../querys/query_producto.php" method="POST" class="form form-2 pb-3">
                    <h1>Agregue un nuevo producto</h1>

                    <label class="mt-3" for="categoria">Categoría</label>
                    <select class="form-control" name="categoria" id="categoria" required>
                        <option value="">Seleccione una opción</option>
                    <?php
                        foreach ($resultado_select as $opciones) {  /*  CICLO PARA MOSTRAR LAS CATEGORIAS EN UN SELECT OPTION   */
                    ?>
                        <option value="<?php imprimir($opciones['id_categoria'])?>"><?php imprimir($opciones['nombre'])?></option>
                    <?php }?>   
                    </select>

                    <label class="mt-2" for="codigo">Codigo</label>
                    <input class="form-control" type="number" name="codigo_producto" id="codigo" required>

                    <label class="mt-2" for="nombre_producto">Nombre del producto</label>
                    <input class="form-control" type="text" name="nombre_producto" id="nombre_producto" required>

                    <label class="mt-2" for="precio_unitario">Precio unitario</label>
                    <input class="form-control" type="number" name="precio_unitario" id="precio_unitario" required>

                    <label class="mt-2" for="fecha">Fecha</label>
                    <input class="form-control" type="date" name="fecha" id="fecha" required>

                    <label class="mt-2" for="descripcion">Descripcion</label>
                    <input class="form-control" type="text" name="descripcion" id="descripcion" required>
                    <br>
                    <button class="btn btn-primary mb-3 ancla-btn" type="submit" name="categoria"><i class="material-icons mr-2">add</i>Agregar producto</button>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>