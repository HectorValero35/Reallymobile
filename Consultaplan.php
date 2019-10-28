
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
body
.caja{
    /* background-color: blue; */
    margin-bottom: 100px ;
    margin-top: 100px;
    margin-left: 500px;
    margin-right: 500px;
    border: solid black 2px;
    border-radius: 15px;
    /* width: 300px; */
    height: 400px;
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
        

<!-- Un agente te contactara pronto, recuerda que nuestro horario de atencion es de lunes a domingo entre las 7:00 am y 9:00 pm -->
<?php
 
   $NumeroDeCelular = $_GET["Numero_de_celular"];
   $Nombre = $_GET["Nombre"];
   $TipoDePlan = $_GET["plan"];
   
//    print $Mensaje." <br>".$Nombre."<br> ".$Correo_electronico;
   ?> 
    <div class="caja">
        <section><center >
           <center><h1>SOLICITUD ENVIADA</h1></center>
           <h2>Señor<?php
           print " ".$Nombre;
           ?></h2>
           <h3>Un agente te contactara pronto, llamandote al numero de celular <strong><?php
          print $NumeroDeCelular; 
           ?></strong></h3>
           <h3>recuerda que nuestro horario de atencion es de lunes a domingo entre las 7:00 am y 9:00 pm<strong><?php
         
           ?></strong></h3> </center> 
               <a href="base_de_datos.php"><button class ="btn btn-primary" style="color:white;"> INGRESAR BASE DE DATOS
           </button></a>
               
      
    </div>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readymobile";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cliente (Nombre,Telefono_Celular,Producto_interes)
    VALUES ('$Nombre','$NumeroDeCelular','$TipoDePlan')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>   
    
</main>
<footer></footer>
</body>
</html>
