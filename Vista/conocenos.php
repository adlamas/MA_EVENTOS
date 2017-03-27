<!DOCTYPE html>
<html lang="en">
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>MA Eventos</title>

    <meta name="description" content="descripción de la página de Mili">    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/fuentes.css">    
    <link rel="stylesheet" href="../css/animate.css">    
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/hover.css" rel="stylesheet">
    <link href="icono-m3.ico" rel="shortcut icon"/> <!-- Icono de solapa !-->
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

    <main class="main-content">
		
	<div class="page">
		<div class="container">
		<h2 class="entry-title">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempor 
                    incididunt ut  labore et dolore.</h2>
				
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui 
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                    incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur quis
                    autem vel eum iure.</p>
						
                <figure class="align-left"><img src="../img/panda.jpg" alt="Single image" class="img-responsive" style="width:100%;">
                </figure>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui 
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
                    ncidunt ut labore et dolore magnam aliquam quaerat voluptatem enim ad minima.</p>
						
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est
                            laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero 
                            tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
                            autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                            repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente 
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                            asperiores repellat  inventore veritatis.</p>
						
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam 
                            est dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem enim ad minima 
                            quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis es
                            eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
                            voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                            debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae.</p>
						
			<hr class="separator">
						
			<h2 class="sectiont-title">What can we do for you?</h2>
        		<div class="row">
				<div class="col-md-3">
					<div class="feature-numbered">
						<h2 class="feature-title">accusamus iusto</h2>
						<p>Sed ut perspiciatis unde omnis iste natus aperiam, eaque ipsa quae
                                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                                                    sunt explicabo nemo enim ipsam.</p>
							</div>
						</div>
						<div class="col-md-3">
				<div class="feature-numbered">

					<h2 class="feature-title">accusamus iusto</h2>
					<p>Sed ut perspiciatis unde omnis iste natus aperiam, eaque ipsa quae ab illo 
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo 
                                            nemo enim ipsam.</p>
							</div>
							</div>
				<div class="col-md-3">
					<div class="feature-numbered">
					<h2 class="feature-title">accusamus iusto</h2>
					<p>Sed ut perspiciatis unde omnis iste natus aperiam, eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo 
                                            nemo enim ipsam.</p>
								</div>
						</div>
						<div class="col-md-3">
							<div class="feature-numbered">
					<h2 class="feature-title">accusamus iusto</h2>
                                        <p>Sed ut perspiciatis unde omnis iste natus aperiam, eaque ipsa quae ab illo 
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
                                            nemo enim ipsam.</p>
                						</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

    </main>  

		
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>			
                <script src="../js/plugins.js"></script>
                <script src="../js/main.js"></script>  
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>   
                <script src="../js/bootstrap.js"></script>
                
    
		
	</body>

</html>