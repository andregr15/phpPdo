<html>
	<head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
       	<title>Login</title>
	</head>
	
	<body>
		<center>
		<div class="well">
			<center>
				<h1>Login</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<form method="post" action="usuarioLogado.php">
			Nome:<br> 
			<input type="text" name="nome"/><br>
			Senha:<br> 
			<input type="password" name="password"/><br>
			<input type="submit" value="Logar"/>
			</form>
			<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	