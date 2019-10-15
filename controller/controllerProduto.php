<?php

/*

    Projeto: Smart Games
    Autor: Alcateck
    Data: 01/10/2018
    Objetivo: Controlar as ações da lista de produtos

*/

class controllerProduto{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/produtoClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/produtoDAO.php');
    }
    
    //Buscar o Produto existente
    public function buscarProduto($id){
        $produtoDAO = new produtoDAO();
        $list = $produtoDAO->selectById($id);
        return $list;
    }

    //Listar todos os Produtos registrados
    public function listarProduto(){
        //Instancia da model Produto
        $produtoDAO = new produtoDAO();
        //Chama o método para selecionar todos os registrados
        $listProduto = $produtoDAO->selectAll();
        //Retorna o resultado obtido para a view
        return $listProduto;
    }
    
    //Listar todos os Produtos registrados com limite
    public function listarProdutoLmt($limite){
        //Instancia da model Produto
        $produtoDAO = new produtoDAO();
        //Chama o método para selecionar todos os registrados
        $listProduto = $produtoDAO->selectAllLmt($limite);
        //Retorna o resultado obtido para a view
        return $listProduto;
    }
    
}

?>
