<?php
    require_once "../php/conexion.php";
    require_once "../php/functions.php";

    $rol = $_POST['rol'];
    $doc_emple = $_POST['doc_emple'];
    $nombre_emple = $_POST['nombre_emple'];
    $ape_emple = $_POST['ape_emple'];
    $correo_emple = $_POST['correo_emple'];
    $cel_emple = $_POST['cel_emple'];
    $direccion = $_POST['direccion_emple'];

    $campos = "id,nombre,apellidos,correo,celular,direccion,rol";
    $values = "$doc_emple,'$nombre_emple','$ape_emple','$correo_emple',$cel_emple,'$direccion',$rol";
    $sql = insertar('tb_empleados',$campos,$values);
    $resultado = mysqli_query($conexion,$sql);

    if($resultado == true)
    {
        imprimir_js('alert("¡Registro exitoso!");');
        imprimir_js('window.location.href="../php/nuevo_empleado.php";');
    }
    else
    {
        imprimir_js('alert("¡Ocurrió un error inesperado al realizar el registro, verifique todos los datos!");');
        imprimir_js('window.location.href="../php/nuevo_empleado.php";');
    }
?>