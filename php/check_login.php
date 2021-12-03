<?php
    require_once('conexion.php');
    require_once('functions.php');
    $validar = false;
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $passd = encriptar($pass);

    $sql = consulta("tb_login","*","user",$user);

    $resultado = $conexion->query($sql);

    while ($row = mysqli_fetch_array($resultado)) {
        
        if($user == $row[0] && $passd == $row[1])
        {   
            $validar = true;
            session_start();
            $_SESSION['usu']=$_REQUEST['user'];
            header('Location:home.php');
            die();
        }
        else
        {
            imprimir_js('window.location.href="../index.php?msg=401";');
        }
    }
    if($validar == false)
    {
        imprimir_js('window.location.href="../index.php?msg=404";');
    }
?>

