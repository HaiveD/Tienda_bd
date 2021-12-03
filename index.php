
<?php
    require_once('php/conexion.php');
    require_once('php/functions.php');
    require_once('php/links.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
    <!-- --- -->

    <title>Index</title>
</head>
<body  style="background: #bababa">
<div class="w-100 h-100 text-center container d-flex justify-content-center">
        <div class="col-sm-4 main-section d-flex align-items-center">
            <div class="modal-content">
                <div class="col-12 d-flex justify-content-center user-img">
                    <div class="img bg-primary d-flex justify-content-center align-items-center">
                        <img src="img/tienda-3.png" class=" img-tienda" th:src="@{img/tienda-3.png}"/>
                    </div>
                </div>
                <form class="col-12" action="php/check_login.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="user" required>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                <div class="col-12 pb-3 forgot">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                </form>
                <?php
                            if(isset($_GET['msg']))
                            {
                                $msg = $_GET['msg'];
                                if($msg == '401')
                                {
                                    //require_once('functions.php');
                                    imprimir('<div th:if="${param.logout}" class="alert alert-danger" role="alert">¡Datos incorrectos!</div>');
                                }
                                if($msg == '404')
                                {
                                    //require_once('functions.php');
                                    imprimir('<div th:if="${param.logout}" class="alert alert-danger" role="alert">¡Datos no encontrados!</div>');
                                }
                            }
                    ?>
        </div>
    </div>
</body>
</html>