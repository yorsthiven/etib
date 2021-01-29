<?php
include ("conexion.php");

$id_flota = $_POST["id_flota"];
$hora_inicio = $_POST["hora_inicio"];
$hora_final= $_POST["hora_fin"];
$estado_asignacion= $_POST["estado_asignacion"];
$fecha_creacion= $_POST["fecha_creacion"];
$id_asig_detalle= $_POST["id_asig_detalle"];


$insertar = "INSERT INTO asignacion(id_flota,hora_inicio,hora_fin,estado_asignacion,fecha_creacion,id_asig_detalle) VALUES ('$id_flota','$hora_inicio','$hora_final','$estado_asignacion','$fecha_creacion','$id_asig_detalle')";
$resultado = mysqli_query($connection,$insertar);

echo mysqli_errno($connection)."." . mysqli_error($connection) ."/n";

if($resultado){
    echo "<script>alert('se ha registrado correctamente');window.location='/proyecto/asignacion.php'</script>";
}else{
    echo "<script>alert('Nose pudo registrar');window,history.go(-1)</script)";
}
?>