<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mandao's Express. Entregas a domicilio, Ciudad Guayana. Bolívar. Venezuela">
    <meta name="author" content="Ing. Delymar Rodríguez">

    <title>Contacto | Mandao's Express</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   
</head>

<body>

     <img class="img-responsive img-full" src="img/encabezado.jpg" alt="">

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Mandao's Express</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" >Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Quienes Somos</a>
                    </li>
                    <li>
                        <a href="servicios.html" >Servicios</a>
                    </li>
                    <li>
                        <a href="#" class="prueba">Contacto</a>
                    </li>
                    <li>
                        <a href="pago.php">Pago</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                   <h2 class="intro-text text-center subtitulo2">Contacto 
                        <strong class="subtitulo">MANDAO'S EXPRESS</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63172.67902030494!2d-62.7632618!3d8.273664349999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf930957dda3f%3A0xa7be18a2d7cc3d22!2sPuerto+Ordaz%2C+Venezuela!5e0!3m2!1ses-419!2s!4v1430534329514"></iframe>
                </div>
                <div class="col-md-4">
                    <br>
                    <p>Telefono: 
                        <strong class= "telefono">0286-961.80.24/ 0424-951.00.04</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:rodriguezdelymar@gmail.com">mandaosexpress@gmail.com</a></strong>
                    </p>
                    <p>Redes Sociales:
                        <br>
                        <a href="https://facebook.com/Mandaos_Express"><img src="img/face.png"  width='50' height='50' ></a>
                        <a href="https://facebook.com/Mandaos_Express"> Mandao's Express, C.A</a><br><br>
                        <a href="https://instagram.com/mandaos_express"><img src="img/insta.png"  width='50' height='50' ></a>
                        <a href="https://instagram.com/mandaos_express"> @mandaos_express</a><br><br>
                        <a href="https://twitter.com/Mandaos_Express"><img src="img/twit.png"  width='50' height='50' ></a>
                         <a href="https://twitter.com/Mandaos_Express"> @Mandaos_Express</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                     <h2 class="intro-text text-center subtitulo2">Ya puedes escribirnos
                        <strong class="subtitulo">MANDAO'S EXPRESS</strong>
                    </h2>
                    <hr>
                    <p> </p>
                    <form role="form" >
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre y Apellido</label>
                                <input type="text" id="user" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Correo Electrónico</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Número de Telefono</label>
                                <input type="tel" id="telf" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensaje</label>
                                <textarea class="form-control" id="message" rows="6"></textarea>
                            </div>
                            <div>
                                <input type="button" name="submit" id="submit" value="Enviar" onclick="enviar()" class="btn btn-info pull-right">
                            </div>

                         </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
 <!-- /.container -->

  <!-- Footer de la Página -->
    <footer class="footer container">
        <div class="col-md-12">
           <!--Línea de Iconos Social Networks-->
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-1" style="margin-left:5%">
                    <a href="https://facebook.com/Mandao's Express, C.A"><i class="fa fa-facebook-official fa-5x"></i></a>
                </div>
                <div class="col-md-1">
                    <a href="https://instagram.com/mandaos_express"><i class="fa fa-instagram fa-5x"></i></a>
                </div>
                <div class="col-md-1">
                    <a href="https://twitter.com/Mandaos_Express"><i class="fa fa-twitter-square fa-5x"></i></a>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <h4><strong class= "titulofooter">MANDAO'S EXPRESS</strong></h4>
                        <div class="divider"></div>
                         
                         <a href="mailto:mandaosexpressca@gmail.com">mandaosexpressca@gmail.com</a><br>
                         <abbr title="Teléfono">Telf:</abbr> 0286-961.80.24  0424-951.00.04      
                    </address>
                </div>
                <div class="col-md-5">
                    <div style="margin-top:10%">
                      <p class="text-center ">Diseñado y Desarrollado por <a href="mailto:rodriguezdelymar@gmail.com">Delymar Rodríguez</a> <br>
                    Copyright © Todos los Derechos Reservados | 2015
                    </p>  
                    </div>
                    
                </div>
                <div class="col-md-3" style="padding-left:8%">
                    <h4 align="left"><strong class="titulofooter">Mapa del Sitio</strong></h4>
                    <div class="divider"></div>
                    <ul class="list-unstyled">
                        <li><a href="#" >Inicio</a></li>
                        <li><a href="about.html">Quienes Somos</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                        <li><a href="pago.php">Pago</a></li> 
                    </ul>
                </div>
            </div>
        </div>        
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    function enviar(){
        var email = $("#email").val();
        var user = $("#user").val();
        var message = $("#message").val();
        var telf = $("#telf").val();

        var url = "http://mandaos-express.com.ve/mail.php";
        $.ajax({
            url : url,
            type: 'POST',
            data:{email: email, user:user, message:message, telf: telf},
            success: function (res){
                alert("El mensaje se ha enviado con éxito");
                $("#email").val("");
                $("#user").val("");
                $("#message").val("");
                $("#telf").val("");
            },
            error : function (err){
                alert("Ocurrió un problema, disculpenos");
            }
        })
    }
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45852134-2', 'auto');
  ga('send', 'pageview');

</script>
</body>



</html>
