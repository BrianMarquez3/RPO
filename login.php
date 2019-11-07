<?php

    $usuario  =$_REQUEST['usuario'];
    $clave    =$_REQUEST['clave'];
 
    if ($usuario == "admin" && $clave == "123")
    {
        echo "bienvenido";
    } else
    {
        echo "la la contraseña y la clave son incorrectas";
    }
?>