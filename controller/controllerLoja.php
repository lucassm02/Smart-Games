<?php

/*

    Projeto: Smart Games
    Autor: Alcateck
    Data: 01/10/2018
    Objetivo: Controlar as ações da lista  de Lojas

*/

class controllerLoja{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/lojaClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/lojaDAO.php');
    }
    
    //Buscar a Loja existente
    public function buscarLoja($id){
        $lojaDAO = new lojaDAO();
        $list = $lojaDAO->selectById($id);
        return $list;
    }

    //Listar todos as Lojas registradas
    public function listarLoja($id){
        //Instancia da model Loja
        $lojaDAO = new lojaDAO();
        //Chama o método para selecionar todos os registrados
        $listLoja = $lojaDAO->selectAll($id);
        //Retorna o resultado obtido para a view
        return $listLoja;
    }
    
}

?>
