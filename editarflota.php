<?php 
    include ('conexion.php');
    $id=$_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ETIB</title>
</head>
<body>
<div>

    <div>
        <h2>Lista</h2>
        <table>
        <form class="container_tabla" action="actualizarflota.php" method="POST">
            <div class="tabla_titulo">Datos de Flotas</div>
            <div class="tabla_subtitulo_flota">Placa</div>
            <div class="tabla_subtitulo_flota">Codigo</div>
            <div class="tabla_subtitulo_flota">Empresa</div>
                <?php 
                $cons_usuarios="SELECT * FROM flotas where placa='$id'";
                $resultado_consul=mysqli_query($connection,$cons_usuarios);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?>

            <input type="text" class="tabla_valor_flota" value="<?php echo $row['placa'];?>" name="placa">
            <input type="text" class="tabla_valor_flota" value="<?php echo $row['cod_chasis'];?>" name="cod_chasis">
            <input type="text" class="tabla_valor_flota" value="<?php echo $row['empresa'];?>"  name="empresa">            
            <?php } mysqli_free_result($resultado_consul) ?>
            <input type="submit" value="Actualizar">
        </form>
        </table>
        <a href="flota.php"><button>Volver</button></a>
    </div>
</body>
</html>