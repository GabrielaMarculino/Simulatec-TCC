	<?php
	
	session_start();
	if (!isset($_SESSION['admin'])) 
	 
	$codigo = $_GET['id'];
	// var_dump($id);
	
	$username = 'leonardes';
	$login = '';
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
	?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <!--Adicionando o ícone no navegador-->
  <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
  <meta charset="UTF-8">
  <title>Site SimulaTec</title>
  <!-- Aqui chamamos o nosso arquivo css externo -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/bower_components/jquery/dist/jquery.js"></script>
  <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style7.css"/>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="index.html"><img src="img/logosimula.png" width="120px" id="imgSimula"></img></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Sobre as ETECs</a></li>
            <li><a href="siteEmp/ti.html">Quem Somos ?</a></li>
            <li><a href="https://www.vestibulinhoetec.com.br/duvidas-frequentes/">Sobre o vestibulinho</a></li>
            <!--<li><a href="logado.html">Logado</a></li>-->
            <li><a id="myBtn">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    	<div class="conatiner-fluid" id="conteudo">
			<div class="row">
				<div class="col-md-12">
					<?php
    				$rs = $con->query("SELECT * FROM tb_usuario WHERE nivel_usuario = 2 UNION SELECT * FROM tb_usuario WHERE nivel_usuario = 3");
    				
    		
    			
      		    	$cod = $con->query("SELECT * FROM tb_usuario WHERE cd_usuario = '$codigo'");
    				  
    				while($users = $rs->fetch(PDO::FETCH_OBJ)){
    			?>
						<div class="col-md-3">
							<div class="thumbnail">
								<center>
									<h3>
										<?php echo $users->nm_usuario?>
									</h3>
								</center>
								<a href="#">
			          <img src="img/user.jpg" alt="" id="fotoBusca" >
			          <div class="caption">
			          </div>
			        </a>
								<div class="form-group">
									<button id="btnExcluir" data-toggle="modal" data-target="#modalExcluir" class="btn btn-danger btn-block" value="<?php echo $users->cd_usuario?>">Excluir</button>
									<button  onclick="javascript: location.href='alterAdmin.php?id=<?php echo $users->cd_usuario?>'" class="btn btn-warning btn-block">Alterar</button>
								</div>
							</div>
						</div>
						<?php
					
    				}
			    ?>
				</div>
			</div>
		</div>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Administradores</h2>
		</div>
		<div class="col-sm-6">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>
		<div class="col-sm-3">
			<a href="add.html" class="btn btn-primary pull-right h2">Novo cadastro</a>
		</div>
	</div> <!-- /#top -->
 
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Nível</th>
					<th>E-mail</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $users->cd_usuario?></td>
					<td><?php echo $users->nm_usuario?></td>
					<td><?php echo $users->nivel_usuario?></td>
					<td><?php echo $users->email_usuario?></td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
						<a class="btn btn-warning btn-xs" onclick="javascript: location.href='alterAdmin.php?id=<?php echo $users->cd_usuario?>'">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#" data-toggle="modal"  data-target="#modalExcluir" value="<?php echo $users->cd_usuario?>">Excluir</a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
 <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
	<div id="modalExcluir" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Exclusão</h4>
				</div>
				<form action="confirmaExclusao.php" method="POST">
					<div class="modal-body">
						<input type="hidden" name="codigo" id="valor" />
						<p>Deseja realmente EXCLUIR o administrador</p>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<button id="excluir" type="submit" class="btn btn-success">SIM</button>
							<button id="alterar" type="" class="btn btn-danger" data-dismiss="modal">NÂO</button>
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>

</body>
</html>