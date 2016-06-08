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
				<h1>CRUD Alunos</h1>
			</center>
		</div>
		<div class="panel panel-default">
			<?php require_once("menu.php");?>
			
			<div class="well">
				<h5>Para listar todos os alunos, favor clicar no menu listar alunos</h5>
				<h5>Para pesquisar apenas um aluno, favor clicar no menu pesquisar aluno, se o aluno existir o mesmo será mostrado na tela com as opções para editá-lo ou excluí-lo</h5>
				<h5>Para incluir um novo aluno, favor clicar no menu incluir aluno</h5>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	