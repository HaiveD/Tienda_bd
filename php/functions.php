<?php 
//----------------------------------------------------------------------------------------------------------//
/*Octubre 21, 2021
Germán Aguirre
Funciones
*/
function encriptar($txtCod)
{   //Esta función sirve para encriptar carácteres a código ascci
    $txtC = "";//el retorno que me indicará que la codificación fue completada
    $txtArray = str_split($txtCod);
    $txtLong = count($txtArray);

    for ($i=0; $i < $txtLong; $i++) { 
        $temp[$i] = ord($txtArray[$i]);
        $temp[$i] += 20;
        if($temp[$i] < 100)
        {
            $temp[$i] = '0' . $temp[$i];
        }
        $txtC .= $temp[$i];
    }
    return $txtC;
}
//----------------------------------------------------------------------------------------------------------//
function desencriptar($txtDescod)
{   //Función para desencriptar el código ascci
    $txtDesod = "";
    $txtArray = str_split($txtDescod, 3);
    $txtLong = count($txtArray);

    for ($i=0; $i < $txtLong; $i++) { 
        $temp[$i] = chr($txtArray[$i]-20);
        $txtDesod .= $temp[$i]; 
    }
    return $txtDesod;
}
//----------------------------------------------------------------------------------------------------------//
function imprimir($msg)
{   //Función para imprimir algo en reemplazo de echo, print
    echo $msg;

}
//----------------------------------------------------------------------------------------------------------//
function imprimir_js($msg)
{   //Función para imprimir código de javascript
    $t = "<script type='text/javascript'>";
    $tfin = "</script>";
    imprimir($t . $msg . $tfin);
}
//----------------------------------------------------------------------------------------------------------//
//--------------------------------------INICIO DE FUNCIONES CON SQL-----------------------------------------//
//----------------------------------------------------------------------------------------------------------//
function consulta($tb_name,$campos,$campoid="",$id="")
{   //Esta función me hace una consulta de tipo SELECT

    /* echo $tb_name . '-' . $campos . '-' . $campoid . '-' . $id; */
    if($tb_name !== "" || $campos !== "" )
    {   

        if($campoid == "" || $id == "")
        {   
            //echo $campoid . $id . '-';
            /* $sql = "SELECT" . $campos . "FROM" . $tb_name . ";"; */
            $sql = "SELECT $campos FROM $tb_name";
            //echo $sql;
        }
        else {
            /* $sql = "SELECT" . $campos . "FROM" . $tb_name . "WHERE" . $campoid . "=" . $id . ";"; */
            $sql = "SELECT $campos FROM $tb_name WHERE $campoid = '$id'";
            //echo $sql;
            
        }
    }
    return $sql;
}
//----------------------------------------------------------------------------------------------------------//
function insertar($tb_name,$campos,$values)
{
    //Función para insertar datos en una tabla
    $sql = "INSERT INTO $tb_name ($campos)VALUES($values)";
    return $sql;
}
//----------------------------------------------------------------------------------------------------------//
function actualizar($tb_name,$set,$campoid,$id)
{   
    //Función para actualizar datos
    $sql = "UPDATE $tb_name SET $set WHERE $tb_name.$campoid = $id";
    return $sql;
}
//----------------------------------------------------------------------------------------------------------//
function eliminar($tb_name,$campoid,$id)
{
    $sql = "DELETE FROM $tb_name WHERE $tb_name.$campoid = '$id'";
    //echo $sql;
    return $sql;
}
?> 