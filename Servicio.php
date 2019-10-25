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
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="Portafolio.php">Portafolio</a></li>
                    <li><a href="Planes.php">Planes y Promociones</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

  
    

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
        <h2>SERVICIOS</h2>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span ><img style="width:300px !important;height:300px !important" src="img/imagen-2.jpg" /></span>
                <h4>Smartphones</h4>
                <p>REALLY MOBILE ofrece smartphones de todas las gamas, con diferentes caracteristicas para su gusto y presupuesto. Contamos con las principales marcas y con el respaldo de Really Mobile.</p>
            </div>
            <div class="col-sm-4">
                <span><img style="width:300px !important;height:300px !important" src="img/imagen-6.jpg" /></span>
                <h4>Plan Postpago desde $ 39.990</h4>
                <p>REALLY MOBILE  ofrece diferentes planes postpago desde $ 39.990 con excelente calidad de navegacion, minutos a todo operador y con gran cobertura en todo el territorio nacional.</p>
            </div>
            <div class="col-sm-4">
                <span><img style="width:300px !important;height:300px !important" src="img/imagen-7.jpg" /></span>
                <h4>Hogar</h4>
                <p>REALLY MOBILE  ofrece todas los servicios y soluciones para su hogar. La mejor velocidad en internet MEGA, la mejor experiencia en television 100% digital y telefonia local ilimitada. . </p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span><img style="width:300px !important;height:300px !important" src="img/imagen-5.jpg" /></span>
                <h4>Empresa</h4>
                <p>REALLY MOBILE brinda todas las soluciones para su empresa. Conecta su empresa con su vida diaria para que siempre este al tanto de los movimientos de su compa�ia, ofrecemos planes de voz, internet, Cloud, Data center y Seguridad..</p>
            </div>
            <div class="col-sm-4">
                <span><img style="width:300px !important;height:300px !important" src="img/imagen-8.jpg" /></span>
                <h4>PREPAGO</h4>
                <p>REALLY MOBILE ofrece la mejor experiencia prepago del mercado, con excelentes beneficios y equipos al alcance de todos.</p>
            </div>
            <div class="col-sm-4">
                <span><img style="width:300px !important;height:300px !important" src="img/imagen-9.jpg" /></span>
                <h4 style="color:#303030;">Portabilidad</h4>
                <p>Cambiate a Really Mobile y disfruta de los mejores beneficios para ti y tu familia. </p>
            </div>
        </div>
    </div>
        </div>
    </div>

    

    <!-- Add Google Maps -->
    <div id="googleMap" style="height:400px;width:100%;"></div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPzVUOhD92QFxMpXDW0TUwtE4i-GpXzSc&callback=myMap"></script>
    

    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
    </script>

</body>
</html>
