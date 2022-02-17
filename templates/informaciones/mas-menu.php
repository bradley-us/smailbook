<!Doctype html>
<html lang="es">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
		<title></title>
		<link rel="stylesheet" href="../../css/estilos.css" />
        <link rel="icon" type="image/png" href="../../img/app-icon.png" sizes="16x16" />
        
        <meta name="author" content="smailbook" />
        <meta name="description" content="informacion de cine, television, preguntas frecuentes, noticias, trailers de peliculas en cines" />
        <meta name="keywords" content="informacion, cine, smailbook, cine smailbook, carteles cine, tv online, television, naturaleza, la tierra, el universo, 3ºguerra mundial, trailers cine, sipnosis de peliculas de cine, tv online, television online, television en linea, tv en linea, información de futbol, capas de la tierra" />
        <meta name="classification" content="informacion, cine, smailbook, cine smailbook, carteles cine, tv online, television, naturaleza, la tierra, el universo, 3ºguerra mundial, trailers cine, sipnosis de peliculas de cine, tv online, television online, television en linea, tv en linea, información de futbol, capas de la tierra" />
        
        <?php include('../../includes/head-elements.php'); ?>
        
        
        
<!-- GOOGLE COMPLEMENTS -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101835135-1', 'auto');
  ga('send', 'pageview');
</script>
       
<!-- FIN GOOGLE COMPLEMENTS -->
       
       <!-- HEADER -->
       <script src="http://code.jquery.com/jquery-latest.js"></script>
       
       <!-- Submenu-Accordion-from-Body-Section Scripts -->
       <script src="../../js/jquery.min.js"></script>
        <!-- HEADER SCRIPTS -->
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script><!--
        <script src="../../js/headroom.min.js"></script>
        -->
        <?php include('../../includes/scripts-in-head.php'); ?>
        
	</head>
	
	<body>
		<header id="header">
           <?php include('../../includes/header.php'); ?>
		</header>
       
       <div class="all-body-all">        
        
        <div><?php include('../../includes/header-search.php'); ?></div> 
        
        <div><?php include('../../includes/others.php'); ?></div>
        
        
        
        <main class="main-template">
		<section>
           <div class="itinery">
                <a href="../../index.php">Inicio </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="../informacioncentral.php"> Informaciones </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="mas-menu.php"> Otros servicios</a>
            </div>
            
            <div class="containerinfocentral">
                <p style="color: #3D92C6; font-size: 24px; text-align: center; padding-bottom: 7px;"><strong>Servicios</strong></p>
                <hr>
                
                <div class="wrapper-mas-menu">
                    <div class="items-mas-menu">
                        <div class="in-items-mas-menu">
                            <h3>Sobre nosotros</h3>
                            <a href="https://www.smailbook.com/templates/informaciones/equipo-de-trabajo/sobrenosotros.php">¿Quiénes somos?</a>
                            <a href="https://www.smailbook.com/templates/informaciones/equipo-de-trabajo/contactanos.php">Contactarse con Smailbook</a>
                        </div>
                        
                        <div class="in-items-mas-menu">
                            <h3>Otros servicios</h3>
                            <a href="https://www.smailbook.com/templates/informaciones/videos.php">Videos</a>
                            <a href="https://www.smailbook.com/templates/informaciones/codigos.php">Códigos</a>
                            <hr>
                            <a href="https://www.smailbook.com/templates/informaciones/colombia/colombia.php">Colombia</a>
                            <a href="https://www.smailbook.com/templates/informaciones/colombia/caracoltv.php">Caracol TV HD</a>
                            <a href="https://www.smailbook.com/templates/informaciones/colombia/rcntv.php">RCN TV HD</a>
                            <hr>
                            <a href="https://www.smailbook.com/templates/informaciones/seccionnoticias/noticias.php">Noticias</a>
                            <a href="https://www.smailbook.com/templates/informaciones/preguntasfrecuentes.php">Preguntas más frecuentes</a>
                        </div>
                    </div>
                </div>              
               
        <div class="aside-show-for-responsive-design">
                    <?php include('../../includes/aside-responsive-template.php'); ?>
        </div>     
            
            </div>                   

                
            <div><?php include('../../includes/pr-mas-fr.php'); ?></div>                
                
                
                

         </section>
        
            
        <div><?php include('../../includes/aside-template.php'); ?></div>
            
            
            
        
        <footer>
            <div> <?php include('../../includes/footer.php'); ?> </div>
        </footer>
        </main>
        
        </div>
        
        <script src="../../js/submenu-accordion-from-body-section.js"></script>
        <script src="../../js/menu.js"></script>
        <?php include('../../includes/scripts-body-bottom.php'); ?>
        <script src="../../js/buscador.js"></script>
        <!-- SLIDER SCRIPTS -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../../js/jquery.slides.js"></script>
    <script>
    $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 6000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
    </script>
        
	</body>
</html>