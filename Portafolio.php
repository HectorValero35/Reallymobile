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
                    <li><a href="Servicio.php">Servicios</a></li>
                    <li><a href="#Portafolio">Portafolio</a></li>
                    <li><a href="Planes.php">Planes y Promociones</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>

             
          
    
    <!-- Container (Portfolio Section) -->
    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>Portafolio</h2><br>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalSmartphones">       
                    <img src="img/imagen-2.jpg" alt="Smartphones" width="300" height="300">
                    <p><strong>Smartphones</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalPrepago" >
                    <img src="img/imagen-8.0.jpg" alt="Prepago" width="300" height="300">
                    <p><strong>Prepago</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalInternetHogar">
                    <img src="img/imagen-7.0.jpg" alt="Internet Hogar" width="300" height="300">
                    <p><strong>Internet Hogar</strong></p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalCloud">
                    <img src="gif/imagen-gif-6.1.gif" alt="Cloud" width="300" height="300">
                    <p><strong>Cloud</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalTelevision">
                    <img src="img/imagen-10.0.jpg" alt="Television" width="300" height="300">
                    <p><strong>Televisi&oacuten</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalVozEmpresas">
                    <img src="img/imagen-11.0.jpg" alt="Voz Empresas" width="300" height="300">
                    <p><strong>Voz Empresas</strong></p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalReallyPlay">
                    <img src="img/imagen-12.0.jpg" alt="Really Play" width="300" height="300">
                    <p><strong>Really Play</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalTiendaOnLine">
                    <img src="img/imagen-13.0.jpg" alt="Tienda On Line" width="300" height="300">
                    <p><strong>Tienda On Line</strong></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalPaquetesyRecargas">
                    <img src="img/imagen-14.0.jpg" alt="Paquetes y Recargas" width="300" height="300">
                    <p><strong>Paquetes y Recargas</strong></p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="thumbnail" data-toggle="modal" data-target="#myModalInternetEmpresas">
                    <img src="img/imagen-15.0.png" alt="Internet Empresas" width="300" height="300">
                    <p><strong>Internet Empresas</strong></p>
                </div>
            </div>

        </div><br>

        <!-- Modal Smartphones-->
        <div id="myModalSmartphones" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodal" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-2.jpg" style="height:70% !important;" alt="Smartphones">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-2.jpg" alt="Smartphones">
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
                            <p>SMARTPHONES</p>
                            <p>REALLY MOBILE  ofrece los mejores smartphones del mercado al mejor precio y con los mejores planes.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalPrepago" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalPrepago" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-8.0.jpg" style="height:70% !important;" alt="Prepago">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-8.0.jpg" alt="Prepago">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalPrepago" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalPrepago" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>PREPAGO</p>
                            <p>REALLY MOBILE  ofrece los mejores planes para tu smartphone, diferentes promociones en voz e internet. </p>
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
                                        <img src="img/imagen-7.0.jpg" style="height:70% !important;" alt="Internet Hogar">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-7.0.jpg" alt="INTERNET HOGAR">
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
                            <p>REALLY MOBILE ofrece el mejor servicio de internet para su hogar, contamos con velocidades de hasta 500MB asimetricas para asegurar la navegacion y descargas.</p>
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
                                        <img src="gif/imagen-gif-6.1.gif" style="height:70% !important;" alt="CLOUD">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="gif/imagen-gif-6.1.gif" alt="CLOUD">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalniquel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalniquel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>CLOUD</p>
                            <p>REALLY MOBILE  ofrece el servicio de almacenamiento en la nube, recursos computacionales y la capacidad de software y hardware centralizados en nuestro Data Center .</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModalTelevisi&oacuten" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalTelevisi&oacuten" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-10.0.jpg" style="height:70% !important;" alt="TELEVISI&OacuteN">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-10.0.jpg" alt="TELEVISI&OacuteN">
                                    </div>
                                </div>
                    
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalTelevision" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalTelevision" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>TELEVISI&OacuteN</p>
                            <p>REALLY MOBILE  ofrece fibra optica que garantiza la mejor imagen y estabilidad en la se&ntildeal, contamos con grabador para que no te pierdas ninguno de tus programas favoritos.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModalVozEmpresas" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalVozEmpresas" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-11.0.jpg" style="height:70% !important;" alt="VOZ EMPRESAS">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-11.0.jpg" alt="VOZ EMPRESAS">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-11.0.jpg" alt="VOZ EMPRESAS">
                                    </div>
                                </div>

                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalamar" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalVozEmpresas" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                         </div>
                        <div class="caption">
                            <p>VOZ EMPRESAS</p>
                            <p>REALLY MOBILE brinda las mejores alternativas de comunicaci&oacuten por voz para su empresa con los mejores precios y planes ilimitados .</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalReallyPlay" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalReallyPlay" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="imagen-12.0.jpg" style="height:70% !important;" alt="REALLY PLAY">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-12.0.jpg" alt="REALLY PLAY">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalReallyPlay" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalReallyPlay" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>REALLY PLAY</p>
                            <p>REALLY MOBILE brinda el mejor entretenimiento desde su plataforma Really Play con las mejores peliculas y series para que disfrutes en familia y desde tus dispositivos moviles.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModalTiendaOnLine" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" style="margin:10%;">
                    <div class="modal-header" style="border:none;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="slidermodalTiendaOnLine" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="thumbnail">
                                        <img src="img/imagen-13.0.jpg" style="height:70% !important;" alt="TIENDA ON LINE">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-13.0.jpg" alt="TIENDA ON LINE">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumbnail">
                                        <img src="img/imagen-13.0.jpg" alt="TIENDA ON LINE">
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#slidermodalzincazul" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slidermodalTiendaOnLine" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="caption">
                            <p>TIENDA ON LINE</p>
                            <p>REALLY MOBILE brinda ventas de productos y tecnologia a travez de la pagina, encontraras PC portatiles, SmartTV y muchos productos mas.</p>
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

    <!-- Container (Pricing Section) -->


    <!-- Container (Contact Section) -->
    

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
