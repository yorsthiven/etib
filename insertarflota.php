<?php
include ("conexion.php");

$placa = $_POST["placa"];
$cod_chasis = $_POST["cod_chasis"];
$empresa = $_POST["empresa"];

$insertar = "INSERT INTO flotas(placa,cod_chasis,empresa) VALUES ('$placa','$cod_chasis','$empresa')";
$resultado = mysqli_query($connection,$insertar);
if($resultado){
    echo "<script>alert('se ha registrado correctamente');window.location='/proyecto/flota.php'</script>";
}else{
    echo "<script>alert('Nose pudo registrar');window,history.go(-1)</script)";
}
?>