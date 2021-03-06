<!DOCTYPE html>

<!--
Linkeamos de animate.css y de hover.css los efectos

!-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>MA Eventos</title>

    <meta name="description" content="descripción de la página de Mili">    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/fuentes.css">    
    <link rel="stylesheet" href="../css/animate.css">    
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/hover.css" rel="stylesheet">
    <link href="icono-m3.ico" rel="shortcut icon"/> <!-- Icono de solapa !-->
    <link rel="stylesheet" href="../css/normalize-and-boilerplate.css" /> 
    <link rel="stylesheet" href="../css/estilo-grid.css"> 
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="../js/jquery.js"></script>   
    <script src="../js/reproductor.js"></script>
    <script>
        $(document).ready(function(){
           $('#servicios').click(function(){
               $(this).css('color', 'red').css('font-weight', 'bold');
               
           });
           
           
        });
    
    </script>
    
    <?php session_start(); ?>
    
     <style>
        
       // body{background-image: url(img/fiesta-electronica.jpg); background-repeat: repeat;}
       body{background: #111;}
    </style>
   
  </head>
  <body class="container-fluid">    
      
    <div class="container">
          
    <header>
              <nav class="navbar navbar-default navbar-fixed-top" style="top: 0px; background: #d58512;">
                  <a href="#">
                      <span class=" fa fa-play " style="margin-left: 10px;" id="iniciar"></span>
                  </a>
                  <a href="#">
                  <span class="fa fa-stop" style="margin-left: 2px;" id="detener"></span>
                  </a>
                  <a href="#">
                  <span class="fa fa-backward" style="margin-left: 2px;" id="siguiente"></span>
                  </a>
                  <a href="#">
                  <span class=" fa fa-forward" style="margin-left: 2px;" id="anterior"></span>
                  </a>
              </nav>
    </header>
          
    <header id="segundo_header">
          <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="top: 22px;">
              <!-- En HTML5 podemos usar el atributo role para incluir esa información adicional 
              gracias al módulo WAI-ARIA. ATRIBUTO ROLE IMPORTANTE !-->
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                          <!-- navbar-toggle agrega un botón a los disp móviles  !-->
                          <span class="sr-only">Desplegar / Ocultar menú</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      
                      <a href="#" class="navbar-brand animated flipInY hvr-underline-from-left">
                          MA Eventos
                      </a> <!-- Texto a la izquierda !-->                      
                  </div>                  
                  <!-- Inicia menú !-->
                 
                  <div class="collapse navbar-collapse" id="navbar-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li ><a href="index.php" class="container-fluid animated bounceIn">Home</a></li>
                          <li><a href="#" id="servicios" class="animated bounceIn">Services</a></li>
                          <li><a href="conocenos.php" class="animated bounceIn">About us</a></li>
                          <li><a href="contactenos.php" class="animated bounceIn">Contact</a></li>
                          <?php
                          if(isset($_SESSION['nombre'])){
                          echo '<li><a href="ingresar.php" id="nombre_usuario" class="animated bounceIn">'.
                                  $_SESSION['nombre'].'</a></li>';
                          }else
                              echo '<li><a href="ingresar.php" class="animated bounceIn">Ingresar</a></li>';                        
                          ?>
                      </ul>
                      
                  </div>
                  
              </div>
          </nav>      
          
    </header>
          
     </div> 
      
      <header id="myCarousel" class="carousel slide container-fluid" style="margin-top: 20px; ">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('../img/15a.jpg');"></div>
                <div class="carousel-caption wow fadeInRightBig">
                    <h2 style="font-weight: 600; text-shadow: -2px 2px #aaa">MA Eventos</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('../img/15b.jpg');"></div>
                <div class="carousel-caption wow fadeInDown" data-wow-delay="1s">
                    <h2 style="font-weight: 600; text-shadow: -2px 2px #aaa">Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('../img/31a.jpg');"></div>
                <div class="carousel-caption wow slideInRight" data-wow-delay="1s">
                    <h2 style="font-weight: 600; text-shadow: -2px 2px #aaa">Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controles (flechas, acá las desactivé manualmente) -->        
       
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
       
    </header>
      <br><br><br>
      
      
      <!--
      <div class="row container center-block  contenedorTitulo col-lg-12 col-md-12">
      <p class=" " id='Servicios'>Servicios</p> 
      </div> 
      
      !-->
     
      
      <!--  ACÁ ESTÁ LA PARTE (COMENTADA) DE LAS 3 COLUMNAS DE SERVICES NEWS Y CONTACT !-->
      
      
      <div class="row col-lg-12 container center-block miniaturas">
          
          <div class="col-lg-4 col-md-4 col-sm-4 container-fluid">
              <div class="tituloMiniatura ">
                  <a href="Cuadrado.html" class="hvr-wobble-horizontal" style="padding-bottom: 4px;">
                      SERVICES
                  </a>
              </div>
              
              <p class="textoMiniatura">
                  Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, 
                  eum liber hendrerit an.
                  Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, 
                  eum liber hendrerit an.
              </p>
                         
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-4 container ">
              <div class="tituloMiniatura">
                  <a href="#" class=" hvr-wobble-to-top-right" style="padding-bottom: 4px;">NEWS</a>
              </div>
              
              <p class="textoMiniatura">
                  Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                  Quo mundi lobortis reformidans eu, legimus senserit 
                   Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                  Quo mundi lobortis reformidans eu, legimus senserit
              </p>
                         
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-4 container " >
              <div class="tituloMiniatura">
                  <a href="#" class="hvr-sweep-to-bottom" style="padding-bottom: 4px;">CONTACT US!</a>
              </div>
              
              <p class="textoMiniatura">
                  Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod 
                  consectetuer signiferumque eu per.
                  Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod 
                  consectetuer signiferumque eu per.
              </p>
                         
          </div>
      
      
          
      </div>
      
      
      
      <section class="blog-section center-block ">

      <header class="row section-header max-inner ">
        <div class="col-lg-12">
          <h2 style="font-weight: bold; color: white;">SPONSORS</h2><hr />
        </div>
      </header>
          
          <div class="row container center-block"  >
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 container-fluid ">
                  <img src="../img/mili1.jpg" alt="1" class="img-responsive hvr-bounce-in" style="width:100%;">
                  <P class="" style="font-weight: bold; color: white" >DOLOR IN REPREHENDERIT</P>
               
                  <p style="font-size:0.9em;" >Natus error sit voluptatem accusantium doloremque laudantium totam rem...</p>
                  
              </div> 
              
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 container-fluid ">
                  <a href="http://www.velonter.com">
                  <img src="../img/velonter.jpeg" alt="1" class="img-responsive hvr-bounce-in" style="width:100%;">
                  </a>
                  <P style="font-weight: bold; color: white">VELONTER</P>
                 
                  <p style="font-size:0.9em;">Velonter, la exitosa empresa argentina de desarrollo de software.
                  </p>
                  
              </div> 
              
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 container-fluid ">
                  <img src="../img/mili2.jpg" alt="1" class="img-responsive hvr-bounce-in" style="width:100%;">
                  <P style="font-weight: bold; color: white">NEMO ENIM IPSAM </P>
                 
                  <p style="font-size:0.9em;">Natus error sit voluptatem accusantium doloremque laudantium totam rem...</p>
                  
              </div>
              
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 container-fluid ">
                  <img src="../img/mili3.jpg" alt="1" class="img-responsive hvr-bounce-in" style="width:100%;">
                  <P style="font-weight: bold; color: white">ACCUSANTIUM DOLOREMQUE</P>
                
                  <p style="font-size:0.9em;">Natus error sit voluptatem accusantium doloremque laudantium totam rem...</p>
                  
              </div> 
              
          </div>
      </section>
    <!-- end: blog section -->
   
    <section class="blog-section center-block ">
    <header class="row section-header max-inner ">
        <div class="col-lg-12">
          <h2>TITLE</h2><hr />
        </div>
      </header>
        
        <p class=" container-fluid col-lg-12 col-centered text-center" style="margin-bottom: 80px;">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
            quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non 
            numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
            nisi ut aliquid ex ea commodi consequatur quis autem vel eum iure.
        </p>  
        
     </section> 
      
    
    <!-- start: footer -->
    <section  class="blog-section center-block ">
        <header class="row section-header max-inner" style="margin-bottom: -10px;">
        <div class="col-lg-12">
          <h2 >Contact Us!</h2><hr />
        </div>
      </header>
        </section>
    
    <footer class="footer wow fadeInRightBig " style="margin-top: -150px;">
      <div class="row max-inner">
        
          <div class="columns col-2" >
          <h3>Address</h3>
          <p>
            INDIGO LLC<br />
            <br/>
            946 Park Ave<br />
            New York, NY 10021<br />
            <br />
            <a href="#">office@indigo.com</a><br />
            (445) 932 459 934<br />           
          </p>
        </div>

        <div class="columns col-2">
          <h3>Customer Service</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Money back guarantee</a></li>
            <li><a href="#">Help center</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Payment</a></li>
          </ul>
        </div>

        <div class="columns col-2">
          <h3>Account</h3>
          <ul>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>

        <div class="columns col-6">
          <h3>Follow us</h3>
          <div class="row">
            <form class="newsletter-form">
              <div class="columns col-8">
                <input placeholder="Enter your Email ..." type="text">
              </div>
              <div class="columns col-4">
                <input type="submit" value="Subscribe" class="submit">
              </div>
            </form>              
          </div>
          <div class="row">
            <div class="columns col-12 social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>            
          </div>
        </div>

      </div>
    </footer>
    <!-- end: footer -->
          
         
          
    
          
    <audio id ="audio1" preload="auto"> 
            <!-- preload es para que el navegador considere descargar el audio !-->
            <source src="../audios/ShakeItOf.mp3" type="audio/mpeg">           
            El navegador no soporta la etiqueta audio</audio> 
    
    <audio id ="audio2" preload="auto"> 
            <!-- preload es para que el navegador considere descargar el audio !-->
            <source src="../audios/TheEnd.mp3" type="audio/mpeg">           
            El navegador no soporta la etiqueta audio</audio> 
    
    <audio id ="audio3" preload="auto"> 
            <!-- preload es para que el navegador considere descargar el audio !-->
            <source src="../audios/SkyFire.mp3" type="audio/mpeg">           
            El navegador no soporta la etiqueta audio</audio> 
    
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>  
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>   
    <script src="../js/bootstrap.js"></script>
    <script>
     $('.carousel').carousel({
         interval: 5000 //Cambia la velocidad del SlideShow
        })
    </script>
    
     <script src="../js/wow.min.js"></script>
        <script>
              new WOW().init();
        </script>
  
      

  </body>
</html>