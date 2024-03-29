<?php include "Conexion_base_datos.php"
?>

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
        <style>
        table,th,td,tr{
            border: 3px solid black;
        }
        </style>
        <?php
        $sql="SELECT * FROM cliente";
        $resultado=$conn->query($sql);
        ?>
        
      <table class="table table-dark" style="border: 1px solid black;">
        <tr>
            <th>Id</th>
            <th>Tipo Identificación</th>
            <th>Numero de Identificación</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Tipo Plan</th>
            
            
        </tr>

        <?php if ($resultado->num_rows > 0) {
    
    while($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["Tipo_Identificacion"] ?></td>
            <td><?php echo $row["Numero_Identificacion"] ?></td>
            <td><?php echo $row["Nombre"] ?></td>
            <td><?php echo $row["Telefono_Celular"] ?></td>
            <td><?php echo $row["Producto_interes"] ?></td>
            <td><a href="editar.php?id=<?php echo $row['ID'] ?>"><button class="btn btn-primary">modificar</button></a></td>
            <td><a href="#"> <button class="btn btn-danger" onclick="alerta(<?php echo $row['ID'] ?>)">eliminar</button></a></td>
            <!-- <td><a href="eliminar.php?id=<?php echo $row['ID'] ?>"> <button class="btn btn-danger" onclick="alerta( )">eliminar</button></a></td> -->

    <?php            
        }
    } else {
        echo "0 results";
    }mysqli_close($conn);?>
    </table>
</body>
<script>
function alerta(id) {
    if(confirm("¿estas seguro que deseas eliminar el registro?"))
    {
        window.location.href="eliminar.php?id="+id;
    }
}
</script>
</html>
