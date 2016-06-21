<?php

class Usuario
{
	private $nome;
	private $password;
	
	public function SetNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}
	
	public function SetPassword($password)
	{
		$this->password = $password;
		return $this;
	}
	
	public function GetNome()
	{
		return $this->nome;
	}
	
	public function GetPassword()
	{
		return $this->password;
	}
	
}



?>