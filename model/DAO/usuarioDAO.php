<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 29/09/18
Objetivo: Classe com metodos de manipulação do banco de dados 

*/

class usuarioDAO{
    
    public function __construct(){
        require_once($_SERVER['DOCUMENT_ROOT'].'/model/DAO/dbClass.php');
    }
    
    public function autenticar(Usuario $usuario){
        
        //Inicia variaveis de sessão
        session_start();
        
        // Script SQL de consulta
        $sql = "SELECT * FROM tbl_usuario WHERE email = '".$usuario->getEmail()."' AND senha = '".$usuario->getSenha()."'";
        // Estabelece conexão com o banco de dados
        $conexao = new conexaoMysql();
        $PDO_conexao = $conexao->connect();
        
        $stmt = $PDO_conexao->prepare($sql);
        
        //echo($sql);
        
        // Executando statement
        $stmt->execute();
        
        // Obter linha consultada
        $obj = $stmt->fetchObject();
        
        // Se a linha existe: indicar que esta logado e encaminhar para outro lugar
        if($obj){
            
            $arrayUsuario['id'] = $obj->idUsuario;
            $arrayUsuario['nome'] = $obj->nome;
            
            $_SESSION['user'] = $arrayUsuario;
            echo($_SESSION['user']);
            header('location:../index.php');
           
        }
        
    }
    
    public function inserir(Usuario $usuario){
        
        $sql = "INSERT INTO tbl_usuario (nome,email,dt_nasc,sexo,telefone,celular) VALUES('".$usuario->getNome()."','".$usuario->getEmail()."','".$usuario->getSenha()."','".$usuario->getDt_nasc."',".$usuario->getTelefone().",".$usuario->getCelular().")";
        
        $conexao = new conexaoMysql();
        $PDO_conexao = $conexao->connect();
        
        if($PDO_conexao->query($sql)){
            echo('Inserido com sucesso');
        }else{
            echo('Erro no script de inserir');
        }
        
        $conexao->close();
        
    }
    
    public function atualizar(){
        
    }
    
    public function deletar(){
        
    }
    
}

?>
