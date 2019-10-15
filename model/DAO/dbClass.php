<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 29/09/19
Objetivo: Criar a classe de conexõa com o mysql

*/

class conexaoMysql{
    private $server;
    private $user;
    private $password;
    private $dbName;
    
    public function __construct(){
        $this -> server = "localhost";
        $this -> user = "lobo";
        $this -> password = "lobo123";
        $this -> dbName = "db_smGames";
    }
    
    public function connect(){
         
        try{
            
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->dbName, $this ->user, $this -> password);
            
            return $conexao;
            
        }catch(PDOException $erro){
            echo('Erro ao tentar se conectar ao banco de dados <br> Linha: '.$erro -> getline().'<br> Mensagen: '.$erro -> getMessage());   
        }
        
    }
    
    public function close(){
        
        $conexao = null;
        
    }
}

?>