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
        $cardapio = $conn->query($sql);
        $conn->close();

        return $cardapio;
    }

    public function getPratosPorCardapio($id){
        include ("../php/config/connect.php");
        $sql = "SELECT * FROM pratos WHERE id_cardapio='".$id."'";
        $pratos = $conn->query($sql);
        $conn->close();

        return $pratos;
    }
}

?>