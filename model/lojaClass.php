<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 02/10/18
Objetivo: Manipular os dados do banco de dados 

*/

class Loja{
    
    private $idLoja;
    private $nome;
    private $descri;
    private $abertura;
    private $fechamento;
    private $foto;
    
    public function __construct(){
        
    }
    
    public function getIdLoja(){
		return $this->idLoja;
	}

	public function setIdLoja($idLoja){
		$this->idLoja = $idLoja;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDescri(){
		return $this->descri;
	}

	public function setDescri($descri){
		$this->descri = $descri;
	}

	public function getAbertura(){
		return $this->abertura;
	}

	public function setAbertura($abertura){
		$this->abertura = $abertura;
	}

	public function getFechamento(){
		return $this->fechamento;
	}

	public function setFechamento($fechamento){
		$this->fechamento = $fechamento;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}
}


?>