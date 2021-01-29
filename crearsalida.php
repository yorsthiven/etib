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
        <form class="container_tabla" action="darsalida.php" method="POST">
            <div class="tabla_titulo">Datos de Flotas</div>
            <div class="tabla_subtitulo_asignacion">Flota</div>
            <div class="tabla_subtitulo_asignacion">Hora Inicio</div>
            <div class="tabla_subtitulo_asignacion">Hora fin</div>
            <div class="tabla_subtitulo_asignacion">Estado</div>
            <div class="tabla_subtitulo_asignacion">Fecha</div>
            <div class="tabla_subtitulo_asignacion">Confirmar</div>
                <?php 
                $cons_usuarios="SELECT * FROM asignacion where id_asignacion='$id'";
                $resultado_consul=mysqli_query($connection,$cons_usuarios);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?>

            <input type="hidden" class="tabla_valor_asignacion" value="<?php echo $row['id_asignacion'];?>" name="id">
            <div class="tabla_valor_asignacion"> <?php echo $row['id_flota'];?> </div>
            <div class="tabla_valor_asignacion"> <?php echo $row['hora_inicio'];?> </div>
            <div class="tabla_valor_asignacion"> <?php echo $row['hora_fin'];?> </div>
            <div class="tabla_valor_asignacion"> Disponible </div>
            <div class="tabla_valor_asignacion"> <?php echo $row['fecha_creacion'];?> </div>

                        <?php } mysqli_free_result($resultado_consul) ?>
            <input type="submit" value="Confirmar">
        </form>
        </table>
        <a href="disponibles.php"><button>Volver</button></a>
    </div>
</body>
</html>