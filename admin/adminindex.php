<?php
session_start();
if (!isset($_SESSION["emailAdmin"])){
	echo "<script>alert('Usario não encontrado.');window.location.href='http://'+window.location.hostname+'/admin';</script>";
}
$usuario['nome'] = $_SESSION["nomeAdmin"];
$usuario['email'] = $_SESSION["emailAdmin"];

include ("classes/cardapioController.php");

$cardapioController = new CardapioController();

$cardapios = $cardapioController->getTodosCardapios();

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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="Food Stuff Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});

		function editCardapio(id){
			window.location.href='http://'+window.location.hostname+'/admin/editcardapio.php?id='+id;
		}
	
	</script>
<!-- //end-smoth-scrolling -->
<!-- animated-css -->
		<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="../js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
</head>

<!--navgation of admin start here-->
<div class="navgation">
	<div class="fixed-header">
				<div class="top-nav">
						<span class="menu"> </span>
					<ul>		
						<li><a href="adminindex.php" class="active">Editar Cardárpios</a></li>
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
			
<!--navgaton of admin end here-->
<body>


<!--single page start here-->
<div class="container">
    <div class="single">
        <div>		
			<h3>Cardápios</h3>
            <table class="table table-hover">
                <thead>
					<tr>
						<th>Nome</th>
						<th>Status</th>
						<th>Imagem</th>
						<th colspan="2">&nbsp;</th>
					</tr>
				</thead>
                <tbody>
                    <?php if (count($cardapios) < 1 ):?>
                        <tr>
                            <td colspan="5">Nenhum Cardapio registrado</td>
                        </tr>
                    <?php else: ?>
                    <?php foreach ($cardapios as $cardapio): ?>
                    <tr>
                        <td onclick="editCardapio('<?php echo $cardapio['id'] ?>')"><?php echo $cardapio['nome'] ?></td>
                        <td onclick="editCardapio('<?php echo $cardapio['id'] ?>')"><?php echo $cardapio['status'] ?></td>
                        <td onclick="editCardapio('<?php echo $cardapio['id'] ?>')"><?php echo $cardapio['imagem'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
			</table>		
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