<?php
    require_once "php/conexion.php";
    require_once "php/functions.php";

    if(isset($_POST['categoria']))
    {
        $nombreC = $_POST['nombre_categoria'];
        $descripcionC = $_POST['descripcion_categoria'];
        $estadoC = $_POST['estado_categoria'];

        $campos = "id_categoria,nombre,descripcion,estado";
        $values = "NULL,'$nombreC','$descripcionC','$estadoC'"; 
        $sql = insertar('tb_categoria',$campos,$values);
    }
?>
<div class="contenedor">
    <form action="categorias.php" method="post" class="form form-1">
        <h1>Inserte una nueva categoría</h1>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre_categoria" id="nombre">
    <!--     <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion_categoria" id="descripcion">
        <label for="estado">Estado</label>
        <input type="text" name="estado_categoria" id="estado"> -->
        <br>
        <input type="submit" value="Agregar categoría" name="categoria">
    </form>
    <a href="">Editar categorías</a>
    <form action="" method="POST" class="form form-2">
        <h1>Agregue un nuevo producto</h1>
        <label for="categoria">Categoría</label>
        <select name="categoria" id=""></select>
        <label for="codigo">Codigo</label>
        <input type="number" name="codigo" id="codigo">
        <label for="nombre_producto">Nombre del producto</label>
        <input type="text" name="nombre_producto" id="nombre_producto">
        <label for="precio_unitario">Precio unitario</label>
        <input type="number" name="precio_unitario" id="precio_unitario">
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <input type="submit" value="Agregar producto">
    </form>
</div>
<style>
    .contenedor{
        border:solid 1px;
        width:400px;
        margin:auto;
    }
    .form{
        display:flex;
        flex-direction:column;

        border-top: 0;
        border-left:solid 1px ;
        border-right: solid 1px;
        border-bottom: solid 1px;
        margin: auto;
        padding:10px;
    }
    .form-1{
        margin-top:40px;
        border-top:solid 1px;
        border-left:solid 1px ;
        border-right: solid 1px;
        border-bottom: 0;
    }
</style>