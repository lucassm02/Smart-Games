<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 29/09/18
Objetivo: Classe com metodos de manipulação do banco de dados 

*/

class produtoDAO{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/dbClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/produtoClass.php');
    }
    
    //Listar todos os Produto do BD
    public function selectAll(){
        $sql = "select * from tbl_produto order by nome";

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);

        $cont = 0;
        $listProduto = null;
        while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            //Cria um objeto array da classe Produto
            $listProduto[] = new Produto();
            $listProduto[$cont]->setIdProduto($rs['idProduto']);
            $listProduto[$cont]->setIdCategoria($rs['idCategoria']);
            $listProduto[$cont]->setNome($rs['nome']);
            $listProduto[$cont]->setDescri($rs['descri']);
            $listProduto[$cont]->setValor($rs['valor']);
            $listProduto[$cont]->setFoto1($rs['foto1']);
            $listProduto[$cont]->setFoto2($rs['foto3']);
            $listProduto[$cont]->setFoto3($rs['foto3']);

            $cont += 1;
        }
        return $listProduto;
        $conexao->close();
    }
    
    //Listar todos os Produto do BD com limite
    public function selectAllLmt($limite){
        $sql = "select * from tbl_produto order by nome limit ".$limite;

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);

        $cont = 0;
        $listProduto = null;
        while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            //Cria um objeto array da classe Produto
            $listProduto[] = new Produto();
            $listProduto[$cont]->setIdProduto($rs['idProduto']);
            $listProduto[$cont]->setIdCategoria($rs['idCategoria']);
            $listProduto[$cont]->setNome($rs['nome']);
            $listProduto[$cont]->setDescri($rs['descri']);
            $listProduto[$cont]->setValor($rs['valor']);
            $listProduto[$cont]->setFoto1($rs['foto1']);
            $listProduto[$cont]->setFoto2($rs['foto2']);
            $listProduto[$cont]->setFoto3($rs['foto3']);

            $cont += 1;
        }
        return $listProduto;
        $conexao->close();
    }

    //Listar um Produto no BD
    public function selectById($id){
        $sql = "select * from tbl_produto where idProduto =".$id;

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);
        

        if ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            
            //Cria um objeto array da classe Produto
            $listProduto = new Produto();
            $listProduto->setIdProduto($rs['idProduto']);
            $listProduto->setIdCategoria($rs['idCategoria']);
            $listProduto->setNome($rs['nome']);
            $listProduto->setDescri($rs['descri']);
            $listProduto->setValor($rs['valor']);
            $listProduto->setFoto1($rs['foto1']);
            $listProduto->setFoto2($rs['foto2']);
            $listProduto->setFoto3($rs['foto3']);

            return $listProduto;
        }
    }
    
}

?>
