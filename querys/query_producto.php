<?php
    require_once "../php/conexion.php";
    require_once "../php/functions.php";

    $categoria = $_POST['categoria'];
    $codigo = $_POST['codigo_producto'];
    $nombre = $_POST['nombre_producto'];
    $precio_unitario = $_POST['precio_unitario'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];

    $campos = "id_producto,id_categoria,codigo,nombre,precio_unitario,fecha,descripcion";
    $values = "NULL,'$categoria','$codigo','$nombre','$precio_unitario','$fecha','$descripcion'";
    $sql = insertar('tb_productos',$campos,$values);

    $resultado = mysqli_query($conexion,$sql);

    if($resultado == true)
    {
        imprimir_js('alert("¡Producto registrado!");');
        imprimir_js('window.location.href="../php/registro_producto.php";');
    }
    else
    {
        imprimir_js('alert("¡Ocurrió un error inesperado al registrar el producto, verifique todos los datos!");');
        imprimir_js('window.location.href="../php/registro_producto.php";');
    }
?>