<!Doctype html>
<html lang="es">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
		<title>Smailbook - Better Life</title>
		<link rel="stylesheet" href="../../../css/estilos.css" />
        <link rel="icon" type="image/png" href="../../../img/app-icon.png" sizes="16x16" />
        <meta name="author" content="Sb Smailbook" />
        
        <?php include('../../includes/head-elements.php'); ?>
        
        <!-- HEADER -->
       <script src="http://code.jquery.com/jquery-latest.js"></script>
       
       <!-- Submenu-Accordion-from-Body-Section Scripts -->
       <script src="../../../js/jquery.min.js"></script>
        <!-- HEADER SCRIPTS -->
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script><!--
        <script src="../../../js/headroom.min.js"></script>
        -->
        <?php include('../../../includes/scripts-in-head.php'); ?>
        
	</head>
	
	<body>
		<header id="header">
           <?php include('../../../includes/header.php'); ?>
		</header>
       
       <div class="all-body-all">
        
        
        <div><?php include('../../../includes/header-search.php'); ?></div>
        
        
        <div><?php include('../../../includes/others.php'); ?></div>
        
        
        
        <main class="main-template">
		<section>
          <div class="itinery">
                <a href="../../../index.php">Inicio </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="../../../informacioncentral.php"> Informaciones </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="thankscontact.php"> Gracias por comunicarse</a>
            </div>
           
            <div class="container-thankscontact">
                <p style="font-size: 25px;padding-bottom: 7px;"><strong>¡Gracias por comunicarte con nosotros!
                </strong></p><p><strong>Responderemos lo más pronto posible, el tiempo estimado es de 5-7 días. Visite nuestro sitio:</strong></p>
                
                <div class="content-thankscontact">
                <a href="../../index.php" class="a-thankscontact">Inicio</a>
                    <a href="../informacioncentral.php" class="a-thankscontact">Informaciones - Foros</a>
            </div>    
                <br/>
                <hr style="width: 85%; margin: auto;">     
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
        
                    </div>
         </section>
        
            
            
            
            
        
        <footer>
            <div> <?php include('../../../includes/footer.php'); ?> </div>
        </footer>
        </main>
        
        </div>
        
        <script src="../../../js/menu.js"></script>
        <script src="../../../js/submenu-accordion-from-body-section.js"></script>
        <?php include('../../../includes/scripts-body-bottom.php'); ?>
        <script src="../../../js/buscador.js"></script>
        <!-- SLIDER SCRIPTS -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../../../js/jquery.slides.js"></script>
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