<?php

class CardapioController{

    public function getCardapios(){
        include ("../php/config/connect.php");
        $sql = "SELECT * FROM cardapio WHERE ativo='1'";
        $cardapios = $conn->query($sql);
        $conn->close();

        return $cardapios;
    }

     public function getTodosCardapios(){
        include ("../php/config/connect.php");
        $sql = "SELECT * FROM cardapio";
        $cardapios = $conn->query($sql);
        $conn->close();
        
        return $cardapios;
    }

    public function getCardapio($id){
        include ("../php/config/connect.php");
        $sql = "SELECT * FROM cardapio WHERE id='".$id."'";
        $result = $conn->query($sql);
        $cardapio = $result->fetch_assoc();
        $conn->close();

        return $cardapio;
    }

    public function getPratosPorCardapio($id){
        include ("../php/config/connect.php");
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

    public function setCardapio($params){
        include ("../php/config/connect.php");
        $sql = "UPDATE cardapio SET";
        foreach($params as $key => $value){
            if ($key == 'id') continue;
            $sql .= " '".$key."'='".$value."',";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " WHERE 'id'=".$params['id'];
        
        $resultado = $conn->query($sql);
        $conn->close();

        return $resultado;
    }
}

?>