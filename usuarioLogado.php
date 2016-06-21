<?php
	session_start();
	$_SESSION['userLogged'] = 0;
	require_once('usuarioDao.php');
	
	if(isset($_POST['nome']) && isset($_POST['password']))
	{
		try
		{
			$dao = new usuarioDao();
			$usuario = new Usuario();
			$usuario->SetNome($_POST['nome'])
					->SetPassword($_POST['password']);
			$usuarioLogado = $dao->GetUsuario($usuario);
			
			if(isset($usuarioLogado->nome) && isset($usuarioLogado->senha))
			{
				$_SESSION['userLogged'] = 1;
				session_register('userLogged');
			}
			
		}
		catch(\PDOException $e)
		{
			die($e->getMessage());
		}
	}
	
	if (!isset($_SESSION['userLogged']) && $_SESSION['userLogged'] != 1)
	{
		header("Location:login.php"); 
	}
?>

<html>
	<head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
       	<title>Usuario Logado</title>
	</head>
	
	<body>
		<center>
		<div class="well">
			<center>
				<h1>Usuario Logado</h1>
			</center>
		</div>
		<div class="panel panel-default">
			<?php require_once("menu.php");?>
			
			<div class="well">
				<h5>Usuario logado com sucesso!</h5>
				<h5>Favor escolher a acao deseja no menu</h5>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	