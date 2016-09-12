<?php

class CardapioController{

    public function getCardapios(){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        $sql = "SELECT * FROM cardapio WHERE ativo='1'";
        $cardapios = $conn->query($sql);
        $conn->close();

        return $cardapios;
    }

     public function getTodosCardapios(){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        $sql = "SELECT * FROM cardapio";
        $cardapios = $conn->query($sql);
        $conn->close();
        
        return $cardapios;
    }

    public function getCardapio($id){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        $sql = "SELECT * FROM cardapio WHERE id='".$id."'";
        $result = $conn->query($sql);
        $cardapio = $result->fetch_assoc();
        $conn->close();

        return $cardapio;
    }

    public function getPratosPorCardapio($id){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        $sql = "SELECT * FROM pratos WHERE id_cardapio='".$id."' ORDER BY posicao ASC";
        $pratos = array();
        $resposta = $conn->query($sql);
        foreach($resposta as $prato){
            $pratos[$prato['posicao']] = $prato['texto'];
        }
        $posicao = 'A';
        for($i=0;$i<6;$i++){
            if( !isset($pratos[$posicao]) ){
                $pratos[$posicao] = '';
            }
            $posicao++;  
        }
        $conn->close();
        return $pratos;
    }

    public function setPratosPorCardapio($params){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        
        foreach($params['pratos'] as $posicao => $texto){
            $sql = "UPDATE pratos SET";
            $texto = $conn->real_escape_string($texto);
            $sql .= " texto='".$texto."'";
            $sql .= " WHERE posicao='".$posicao."' AND id_cardapio=".$params['id'];
            $resultado = $conn->query($sql);
        }

        $conn->close();
        return $resultado;
    }

    public function setCardapio($params){
        include ($_SERVER['DOCUMENT_ROOT']."/php/config/connect.php");
        $sql = "UPDATE cardapio SET";
        foreach($params as $key => $value){
            if ($key == 'id') continue;
            $sql .= " ".$key."='".$value."',";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " WHERE id=".$params['id'];

        $resultado = $conn->query($sql);
        $conn->close();

        return $resultado;
    }
}

?>