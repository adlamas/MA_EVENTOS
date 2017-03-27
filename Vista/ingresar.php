<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>               
        <link rel="stylesheet" href="../css/estilos.css">    
        <script src="../js/reproductor.js"></script>
        <?php session_start(); ?>
        
        <script>
            $(document).ready(function(){
                $('#input_registro').hide();
                
                $('#enviar').hover(function(){
                    $(this).css('background-color', 'blue');
                }, function(){
                    $(this).css('background-color', '#ff1701');
                });
                
                
                
                $('#registro').click(function(){
                   $('#input_registro').slideDown(); 
                });
            });
            
        </script>
         
    </head>
    <body style="background-color: #111" class="container-fluid">
    <div class="container">  
      <header>
          <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
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
        
    <!-- Cuadro de ingreso !-->    
    <section class="cuadro_login col-xs-12 col-md-6 col-md-offset-3" 
             style="color: #c4e3f3; margin-top: 100px;text-align: center">
        
        <h3 style="color: #ff1701;">Ingresa con tu nombre, apellido y contraseña</h3>
        
        <form action="../Controlador/ingreso.php"  method="POST" style=" padding-top: 40px; padding-bottom: 60px; margin-top: 10px">
            <h4 style="font-weight: bold; color: whitesmoke">Nombre</h4>
            <input class="form-control center-block"  style="background-color: whitesmoke; color: #777;
                   width: 300px; height: 40px; font-weight: bold" type="text" name="nombre">

            <h4 style="font-weight: bold; color: whitesmoke">Apellido</h4>
            <input class="form-control center-block" style="background-color: whitesmoke; color: #777;width: 300px; height: 40px; font-weight: bold" type="text" name="apellido">

            <h4 style="font-weight: bold; color: whitesmoke">Password</h4>
            <input class="form-control center-block" style="background-color: whitesmoke; color: #777;width: 300px; height: 40px; font-weight: bold" type="password" name="password">

            <input class="form-control center-block" id="enviar" style="background-color: #ff1701;margin-top: 30px;
                   color: #777;width: 250px; height: 40px;color: whitesmoke; font-size: 20px; font-weight: bold" type="submit" value="ENVIAR">
        
            <a href="#"><p id="registro" style="margin-top: 20px;">¿Aún no tenés una cuenta?</p></a>
            <a href="registro.html"><input class="form-control center-block" id="input_registro" style="background-color: #2098d1;margin-top: 10px;
                   color: #777;width: 150px; height: 35px;color: black; font-size: 15px; font-weight: bold"
                   type="button" value="Resgistrate">
            </a>
        
            
        </form>
    </section>
        
        
    </body>
</html>
