<?php
session_start();
if (!isset($_SESSION["emailAdmin"])){
	echo "<script>alert('Usario não encontrado.');window.location.href='http://'+window.location.hostname+'/admin';</script>";
}
$usuario['nome'] = $_SESSION["nomeAdmin"];
$usuario['email'] = $_SESSION["emailAdmin"];

include ("classes/cardapioController.php");
$cardapioController = new CardapioController();

$nomeCardapio = $_POST['nomeCardapio'];
$statusCardapio = $_POST['statusCardapio'];
$idCardapio = $_POST['idCardapio'];
$params = array('id' => $idCardapio,
                'nome' => $nomeCardapio,
                'status' => $statusCardapio);

if ( isset($_FILES["imagemCardapio"]["name"]) && $_FILES["imagemCardapio"]["name"] != '' ){
    // Upload File
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["imagemCardapio"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $errorMsg = '';
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagemCardapio"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $errorMsg = "Arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $errorMsg = "Arquivo já existente.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["imagemCardapio"]["size"] > 500000) {
        $errorMsg = "Desculpe, arquivo muito grande.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $errorMsg = "Desculpe, apenas JPG, JPEG, PNG & GIF são permitidos.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Erro no upload: ".$errorMsg."');</script>";
    }else{
        if (move_uploaded_file($_FILES["imagemCardapio"]["tmp_name"], $target_file)) {
            $msg = "Arquivo enviado com exito!";
            $params['imagem'] = $_FILES["imagemCardapio"]["name"];
        }else {
            echo "<script>alert('Desculpe, ouve um erro ao enviar o arquivo.');</script>";
            $uploadOk = 0;
        }
    }
}

$resultado = $cardapioController->setCardapio($params);

if($resultado){
    echo "<script>alert('Cardapio editado com sucesso');window.location.href='http://'+window.location.hostname+'/admin/editcardapio.php?id=".$idCardapio."';</script>";
}else{
    echo "<script>alert('Erro ao cadastrar cardapio');window.location.href='http://'+window.location.hostname+'/admin/editcardapio.php?id=".$idCardapio."';</script>";
}


?>