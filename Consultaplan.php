<!-- <?php
// $servername = "localhost";
// $username = "";
// $password = "";
// $dbname = "readymobile";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

?> -->

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
    height: 300px;
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
 
   $Numero_de_celular = $_GET["Numero_de_celular"];
   $Nombre = $_GET["Nombre"];
   $Tipo_de_plan = $_GET["Tipo_de_plan"];
   
//    print $Mensaje." <br>".$Nombre."<br> ".$Correo_electronico;
   ?> 
    <div class="caja">
        <section><center >
           <center><h1>SOLICITUD ENVIADA</h1></center>
           <h2>Señor<?php
           print " ".$Nombre;
           ?></h2>
           <h3>Un agente te contactara pronto, enviando un correo a la direccion <strong><?php
          print $Numero_de_celular; 
           ?></strong></h3> </center>
      
    </div>

   
    
</main>
<footer></footer>
</body>
</html>
