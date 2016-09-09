<?php
session_start();
if (!isset($_SESSION["emailAdmin"])){
	echo "<script>alert('Usario não encontrado.');window.location.href='http://'+window.location.hostname+'/admin';</script>";
}
$usuario['nome'] = $_SESSION["nomeAdmin"];
$usuario['email'] = $_SESSION["emailAdmin"];

include ("classes/cardapioController.php");

$cardapioController = new CardapioController();

$cardapio = $cardapioController->getCardapio($_GET['id']);
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
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

                $('#myTabs a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                });
			});
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
			<h3>Cardápio</h3>
             <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Dados Cardapio</a></li>
                <li role="presentation"><a href="#pratos" aria-controls="pratos" role="tab" data-toggle="tab">Pratos</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <form action="editcardapioform.php" method="post">
                    <div class="form-group">
                        <label for="nomeCardapio">Nome do Cardapio</label>
                        <input type="text" class="form-control" id="nomeCardapio" placeholder="Cardapio">
                    </div>
                    <div class="form-group">
                        <label for="imagemCardapio">
                        <?php
                        if ($cardapio['imagem']){
                            echo '<img src="../imagens/'.$cardapio['imagem'].'" width="100px" />';
                        }else{
                            echo 'Sem imagem';
                        }
                        ?>
                        </label>
                        <input type="file" id="imagemCardapio">
                        <p class="help-block">Selecione a imagem aqui.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" <?php echo $cardapio['status'] == '1' ? 'checked' : '' ?>> Ativo </label>
                    </div>
                    <input type="hidden" id="idCardapio" name="idCardapio" value="<?php echo $cardapio['id']?>" />
                    <button type="submit" class="btn btn-default">Editar</button>
                    </form>
                
                </div>
                <div role="tabpanel" class="tab-pane" id="pratos">
                    Pratos
                
                </div>
            </div>	
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