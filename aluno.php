<?php

class Aluno
{
	private $id;
	private $nome;
	private $nota;
	
	public function SetId($id)
	{
		$this->id = $id;
		return $this;
	}
	
	public function SetNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}
	
	public function SetNota($nota)
	{
		$this->nota = $nota;
		return $this;
	}
	
	public function GetId()
	{
		return $this->id;
	}
	
	public function GetNome()
	{
		return $this->nome;
	}
	
	public function GetNota()
	{
		return $this->nota;
	}
	
}



?>