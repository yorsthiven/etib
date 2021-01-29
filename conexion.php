<?php

    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $database="etib";

    $connection=mysqli_connect($servidor,$usuario,$contraseña,$database);
    if (!$connection){
        die("Conexion fallida".mysqli_connect_error());
    }else{
        echo "";
    }
?>