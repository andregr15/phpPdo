<?php
	session_start();
		
    if (!isset($_SESSION['userLogged']) && $_SESSION['userLogged'] != 1)
	{
		header("Location:login.php"); 
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
				<h1>Pesquisar Aluno</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<form method="post" action="alterarAluno.php">
			Id:<br> 
			<input type="text" name="id"/><br>
			<!--Nome:<br> 
			<input type="text" name="nome"/><br> -->
			<input type="submit" value="Pesquisar"/>
			</form>
			<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	