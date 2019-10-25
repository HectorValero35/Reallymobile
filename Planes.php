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
    <script src="plan.js"></script>
   
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="0">

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
                    <li><a href="#Planes.php">Planes y Promociones</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>

          
    
    <!-- Container (Portfolio Section) -->
    <div id="Planes" class="container-fluid text-center bg-grey">
        <h2>Planes y Promociones</h2><br>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalPlanesPrepago">       
                    <img src="img/imagen-22.jpg" alt="Planes Prepago" width="300" height="300">
                    <p><strong>Planes Prepago "500Mb Gratis "Ingresar"</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalTelevisionDigital" >
                    <img src="img/imagen-23.jpg" alt="Television Digital" width="300" height="300">
                    <p><strong>Television Digital "2 Meses Gratis"</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalInternetHogar">
                    <img src="img/imagen-26.jpg" alt="Internet Hogar" width="300" height="300">
                    <p><strong>Planes Internet Hogar "Duplica tus Megas"</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalSolucionMovil">
                    <img src="img/imagen-29.jpg" alt="Solucion Movil" width="300" height="300">
                    <p><strong>Solucion Movil para su Empresa "Conozca Mas"</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalSeguridadEmpresarial">
                    <img src="img/imagen-32.jpg" alt="Seguridad Empresarial" width="300" height="300">
                    <p><strong>Seguridad Empresarial</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalCloud">
                    <img src="img/imagen-35.png" alt="Cloud" width="300" height="300">
                    <p><strong>Cloud</strong></p>
                </div>
            </div>
            

        </div><br>
        <!-- es para el formulario -->
<div class="modal fade" id="myModalformulariodeplan">
<div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodal"  class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                         <form action="Consultaplan.php" method="get">
                             <label for="">Déjanos tus datos para contactarte</label>
                             <input type="text" class="form-control" value="" placeholder="Ingresa tu numero celular" name="Numero_de_celular">
                             <input type="text" class="form-control" value="" placeholder="Ingresa tu Nombre" name="Nombre">
                             <input type="text" class="form-control" value="" id="plan"  name="plan" disabled name="Tipo_de_plan">
                             
                             <br>
                             <input  type="submit" value="Enviar" class= "btn btn-primary form-control" style="border-radius: 10px " >
                         </form>   
                        </div>                        
                        <div class="caption">
                             </div>
                    </div>
                    
                </div>
            </div>

</div>

        <!-- Modal Planes Prepago-->
        <div id="myModalPlanesPrepago" class="modal fade" role="dialog" >
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodal"  class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div onclick="pasarplan('planUno')"  class="thumbnail" data-toggle="modal" data-target="#myModalformulariodeplan">
                                        <img src="img/imagen-20.0.png"  style="height:70% !important;" alt="Planes Prepago">
                                    </div>
                                </div>
                                <div class="item">
                                    <div   class="thumbnail" data-toggle="modal" data-target="#myModalformulariodeplan">
                                        <img src="img/imagen-21.jpg" alt="Planes Prepago">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodal" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodal" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>                        
                        <div class="caption">
                            <p>Planes Prepago</p>
                            <p>REALLY MOBILE  ofrece las mejores ofertas en planes prepago, minutos a todo operador e internet con la mejor velocidad.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalTelevisionDigital" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalTelevisionDigital" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div onclick="pasarplan2('planTres')"  class="thumbnail" data-toggle="modal" data-target="#myModalformulariodeplan">
                                        <img src="img/imagen-24.jpg" style="height:70% !important;" alt="Television Digital">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail" data-toggle="modal" data-target="#myModalformulariodeplan">
                                        <img src="img/imagen 25.jpg" alt="Television Digital">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalTelevisionDigital" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalTelevisionDigital" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>Television Digital</p>
                            <p>REALLY MOBILE te ofrece la mejor oferta de television del mercado, 100% fibra y por el mes de Octubre al adquirir nuestros servicios te obsequiamos los dos primeros meses con planes de vigencia de 1 año. </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalInternetHogar" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalcob" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-27.png" style="height:70% !important;" alt="Internet Hogar">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imgen-28.jpg" alt="INTERNET HOGAR">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalcob" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalcob" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>INTERNET HOGAR</p>
                            <p>REALLY MOBILE ofrece el mejor servicio de internet para su hogar, contamos con velocidades de hasta 500MB asimetricas para asegurar la navegacion y descargas. Si adquieres un plan en el mes de Octubre te dupliamos las megas adquiridas por 6 meses.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>

        
        <div id="myModalSolucionMovil" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalSolucionMovil" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-30.jpg" style="height:70% !important;" alt="Solucion Movil para su Empresa">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-31.jpg" alt="Solucion Movil para su Empresa">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalSolucionMovil" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalSolucionMovil" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                         </div>
                        <div class="caption">
                            <p>Solucion Movil para su Empresa</p>
                            <p>REALLY MOBILE brinda las mejores alternativas de comunicaci&oacuten para su empresa, apps ilimitadas, seguridad movil empresarial, roaming internacional y mucho mas. Por este mes reciba el doble de gigas y minutos ilimitados a todo operador en Colombia y todo Suramerica .</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalSeguridadEmpresarial" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalSeguridadEmpresarial" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-33.jpg" style="height:70% !important;" alt="Seguridad Empresarial">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-34.jpg" alt="Seguridad Empresarial">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalSeguridadEmpresarial" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalSeguridadEmpresarial" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>Seguridad Empresarial</p>
                            <p>REALLY MOBILE ofrece blindar su seguridad y la de sus colaboradores, ciberseguridad, autenticacion protegida, centro de operaciones y seguridad en redes. Adquiera nuestros servicios y obtendra un 10% de descuento en su plan.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalCloud" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalCloud" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-36.jpg" style="height:70% !important;" alt="Cloud">
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-37.jpg" alt="Cloud">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalCloud" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalCloud" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>Cloud</p>
                            <p>REALLY MOBILE ofrece soluciones digitales en la nube que se adaptan a su Empresa. Construya sus aplicaciones en el Cloud de Really Mobile. Ofrecemos almacenamiento en la Nube y si contratas este servicio con nosotros te obsequiamos 100GB de almacenamiento en la Nube.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalPaquetesyRecargas" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalPaquetesyRecargas" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-14.0.jpg" style="height:70% !important;" alt="PAQUETES Y RECARGAS">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-14.0.jpg" alt="PAQUETES Y RECARGAS">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalPaquetesyRecargas" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalPaquetesyRecargas" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>PAQUETES Y RECARGAS</p>
                            <p>REALLY MOBILE brinda diversos planes y recargas para que no te desconectes nunca, todo a tu disponibilidad y presupuesto.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalInternetEmpresas" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalInternetEmpresas" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-15.0.png" style="height:70% !important;" alt="INTERNET EMPRESAS">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-15.0.png" alt="INTERNET EMPRESAS">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-15.0.png" alt="INTERNET EMPRESAS">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalInternetEmpresas" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalInternetEmpresas" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>INTERNET EMPRESAS</p>
                            <p>REALLY MOBILE brinda la mejor velocidad y cobertura para su empresa garantizando su conectividad con el mundo.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!--<h4 class="modal-title">NIQUEL</h4>-->
                    </div>
                    <div class="modal-body">

                           <div id="slidermodal" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!--<ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ol>-->

                

               

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#slidermodal" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slidermodal" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

                        <!--<img src="img/niquel1_photo.jpg"  style="border:none;"  class="img-thumbnail" alt="Cinque Terre">
                        <div style="text-align:left" class="caption">
                            <p >Niquel</p>
                        </div>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
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
        if (pos < winTop + 0) {
          $(this).addClass("slide");
        }
    });
  });
})
    </script>

</body>
</html>
