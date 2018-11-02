
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <?php
        
        session_start();
        if (!isset($_SESSION['admin'])) 
        $codigo = "1";
       
    ?>
    <!--Adicionando o ícone no navegador-->
 <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
  </script>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
    <title>Administrador</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="css/style4.css" />
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
    <form action ="session.php" method ="POST">
	 <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <!--<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>-->
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/logosimula.png" width="120px" id="imgSimula"></img></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <!--  <li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Sobre as ETECs</a></li>
          <li><a href="#organisations">Quem Somos ?</a></li>
          <li><a href="https://www.vestibulinhoetec.com.br/duvidas-frequentes/">Sobre o vestibulinho</a></li>-->
          <li><a href="sair.php">Sair</a></li>
          
          <!--<span class="glyphicon glyphicon-log-out" id="btnSair"></span> <i class="material-icons" id="btnConf">settings</i>-->
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
  <div class="row" id="bunitoes">
    <div class="col-md-3">
        
      
       <a href="cadAdmin.php"class="btn btn-default" type="submit" id="btn1">Cadastro de Administrador</button></a>
       <a href="crudAdmin.php"class="btn btn-default" type="submit" id="btn1">Alterar cadastro de Administrador</button></a>
       <a href=""><button class="btn btn-default" type="submit" id="btn1">Excluir Administrador</button></a>
        </div>
        <div class="col-md-3">
        <a href="cadProvas.php" class="btn btn-default" type="submit" id="btn1">Cadastro de Provas</button></a>
        <a href=""><button class="btn btn-default" type="submit" id="btn1">Alterar Provas</button></a>
        <a href=""><button class="btn btn-default" type="submit" id="btn1">Excluir Provas</button></a>
    </div>
    <div class="col-md-3">
        <a href=""><button class="btn btn-default" type="submit" id="btn1">Logs de Usuários</button></a>
        <a href=""><button class="btn btn-default" type="submit" id="btn1">Logs de Administrador</button></a>
        <a href=""><button class="btn btn-default" type="submit" id="btn1">Gerenciamneto de Usuários</button></a>
    </div>
   </div>
   </div>
   </form>
</body>
</html>