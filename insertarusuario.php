<?php
include ("conexion.php");

$cc = $_POST["cc"];
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$contra= $_POST["contra"];


$insertar = "INSERT INTO usuario(cc,nombre,usuario,contraseña) VALUES ('$cc','$nombre','$usuario','$contra')";
$resultado = mysqli_query($connection,$insertar);
if($resultado){
    echo "<script>alert('se ha registrado correctamente');window.location='/proyecto/usuario.php'</script>";
}else{
    echo "<script>alert('Nose pudo registrar');window,history.go(-1)</script)";
}
?>