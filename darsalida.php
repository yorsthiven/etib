<?php 
    include ('conexion.php');
    /*$id_asignacion=$_GET["id_asignacion"];*/

$id_asignacion = $_POST["id"];
/*$id_flota= $_POST["id_flota"];
$hora_inicio = $_POST["hora_inicio"];
$hora_fin = $_POST["hora:fin"];
$estado_asignacion = 2;
$fecha_creacion= $_POST["fecha_creacion"];
$id_asig_detalle = $_POST["id_asig_detalle"];*/

//$actualizar="UPDATE asignacion SET id_asignacion='$id_asignacion',id_flota='$id_flota',hora_inicio='$hora_inicio',hora_fin='$hora_fin',estado_asignacion='$estado_asignacion',fecha_creacion='$fecha_creacion',id_asig_detalle='$empresa' where id_asignacion = '$id_asignacion'";

//$actualizar2="UPDATE asignacion SET placa='2' where placa = '$id_asignacion'";
$actualizar2="UPDATE asignacion set estado_asignacion='1' WHERE id_asignacion=$id_asignacion";
echo $actualizar2;
$resultado = mysqli_query($connection,$actualizar2);

if($resultado){
    echo "<script>alert('Esta flota ya no esta disponible');window.location='/proyecto/asignacion.php'</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window,history.go(-1)</script)";
}

?>
