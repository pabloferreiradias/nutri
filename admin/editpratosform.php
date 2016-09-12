<?php
session_start();
if (!isset($_SESSION["emailAdmin"])){
	echo "<script>alert('Usario não encontrado.');window.location.href='http://'+window.location.hostname+'/admin';</script>";
}
$usuario['nome'] = $_SESSION["nomeAdmin"];
$usuario['email'] = $_SESSION["emailAdmin"];

include ("classes/cardapioController.php");
$cardapioController = new CardapioController();

$pratos = array();

$posicao = 'A';
for($i=0;$i<6;$i++){
    $pratos[$posicao] = $_POST[$posicao];
    $posicao++;  
}


$idCardapio = $_POST['idCardapio'];
$params = array('id' => $idCardapio,
                'pratos' => $pratos);

$resultado = $cardapioController->setPratosPorCardapio($params);

if($resultado){
    echo "<script>alert('Cardapio editado com sucesso');window.location.href='http://'+window.location.hostname+'/admin/editcardapio.php?id=".$idCardapio."';</script>";
}else{
    echo "<script>alert('Erro ao editar cardapio');window.location.href='http://'+window.location.hostname+'/admin/editcardapio.php?id=".$idCardapio."';</script>";
}


?>