<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 02/10/18
Objetivo: Manipular os dados do banco de dados 

*/

class Produto{
    
    private $idProduto;
    private $idCategoria;
    private $nome;
    private $descri;
    private $valor;
    private $foto1;
    private $foto2;
    private $foto3;
    
    
    public function __construct(){
        
    }
    
    public function getIdProduto(){
		return $this->idProduto;
	}

	public function setIdProduto($idProduto){
		$this->idProduto = $idProduto;
	}

	public function getIdCategoria(){
		return $this->idCategoria;
	}

	public function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
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

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getFoto1(){
		return $this->foto1;
	}

	public function setFoto1($foto1){
		$this->foto1 = $foto1;
	}

	public function getFoto2(){
		return $this->foto2;
	}

	public function setFoto2($foto2){
		$this->foto2 = $foto2;
	}

	public function getFoto3(){
		return $this->foto3;
	}

	public function setFoto3($foto3){
		$this->foto3 = $foto3;
	} 
}

?>