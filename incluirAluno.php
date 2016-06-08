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
				<h1>Incluir Aluno</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<form action="salvarAluno.php" method="post">
			Nome:<br>
			<input type="text" name="nome"/><br>
			
			Nota:<br>
			<input type="text" name="nota"/><br>
			<input type="submit" value="Salvar"/>
			</form>
			<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	