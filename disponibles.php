<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    
    <?php
    include ('conexion.php');
    
    $consulta = "SELECT * from asignacion where estado_asignacion=1" ;
    $resultado = mysqli_query($connection,$consulta);

    //echo $consulta;
    ?>
    <div>
        <div class="container_tabla">
            <table>
            <form class="container_tabla" action="darsalida.php" method="POST">
                <div class="tabla_titulo">Datos de Disponibles</div>
                <div class="tabla_subtitulo_flota">Flota</div>
                <div class="tabla_subtitulo_flota">Estado</div>
                <div class="tabla_subtitulo_flota">Detalle</div>
                <div class="tabla_subtitulo_flota diez"></div>
                <?php 
                $cons_usuarios="SELECT * FROM flotas";
                $resultado_consul=mysqli_query($connection,$consulta);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?>

            <input type="hidden" class="tabla_valor_flota" value="<?php echo $row['id_asignacion'];?>" name="id_asignacion">
            <div class="tabla_valor_flota"> <?php echo $row['id_flota'];?> </div>
            <div class="tabla_valor_flota"> Disponible </div>
            <?php            
if($row['id_asig_detalle']==1){
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "en espera";?></div>
    <?php
}if($row['id_asig_detalle']==2){
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "en transito";?></div>
    <?php
}if($row['id_asig_detalle']==3){
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "en patios";?></div>
    <?php
}if($row['id_asig_detalle']==4){
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "en mantenimiento";?></div>
    <?php
}
?>            
    <div class="tabla_valor_flota diez"><a href="crearsalida.php?id=<?php echo $row['id_asignacion'];?>">Dar Salida</a> </div>

<?php } mysqli_free_result($resultado_consul) ?>
            </form>
        </table>
    </div>
    <a href="asignacion.php"><button>Volver</button></a>
</div>

</body>
</html>
<?php