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
       	<title>CRUD Usuarios</title>
	</head>
	
	<body>
		<center>
		<div class="well">
			<center>
				<h1>Incluir Usuario</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<form action="salvarUsuario.php" method="post">
			Nome:<br>
			<input type="text" name="nome"/><br>
			Senha:<br>
			<input type="password" name="password"/><br>
			<input type="submit" value="Salvar"/>
			</form>
			<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	