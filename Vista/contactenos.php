<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MA Eventos</title>
        <meta charset="UTF-8">
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
    <?php session_start(); ?>
        <style>
        
       // body{background-image: url(img/fiesta-electronica.jpg); background-repeat: repeat;}
       body{background: #111;}
    </style>
     </head>
     
     
    <body class="container-fluid">
      
      <div class="container">
          
      <header>
           <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
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
                          <li><a href="#" class="animated bounceIn">Services</a></li>
                          <li><a href="conocenos.php" class="animated bounceIn">About us</a></li>
                          <li><a href="contactenos.php" class="animated bounceIn">Contact</a></li>
                          <?php
                          if(isset($_SESSION['nombre'])){
                          echo '<li><a href="ingresar.php" class="animated bounceIn">'.$_SESSION['nombre'].'</a></li>';
                          }else
                              echo '<li><a href="ingresar.php" class="animated bounceIn">Ingresar</a></li>';                        
                          ?>
                      </ul>
                      
                  </div>
                  
              </div>
          </nav>      
          
      </header>       
     </div>
    
        <section class="blog-section center-block" style="margin-top: 80px;">

            <header class="row section-header max-inner ">
            <div class="col-lg-12">
             <h2>Contact Us!</h2><hr />
             </div>
            </header>
        </section>
        
    
    <footer class="footer" style="margin-top: 60px; margin-bottom: 0px;">
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
        
        
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>  
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>   
    <script src="../js/bootstrap.js"></script>
            
    </body>
</html>
