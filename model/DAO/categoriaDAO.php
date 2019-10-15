<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 01/10/18
Objetivo: Classe com metodos de manipulação do banco de dados 

*/

class categoriaDAO{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/dbClass.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/categoriaClass.php');
    }
    
    //Listar todas as Categorias  do BD
    public function selectAll(){
        $sql = "select * from tbl_categoria order by nome";

        $conexao = new conexaoMySql();
        $PDO_conexao = $conexao->connect();

        $select = $PDO_conexao->query($sql);

        $cont = 0;
        $listCategoria = null;
        while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
            //Cria um objeto array da classe Categoria
            $listCategoria[] = new Categoria();
            $listCategoria[$cont]->setIdCategoria($rs['idCategoria']);
            $listCategoria[$cont]->setNome($rs['nome']);

            $cont += 1;
        }
        return $listCategoria;
        $conexao->close();
    }
}
?>
