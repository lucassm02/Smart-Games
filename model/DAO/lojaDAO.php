<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 29/09/18
Objetivo: Classe com metodos de manipulação do banco de dados 

*/

class lojaDAO{
    
    public function __construct(){
        
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/dbClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/lojaClass.php');
        
    }
    
    //Listar todas as Lojas  do BD
    public function selectAll($id){
        $sql = "select * from vw_buscar_loja where idProduto =".$id." order by nome";

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);

        $cont = 0;
        $listLoja = null;
        while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            //Cria um objeto array da classe Loja
            $listLoja[] = new Loja();
            $listLoja[$cont]->setIdLoja($rs['idLoja']);
            $listLoja[$cont]->setNome($rs['nome']);
            $listLoja[$cont]->setDescri($rs['descri']);
            $listLoja[$cont]->setAbertura($rs['abertura']);
            $listLoja[$cont]->setFechamento($rs['fechamento']);
            $listLoja[$cont]->setFoto($rs['foto']);

            $cont += 1;
        }
        return $listLoja;
        $conexao->close();
    }

    //Listar uma Loja no BD
    public function selectById($id){
        $sql = "select * from tbl_loja where idLoja =".$id;

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);


        if ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            
            //Cria um objeto array da classe Loja
            $listLoja = new Loja();
            $listLoja->setIdLoja($rs['idLoja']);
            $listLoja->setNome($rs['nome']);
            $listLoja->setDescri($rs['descri']);
            $listLoja->setAbertura($rs['abertura']);
            $listLoja->setFechamento($rs['fechamento']);
            $listLoja->setFoto($rs['foto']);

            return $listLoja;
            $conexao->close();
        }
    }
    
}

?>
