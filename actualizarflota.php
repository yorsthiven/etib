<?php
include ("conexion.php");

/*$placa = $_POST["placa"];------>>> Esta se agrega cuando  los datos tiene id que no se pueden modificar, en este caso si se puede modificar pero lo puse solo para ejemplo*/ 
$placa = $_POST["placa"];
$cod_chasis = $_POST["cod_chasis"];
$empresa = $_POST["empresa"];

$actualizar="UPDATE flotas SET placa='$placa',cod_chasis='$cod_chasis',empresa='$empresa' where placa = '$placa'";

$resultado = mysqli_query($connection,$actualizar);

if($resultado){
    echo "<script>alert('se ha actualizado los datos correctamente');window.location='/proyecto/flota.php'</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window,history.go(-1)</script)";
}

?>