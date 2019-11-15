<!DOCTYPE html>
<html lang="es">
<meta name="google-site-verification" content="GPAWYETRMmFEP6Rg9euSV1XUYXkI2MC_ZumHrmB2khc" />
<head>
    <title>REALLY MOBILE</title>
    <!--<meta charset="utf-8">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <style>
        table,th,td,tr{
            border: 3px solid black;
        }
        </style>
    
    
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<header>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo_incial" href="#myPage">REALLY MOBILE</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Servicio.php">Servicios</a></li>
                    <li><a href="Portafolio.php">Portafolio</a></li>
                    <li><a href="Planes.php">Planes y Promociones</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <br>
        <br>

        <br>


        <?php

include "Conexion_base_datos.php";
$id=$_GET["id"];
$sql="SELECT * FROM cliente WHERE ID=".$id."";
$resultado=$conn->query($sql);
?>
<form action="modificar.php" method="get">
<table>
<tr>
            <th>Id</th>
            <th>Tipo Identificación</th>
            <th>Numero de Identificación</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Tipo Plan</th>
            
            
        </tr>
<?php 
if ($resultado->num_rows > 0) {
while($row = $resultado->fetch_assoc()) {
?>
    <tr>
    <td><input type="text" name="ID" value="<?php echo $row['ID'] ?>"></td>
    <th><input type="text" name="Tipo_Identificacion" value="<?php echo $row['Tipo_Identificacion'] ?>"></th>
    <th><input type="text" name="Numero_Identificacion" value="<?php echo $row['Numero_Identificacion'] ?>"></th>
    <td><input type="text" name="Nombre" value="<?php echo $row['Nombre'] ?>"></td>
    <th><input type="text" name="Telefono_Celular" value="<?php echo $row['Telefono_Celular'] ?>"></th>
    <th><input type="text" name="Producto_interes" value="<?php echo $row['Producto_interes'] ?>"></th>
    <th><input type="submit" class="btn btn-submit"  value="enviar"></th>
</tr>
</form>
<?php            
}
} else {
echo "0 results";
}mysqli_close($conn);
?>
</table>
    </main>
</body>
</html>