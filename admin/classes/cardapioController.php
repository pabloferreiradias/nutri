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
}

?>