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
				<h1>Alterar Aluno</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
			<?php 
				require_once ("alunoDao.php");
				$aluno;
				$excluido;
				try
				{
					$dao = new alunoDao();
					$aluno = new Aluno();
					$aluno->SetId($_POST['id'])
						  ->SetNome(null)
						  ->SetNota(null);
					
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
					
					$aluno = $dao->GetAluno($aluno);
					
					if($aluno == null && $excluido == false)
					{
						echo "Aluno nao cadastrado!";
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
					    $dao = new alunoDao();
						$al = new Aluno();
						$al->SetId($_POST['id'])
							  ->SetNome($_POST['nome'])
							  ->SetNota($_POST['nota']);
						
						
						if($dao->AtualizarAluno($al))
						{
							echo "Aluno atualiazado com sucesso!";
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
					    $dao = new alunoDao();
						$al = new Aluno();
						$al->SetId($_POST['id'])
							  ->SetNome(null)
							  ->SetNota(null);
						
						
						if($dao->ExcluirAluno($al))
						{
							echo "Aluno excluido com sucesso!";
							$aluno = null;
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
			Id:<br>
			<input type="text" name="id" value="<?php echo $aluno == null ? "" : $aluno->id;?>" readonly /><br>
			
			Nome:<br>
			<input type="text" name="nome"  value="<?php echo $aluno == null ? "" :$aluno->nome;?>"/><br>
			
			Nota:<br>
			<input type="text" name="nota" value="<?php echo $aluno == null ? "" :$aluno->nota;?>"/><br>
			
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
	