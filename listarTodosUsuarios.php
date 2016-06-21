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
				<h1>Listagem de todos os usuarios</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
				<table style="width:70%">
				  <tr>
					<td><b>Nome</b></td> 
				  </tr>
				  <?php 
					require_once ("usuarioDao.php");
					
					try
					{
						$dao = new usuarioDao();
						$usuarios = $dao->GetUsuarios();
						
						foreach($usuarios as $usuario)
						{
							echo "<tr><td>".$usuario->nome."</td></tr>";
						}
					}
					catch(\PDOException $e)
					{
						die($e->getMessage());
					}
							  
				  ?>
				</table>
				<br>
				<form method="post" action="alterarUsuario.php">
					Nome:<br> 
					<input type="text" name="nome"/><br>
					<input type="submit" value="Pesquisar"/>
					</form>
				<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	