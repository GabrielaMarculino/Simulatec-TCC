<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <?php
     if (!isset($_SESSION)) session_start();
    ?>
    <!--Adicionando o ícone no navegador-->
 <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
  </script>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
     <title>Cadasto de Administrador</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"  href="css/style5.css" />
    
</head>
<body>
    <form action="cadastro.php" method="POST">
	 <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/logosimula.png" width="100px" id="imgSimula"></img></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
         <!--- <li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Sobre as ETECs</a></li>
          <li><a href="#organisations">Quem Somos ?</a></li>
          <li><a href="#courses">Sobre o vestibulinho</a></li>
          <li><a href="logado.html">Logado</a></li>
          <li><a href="#login">Login</a></li> -->
          
         <!-- <span class="glyphicon glyphicon-log-out" id="btnSair"></span> <i class="material-icons" id="btnConf">settings</i>-->
        </ul>
      </div>
    </div>
  </nav>
  </form>
  <br><br><br><br><br>
 <div class="container-fluid">
<div class="row"> 
    <div class="col-xs-11 control-label">
        <p class="help-block"><h11>*</h11> Campos Obrigatórios </p>
    </div>

  </div>
  <div class="row"> 
    <div class="form-group">
  <label class="col-md-1 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-6">
  <input id="Nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
</div>
<br>
<div class="row">
    <div class="form-group">
  <label class="col-md-1 control-label" for="Nome">Sobrenome<h11>*</h11></label>  
  <div class="col-md-6">
  <input id="Nome" name="sobren" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>
</div>
  <br>
  <div class="row">
   <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input type= "date" id="nasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()"> 
</div>
  
</div>
<br>
<div class="row">
   <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" required>
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Masculino
    </label>
  </div>
</div>
<br>
<div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input type="email" id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>
</div>
<br>

  </div>
  </div>
  
<div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Senha <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="password" id="lblTelefone" name="pass" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Confirma Senha <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="password" id="lblTelefone" name="cPass" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
  </div>
<br>
<div class="row">
  <div class="button-test">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-xs-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>