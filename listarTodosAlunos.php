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
				<h1>Listagem de todos os alunos</h1>
			</center>
		</div>
		<?php require_once ("menu.php");?>
		<div class="panel panel-default">
			<div class="well">
				<table style="width:70%">
				  <tr>
					<td><b>Id</b></td>
					<td><b>Nome</b></td> 
					<td><b>Nota</b></td>
				  </tr>
				  <?php 
					require_once ("alunoDao.php");
					
					try
					{
						$dao = new alunoDao();
						$alunos = $dao->GetAlunos();
						
						foreach($alunos as $aluno)
						{
							echo "<tr><td>".$aluno->id."</td><td>".$aluno->nome."</td><td>".$aluno->nota."</td></tr>";
						}
					}
					catch(\PDOException $e)
					{
						die($e->getMessage());
					}
							  
				  ?>
				</table>
				<br>
			</div>
		</div>
		</center>
	</body>
	
	<?php require_once("rodape.php"); ?>
</html>
	