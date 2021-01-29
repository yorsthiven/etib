<?php 
    include ('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ASIGNAR</title>
</head>
<body>
<div class="box">
        <div>
            <h1> ASIGNACION</h1>
        </div> 


        <!--<select>
                <option value="0">Seleccione:</option>
                   
            </select>
        -->
<!--------------------------------------------------------------------------------------------  -->
        <form action="insertarasignacion.php" method="POST">
                <select name="id_flota">
                    <option value=""  disabled selected>Flota</option>
                    <?php
                    $consulta2="SELECT * FROM flotas";
                    $ejecutar=mysqli_query($connection,$consulta2) or die (mysqli_error($connection));
                     
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones['placa']?>"> <?php echo $opciones['placa']?></option>
                    <?php endforeach
                    ?>
                </select>
<!--------------------------------------------------------------------------------------------  -->
            <div>
                <label>Hora de inicio</label>
                <input type="datetime-local" name="hora_inicio" placeholder="Hora de Inicio">
            </div>
<!--------------------------------------------------------------------------------------------  -->            
            <div>
            <label>Hora de fin</label>
                <input type="datetime-local" name="hora_fin" placeholder="Hora final">
            </div>
<!--------------------------------------------------------------------------------------------  -->
            <div>
                <label>Estado</label>
                <select  name="estado_asignacion">
                    <option value="" disabled selected>Seleccione Estado de la Flota</option>
                        <?php
                        $consulta3="SELECT * FROM estado_asignacion";
                        $ejecutar2 = mysqli_query($connection,$consulta3) or die (mysqli_error($connection));

                        while ($valores = mysqli_fetch_array($ejecutar2)) {
                            echo '<option value="'.$valores['id_estado_asignacion'].'">'.$valores['nombre'].'</option>';
                                            }
                        
                        /*foreach ($ejecutar2 as $opciones2):
                        ?>
                        <option value="<?php echo $opciones2['id_estado_asignacion']?>"> <?php echo $opciones2['nombre']?></option>
                        <?php
                        endforeach
                        */                        
                        ?>
                </select>
                </div>
<!--------------------------------------------------------------------------------------------  -->        

<!--------------------------------------------------------------------------------------------  -->
            <div>
                <label>Fecha de creacion</label>
                <input type="date" name="fecha_creacion" placeholder="Fecha">
            </div>
<!--------------------------------------------------------------------------------------------  -->

            <label>Detalle de la flota</label>

            <select name="id_asig_detalle">
                <option value="">Seleccione</option>
                <?php
                        $consulta3="SELECT * FROM estado_asignacion_detalle";
                        $ejecutar2 = mysqli_query($connection,$consulta3) or die (mysqli_error($connection));
                        
                        foreach ($ejecutar2 as $opciones2):
                ?>
                        <option value="<?php echo $opciones2['id_asig_detalle']?>"> <?php echo $opciones2['nombre']?></option>
                <?php
                        endforeach 
                ?>
 <!--------------------------------------------------------------------------------------------  -->
           
            <?php

            /* $consultajoin="SELECT id_estado_asignacion FROM 
            estado_asignacion_detalle
            INNER JOIN   estado_asignacion
            on
            id_estado_asignacion=id_asig_detalle
            WHERE 
            id_estado_asignacion=1";
            
            
           if ($estado_asignacion=="Disponible"){
            ?>
                <div>
                    <?php
                        $consulta3="SELECT * FROM estado_asignacion_detalle where estado=1";
                        $ejecutar2 = mysqli_query($connection,$consulta3) or die (mysqli_error($connection));
                        
                        foreach ($ejecutar2 as $opciones2):
                        ?>
                        <option value="<?php echo $opciones2['id_asig_detalle']?>"> <?php echo $opciones2['nombre']?></option>
                        <?php
                        endforeach 
                    ?>
                </div>                    
            <?php
            }else{
            ?>
                <div>
                    <?php    
                        $consulta5="SELECT * FROM estado_asignacion_detalle where estado=2";
                        $ejecutar4 = mysqli_query($connection,$consulta5) or die (mysqli_error($connection));
                        
                        foreach ($ejecutar4 as $opcionesdos):
                        ?>
                        <option value="<?php echo $opcionesdos['id_asig_detalle']?>"> <?php echo $opcionesdos['nombre']?></option>
                        <?php
                        endforeach
                    ?>   
                </div>
            <?php
            }*/
            ?>
            </select>
<!--------------------------------------------------------------------------------------------  -->

            
            
            <div>
                <input type="submit" value="Registrar">
            </div>
        </form>
        <a href="Index.php"><button>Volver</button></a>

</div>
<a href="disponibles.php" ><button class="bot">Lista de Disponibles</button></a>
    <div>
        <div class="container_tabl">
        <table>
            <div class="tabla_titulo">Estado de la Flota</div>
            <div class="tabla_subtitulo_asignacion">Flota</div>
            <div class="tabla_subtitulo_asignacion">Hora Inicio</div>
            <div class="tabla_subtitulo_asignacion">Hora Final</div>
            <div class="tabla_subtitulo_asignacion">Estado</div>
            <div class="tabla_subtitulo_asignacion">Fecha</div>
            <div class="tabla_subtitulo_asignacion">Detalle</div>
                <?php 
                $cons_usuarios="SELECT * FROM asignacion";
                $resultado_consul=mysqli_query($connection,$cons_usuarios);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?> 

            <div class="tabla_valor_asignacion"> <?php echo $row['id_flota'];?> </div>
            <div class="tabla_valor_asignacion"> <?php echo $row['hora_inicio'];?> </div>
            <div class="tabla_valor_asignacion"> <?php echo $row['hora_fin'];?> </div>
<?php            
if($row['estado_asignacion']==1){
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "Disponible";?></div>
    <?php
}else{
    ?>
    <div class="tabla_valor_asignacion"> <?php echo "No Disponible";?></div>
    <?php
}
?>
            <div class="tabla_valor_asignacion"> <?php echo $row['fecha_creacion'];?> </div>
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
            
            
            <?php } mysqli_free_result($resultado_consul) ?>
        </table>
        </div>


    
    </div>
    </div>
</body>
</html>