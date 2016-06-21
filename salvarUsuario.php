<?php
require_once ("usuarioDao.php");
$ret;
try
{
	$dao = new usuarioDao();
	$usuario = new Usuario();
	$usuario->SetNome($_POST['nome'])
		    ->SetPassword($_POST['password']);
	
	
	$ret = $dao->InserirUsuario($usuario);
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
       	<title>CRUD Usuarios</title>
	</head>
	
	<body>
		<center>
		<div class="well">
			<center>
				<h1><?php if($ret) {echo "Usuario salvo com sucesso!";}?></h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<?php
				if($ret) 
				{
					echo "Usuario salvo com sucesso!";
				}
		    ?>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	