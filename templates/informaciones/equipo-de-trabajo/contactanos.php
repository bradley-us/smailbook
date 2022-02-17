<!Doctype html>
<html lang="es">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
		<title>Smailbook - Contáctanos</title>
		<link rel="stylesheet" href="../../../css/estilos.css" />
        <link rel="icon" type="image/png" href="../../../img/app-icon.png" sizes="16x16" />
        
        <meta name="author" content="Sb Smailbook" />
        <meta name="description" content="Quiénes somos, qué objetivo tenemos, Smailbook: Sobre nosotros." />
        <meta name="keywords" content="saber de smailbook, smailbook sobre nosotros, equipo de smailbook, personas de smailbook, trabajadores de smailbook, conocer sb, conocer smailbook" />
        
        
        
        <meta property="og:title" content="Sobre Sb Smailbook" />
        <meta property="og:url" content="https://www.smailbook.com/templates/informaciones/equipo-de-trabajo/sobrenosotros.php" />
        <meta property="og:site_name" content="SMAILBOOK.COM"/>
        <meta property="og:image" content=" https://www.smailbook.com/img/app-icon.png" />
        <meta property="og:description" content="Conozca Sb Smailbook, qué ofrecemos o hacemos."/>
        <meta property="og:type" content="article" />
        
        <?php include('../../../includes/head-elements.php'); ?>
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101835135-1', 'auto');
  ga('send', 'pageview');

</script>
       
       <!-- HEADER -->
       <script src="http://code.jquery.com/jquery-latest.js"></script>
       
       <!-- Submenu-Accordion-from-Body-Section Scripts -->
       <script src="../../../js/jquery.min.js"></script>
        <!-- HEADER SCRIPTS --><script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script><!--
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
                <a href="../../../index.php">Inicio </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="../../informacioncentral.php"> Informaciones </a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contactanos.php"> Contáctanos</a>
            </div>
       
        <div class="container">
           <div class="titulo"><h1>¡Contáctanos!</h1></div>
            <div id="content-edt">
            <h3>¡Conócenos, más cerca de ti!</h3>
                <hr style="width: 85%; margin: auto;">
                <p><strong>Si desea comunicarse con nosotros o enviar una opinión:</strong>
                
                
                <div id="fixed-content">
                <div id="fixed-form-content">
                <div id="form-content">
                <h4>Complete el siguiente formulario:</h4>
    <form id="contact-form" class="contact" name="contact-form" method="post" action="contactsending.php">
        <div class="form-group1">
            <input type="text" name="nombre" class="form-control name=fiel" required="required" placeholder="Nombre*" />
        </div>
        <div class="form-group1">
            <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Email*" />
        </div>
        <div class="form-group1">
        <textarea name="mensaje" id="message" required="required" class="form-control"
         rows="4" placeholder="Comentario*"></textarea>
        </div>
        <p style="font-size: 11px; color: rgba(0,0,0,0.8); padding: 0px;">(*)Campos obligatorios</p>
        <div class="form-group0">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
                    </div>
                    
        <div id="fixed-imgcontactus">
        <div class="imgcontactus">
            <img src="../../../img/contactanos.png" class="img1c">
            <img src="../../../img/contactanos1.png" class="img2c">
        </div>
                    </div>
                    
            </div>
            </div>
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