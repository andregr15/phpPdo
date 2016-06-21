<?php

require_once ("aluno.php");

class AlunoDao
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
	
	public function InserirAluno($aluno)
	{
		$this->SetStatment("insert into aluno (nome, nota) values (:nome, :nota);", $aluno);
		$ret = $this->stmt->execute();
		$aluno->SetId($this->conexao->lastInsertId());
		return $ret;
	}
	
	public function AtualizarAluno($aluno)
	{
		$this->SetStatment("update pdo.aluno set nome=:nome, nota=:nota where id = :id;", $aluno);
		return $this->stmt->execute();
	}
	
	public function ExcluirAluno($aluno)
	{
		$this->SetStatment("delete from pdo.aluno where id = :id;", $aluno);
		return $this->stmt->execute();
	}
	
	public function GetAlunos()
	{
		$this->SetStatment("select id, nome, nota from pdo.aluno order by id;", null);
		$this->stmt->execute();
		return $this->stmt->fetchALL(\PDO::FETCH_CLASS);
	}
	
	public function GetAluno($aluno)
	{
		$sql = "";
		if($aluno->GetId() != null )
			$sql = "select id, nome, nota from pdo.aluno where id = :id;";
		else
			$sql = "select id, nome, nota from pdo.aluno where nome = :nome limit 1;";
		
		$this->SetStatment($sql, $aluno);
		$this->stmt->execute();
		return $this->stmt->fetch(\PDO::FETCH_OBJ);
	}
	
	private function SetStatment($query, $aluno)
	{
		unset($this->stmt);
		$this->stmt = $this->conexao->prepare($query);
		
		if($aluno != null)
		{
			if($aluno->GetId() != null)
				$this->stmt->bindValue(":id", $aluno->GetId());
			
			if($aluno->GetNome() != null)
				$this->stmt->bindValue(":nome", $aluno->GetNome());
			
			if($aluno->GetNota() != null)
				$this->stmt->bindValue(":nota", $aluno->GetNota());
		}
	}
}


?>