<?php

/*

    Projeto: Smart Games
    Autor: Alcateck
    Data: 01/10/2018
    Objetivo: Controlar as ações da lista  de Categorias

*/

class controllerCategoria{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/categoriaClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/categoriaDAO.php');
    }
    
    //Listar todos as Categoria registradas
    public function listarCategoria(){
        //Instancia da model Categoria
        $categoriaDAO = new categoriaDAO();
        //Chama o método para selecionar todos os registrados
        $listCategoria = $categoriaDAO->selectAll();
        //Retorna o resultado obtido para a view
        return $listCategoria;
    }
    
}

?>
