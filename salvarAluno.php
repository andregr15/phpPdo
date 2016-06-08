<?php
require_once ("alunoDao.php");
$ret;
try
{
	$dao = new alunoDao();
	$aluno = new Aluno();
	$aluno->SetId(null)
		  ->SetNome($_POST['nome'])
		  ->SetNota($_POST['nota']);
	
	
	$ret = $dao->InserirAluno($aluno);
	
	if($ret)
	{
		$ret = $aluno->GetId();
	}
}
catch(\PDOException $e)
{
	die($e->getMessage());
}

?>

<html>
	<head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
       	<title>CRUD Alunos</title>
	</head>
	
	<body>
		<center>
		<div class="well">
			<center>
				<h1><?php if($ret) {echo "Aluno salvo com sucesso!";}?></h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<?php
				if($ret) 
				{
					echo "Aluno salvo com sucesso com id ".$ret."!";
				}
		    ?>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	