<?php 
    include ('conexion.php');
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
 <div class="endos">   
    <div class="box">
        <div>
            <h1>REGISTRO FLOTA</h1>
        </div> 
        <form action="insertarflota.php" method="POST">
            <div>
                <input type="text" name="placa" placeholder="Placa">
            </div>
            <div>
                <input type="text" name="cod_chasis" placeholder="Codigo de Chasis">
            </div>
            <div>
                <input type="text" name="empresa" placeholder="Empresa">
            </div>
            <div>
                <input type="submit" value="Registrar">
            </div>
        </form>
        <a href="Index.php"><button>Volver</button></a>

    </div>

    <div>
        <div class="container_tabla">
        <table>
            <div class="tabla_titulo">Datos de Flotas</div>
            <div class="tabla_subtitulo_flota">Placa</div>
            <div class="tabla_subtitulo_flota">Codigo</div>
            <div class="tabla_subtitulo_flota">Empresa</div>
            <div class="tabla_subtitulo_flota diez"></div>
                <?php 
                $cons_usuarios="SELECT * FROM flotas";
                $resultado_consul=mysqli_query($connection,$cons_usuarios);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?>

            <div class="tabla_valor_flota"> <?php echo $row['placa'];?> </div>
            <div class="tabla_valor_flota"> <?php echo $row['cod_chasis'];?> </div>
            <div class="tabla_valor_flota"> <?php echo $row['empresa'];?> </div>
            <div class="tabla_valor_flota diez"><a href="editarflota.php?id=<?php echo $row['placa'];?>">Editar</a> </div>
            
            <?php } mysqli_free_result($resultado_consul) ?>
        </table>
        </div>
    </div>
</div>
</body>
</html>