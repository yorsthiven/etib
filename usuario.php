<?php
    include ('conexion.php');
    $cons_usuarios="SELECT * FROM usuario";
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

    <div class="box">
        <div >
            <h1>REGISTRO USUARIO</h1>
        </div> 
        <form action="insertarusuario.php" method="POST">
            <div>
                <input type="number" name="cc" placeholder="identificacion">
            </div>
            <div>
                <input type="text" name="nombre" placeholder="Nombre">
            </div>
            <div>
                <input type="text" name="usuario" placeholder="Usuario">
            </div>
            <div>
                <input type="text" name="contra" placeholder="Numero Carné">
            </div>
            <div>
                <input type="submit" value="Registrar">
            </div>
        </form>
        <a href="Index.php"><button>Volver</button></a>
    </div>
    
    
   

    <div class="container_tabla">
        <table>
            <div>
                <div class="tabla_titulo">Datos de Usuario</div>
            </div>
            
            <div class="tabla_subtitulo">Identificacion</div>
            <div class="tabla_subtitulo">Nombre</div>
            <div class="tabla_subtitulo">Usuario</div>
            <div class="tabla_subtitulo">Numero Carné</div>
                <?php $resultado_consul=mysqli_query($connection,$cons_usuarios);
                while($row=mysqli_fetch_assoc($resultado_consul)) {?>

            <div class="tabla_valor"> <?php echo $row['cc'];?> </div>
            <div class="tabla_valor"> <?php echo $row['nombre'];?> </div>
            <div class="tabla_valor"> <?php echo $row['usuario'];?> </div>
            <div class="tabla_valor"> <?php echo $row['contraseña'];?> </div>
            
            <?php } mysqli_free_result($resultado_consul)?>
        </table>
    </div>
<!-- 
    create database etib;
use etib;

create table estado_asignacion_detalle(
id_asig_detalle int not null AUTO_INCREMENT,
nombre varchar (20) not null,
estado int not null,
PRIMARY KEY (id_asig_detalle)
);

create table estado_asignacion(
id_estado_asignacion int not null AUTO_INCREMENT,
nombre varchar (50) not null,
estado varchar (20) not null,
PRIMARY KEY (id_estado_asignacion)
);

create table flotas (
placa varchar (10) not null,
cod_chasis varchar (25) not null,
empresa varchar (20),
PRIMARY KEY (placa)
);


create table asignacion(
id_asignacion int not null AUTO_INCREMENT,
id_flota varchar (10) not null,
hora_inicio datetime not null,
hora_fin datetime not null,
estado_asignacion int not null,
fecha_creacion datetime not null,
id_asig_detalle int not null,
PRIMARY KEY (id_asignacion),
FOREIGN KEY (id_asig_detalle) REFERENCES  estado_asignacion_detalle (id_asig_detalle)
);

create table usuario(
cc int not null,
nombre varchar (20) not null,
usuario varchar (25) not null,
contraseña varchar (25) not null,
PRIMARY KEY (cc)
);
 -->
</body>
</html>