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
				<h1>Alterar Usuario</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<?php 
				require_once ("usuarioDao.php");
				$usuario;
				$excluido;
				try
				{
					$dao = new usuarioDao();
					$usuario = new Usuario();
					
					$nome = null;
					
					if(isset($_POST['nome']))
						$nome = $_POST['nome'];
					
					$usuario->SetNome($nome)
						    ->SetPassword(null);
							
					$excluido = false;
					
					if($_POST)
					{
						if(isset($_POST['salvar']))
						{
							salvar();
						}
						elseif(isset($_POST['excluir']))
						{
							excluir();
							$excluido = true;
						}
					}
					
					$usuario = $dao->GetUsuario($usuario);
					
					if($usuario == null && $excluido == false)
					{
						echo "Usuario nao cadastrado!";
					}
				}
				catch(\PDOException $e)
				{
					die($e->getMessage());
				}
					
				function salvar()
				{
				   try
				   {
					    $dao = new usuarioDao();
						$us = new Usuario();
						$us->SetNome($_POST['nome'])
						   ->SetPassword($_POST['password']);
						
						
						if($dao->AtualizarUsuario($us))
						{
							echo "Usuario atualiazado com sucesso!";
						}
						else
						{
							echo "Ocorreu algum erro inesperado!";
						}
				   }
				   catch(\PDOException $e)
				   {
						die($e->getMessage());
				   }
				}
				
				function excluir()
				{
				   try
				   {
					    $dao = new usuarioDao();
						$us = new Usuario();
						$us->SetNome($_POST['nome'])
						   ->SetPassword(null);
						
						
						if($dao->ExcluirUsuario($us))
						{
							echo "Usuario excluido com sucesso!";
							$usuario = null;
						}
						else
						{
							echo "Ocorreu algum erro inesperado!";
						}
				   }
				   catch(\PDOException $e)
				   {
						die($e->getMessage());
				   }
				}					
		    ?>
			<form action="" method="post">
			
			Nome:<br>
			<input type="text" name="nome"  value="<?php echo $usuario == null ? "" :$usuario->nome;?>" readonly /><br>
			
			Senha:<br>
			<input type="text" name="password" value="<?php echo $usuario == null ? "" :$usuario->senha;?>"/><br>
			
			<input type="submit" name="salvar" value="Salvar" />
			<input type="submit" name="excluir" value="Excluir"/>
			</form>
			<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	