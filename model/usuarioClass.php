<?php

/*

Projeto: Smart Games
Autor: Lucas Santos
Data: 29/09/18
Objetivo: Manipular os dados do banco de dados 

*/

class Usuario{
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dt_nasc;
    private $sexo;
    private $telefone;
    private $celular;
    
    public function construct(){
        
    }
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getDt_nasc(){
		return $this->dt_nasc;
	}

	public function setDt_nasc($dt_nasc){
		$this->dt_nasc = $dt_nasc;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}
}

?>