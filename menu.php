<?php
include ("admin/classes/cardapioController.php");

$cardapioController = new CardapioController();

$cardapios = $cardapioController->getTodosCardapios();
$count = 0;

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


<!--manu start here-->
<div class="menu">
	<div class="container">
		<div class="menu-main">
			<div class="menu-head">
			  <h3>Marmitas Saudáveis</h3>
			  <p>Somos uma empresa que se preocupa com a alimentação, por isso desenvolvemos uma solução adequada de refeição pratica, rápida, balanceada e saudável. Nós preparamos a sua alimentação, congelamos e entregamos, é só descongelar e está pronto.</br>
				Diariamente, você precisa ingerir quantidades diferentes de carboidratos, proteínas, vitaminas e minerais, por isso, buscamos os melhores e mais frescos ingredientes. Não utilizamos conservantes e nossos pratos contem pouco teor de sódio e óleo. Adicionamos conhecimento, dedicação e amor para preparar pratos que atendam suas necessidades.
</p>				
			</div>
			<div class="menu-top">
                    <?php foreach($cardapios as $cardapio): ?>
                        <?php if($count == 0 || $count == 3): ?>
                            <div class="menu-top-grids mgd1 wow bounceInRight" data-wow-delay="0.5s">
                        <?php endif; ?>
                        <div class="col-md-4 menu-items">
						    <a href="cardapio.php?id=<?php echo $cardapio['id']; ?>"><img src="images/<?php echo $cardapio['imagem']; ?>" alt="" class="img-responsive"></a>
						    <h4><a href="cardapio.php?id=<?php echo $cardapio['id']; ?>"><?php echo $cardapio['nome']; ?></a></h4>
						</div>
                        <?php if($count == 2): ?>
                            <div class="clearfix"> </div>
                            </div>
                            </br>
                            </br>
                            </br>
                        <?php endif; ?>
                        <?php if($count == 5): ?>
                            <div class="clearfix"> </div>
                            </div>
                            </div>
                            </div>
                            </div>
                                </br>
                                </br>
                        <?php endif; ?>
                        <?php $count++; ?>
                    <?php endforeach; ?>

				  <div class="clearfix"> </div>
				</div>
			</div>
	   </div>
	</div>
</div>
<!--menu end here-->
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