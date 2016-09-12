<?php
include ("admin/classes/cardapioController.php");

$cardapioController = new CardapioController();

$pratos = $cardapioController->getPratosPorCardapio($_GET['id']);

?>

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Nutre Marmitaria</title>

<link href="css/style_2.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Food Stuff Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
</head>

<!--navgation start here-->
<div class="navgation">
	<div class="fixed-header">
				<div class="top-nav">
						<span class="menu"> </span>
					<ul>
					    <li><a href="index.html"><img src="images/lo.png" alt=""></a></li>
						<li><a href="index.html">Home</a></li>
						<li><a href="menu.php" class="active">Carárpio da semana</a></li>
						<li><a href="pedido.html">Como fazer seus pedidos</li>
						<li><a href="contact.html">Contato</a></li>
						<li><a href="https://www.facebook.com/nutremarmitariasaudavel/?fref=ts" target="_blank"><img style="width: 48px; height: 48px;" alt="" src="images/face.png" title="Facebook" /></a ></li>
						<li><a href="https://www.instagram.com/nutre_marmitaria_campinas/" target="_blank"><img style="width: 48px; height: 48px;" alt="" src="images/insta.png" title="Instagran" /></a></li>
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
				<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!--script-->
			
<!--navgaton end here-->
<body>


<!--single page start here-->
<div class="container">
<div class="single">
<div align="center">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <img class="img-responsive sin-on" src="images/cardapiotop.png" width="100%" alt="" />

        <?php foreach($pratos as $posicao => $texto): ?>
            <div class="col-md-4 pratos <?php echo $posicao ?>">
            <span class="caption"><?php echo $posicao ?></span>
                <?php $frases = explode('(l)',$texto);
                    foreach($frases as $frase): ?>
                        <p><?php echo $frase ?></p>
                    <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <img class="img-responsive sin-on" src="images/cardapiofooter.png" width="100%" alt="" />
    </div>		
</div>
</div>
</br>
</br>
</div>

<!---->	
					
</div>
</div>
</div>
<!--single page end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 footer-grid  wow bounceIn" data-wow-delay="0.4s">
		</div>
		<div class="copyright">
				<p>© 2016 Todos os dieitos reservados a Nutre Marmitaria Saudável.</p>
		</div>
	</div>
</div>
<!--footer end here-->

</body>
</html>