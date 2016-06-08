<?php

try
{
	$conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "1234");
	
	$query = "select * from pdo.aluno order by id;";
	
	$stmt = $conexao->prepare($query);
	$stmt->execute();
	
	echo "Listando todos os alunos:<br>";
	
	foreach($stmt->fetchAll(PDO::FETCH_CLASS) as $aluno)
	{
		echo "ID: ". $aluno->id . "<br>Nome: " . $aluno->nome . "<br>Nota: " . $aluno->nota . "<br><br>";
	}
	
	$query = "select * from pdo.aluno order by nota desc limit 3;";
	
	$stmt = $conexao->prepare($query);
	$stmt->execute();
	
	echo "Listando os alunos com as 3 maiores notas:<br>";
	
	foreach($stmt->fetchAll(PDO::FETCH_CLASS) as $aluno)
	{
		echo "ID: ". $aluno->id . "<br>Nome: " . $aluno->nome . "<br>Nota: " . $aluno->nota . "<br><br>";
	}
}
catch(\PDOException $e)
{
	echo $e->getMessage();
}

?>