<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 01/10/18
Objetivo: Classe com metodos de manipulação do banco de dados 

*/

class Categoria{
    
    private $idcategoria;
    private $nome;
    
    public function __construct(){
        
    }
    
    public function getIdcategoria(){
		return $this->idcategoria;
	}

	public function setIdcategoria($idcategoria){
		$this->idcategoria = $idcategoria;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
}
?>