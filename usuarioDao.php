<?php

require_once ("usuario.php");

class UsuarioDao
{
	private $conexao;
	private $stmt;
	
	public function __construct()
	{
		try
		{
			$this->conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "1234");
		}
		catch(\PDOException $e)
		{
			die($e->getMessage());
		}
	}
	
	public function InserirUsuario($usuario)
	{
		$this->SetStatment("insert into pdo.usuario (nome, senha) values (:nome, :password);", $usuario);
		$ret = $this->stmt->execute();
		$usuario->SetNome($this->conexao->lastInsertId());
		return $ret;
	}
	
	public function AtualizarUsuario($usuario)
	{
		$this->SetStatment("update pdo.usuario set senha=:password where nome = :nome;", $usuario);
		return $this->stmt->execute();
	}
	
	public function ExcluirUsuario($usuario)
	{
		$this->SetStatment("delete from pdo.usuario where nome = :nome;", $usuario);
		return $this->stmt->execute();
	}
	
	public function GetUsuarios()
	{
		$this->SetStatment("select nome, senha from pdo.usuario order by nome;", null);
		$this->stmt->execute();
		return $this->stmt->fetchALL(\PDO::FETCH_CLASS);
	}
	
	public function GetUsuario($usuario)
	{
		$sql = "";
		if($usuario->GetPassword() != null)
			$sql = "select nome, senha from pdo.usuario where nome = :nome and senha = :password;";
		else
			$sql = "select nome, senha from pdo.usuario where nome = :nome;";
		
		$this->SetStatment($sql, $usuario);
		$this->stmt->execute();
		return $this->stmt->fetch(\PDO::FETCH_OBJ);
	}
	
	private function SetStatment($query, $usuario)
	{
		unset($this->stmt);
		$this->stmt = $this->conexao->prepare($query);
		
		if($usuario != null)
		{
			if($usuario->GetNome() != null)
				$this->stmt->bindValue(":nome", $usuario->GetNome());
			
			if($usuario->GetPassword() != null)
				$this->stmt->bindValue(":password", $usuario->GetPassword());
		}
	}
}


?>