<?php
    session_start();
    if (!isset($_SESSION['user']))
    
    
  	$codigo = $_GET['id'];
	 var_dump($codigo);
	
	$username = 'leonardes';
	$login = '';
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    
    $rs = $con->query("SELECT * FROM tb_usuario WHERE cd_usuario = '$codigo'");    
    
    $row = $rs->fetch(PDO::FETCH_OBJ);
   
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <!--Adicionando o ícone no navegador-->
    <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Alterar Cadasto de Usuário</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style5.css" />

</head>

<body>
    <form action="confAlterCadUsu.php" method="POST">
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
                <p class="help-block">
                   
            </div>
          
        </div>
        <div class="row">
            <div class="form-group">
             <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
               <label class="col-md-1 control-label" for="Nome">Nome </label>
                <div class="col-md-6">
                    <input id="Nome" name="nome" placeholder="Digite seu nome" value = "<?php echo $users-> nm_usuario?>" class="form-control input-md" required="" type="text">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label class="col-md-1 control-label" for="Nome">Sobrenome</label>
                <div class="col-md-6">
                    <input id="Nome" name="sobren" placeholder="Digite seu sobrenome" "<?php echo $users-> nm_sobrenome?>" class="form-control input-md" required="" type="text">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <label class="col-md-1 control-label" for="Nome">Nascimento</label>
            <div class="col-md-2">
                <input type="date" id="nasc" name="dtnasc" placeholder="DD/MM/AAAA" "<?php echo $users-> dt_nasc?>" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
            </div>

        </div>
        <br>
         <div class="row">
                <label class="col-md-1 control-label" for="radios">Sexo</label>
                <div class="col-md-4">
                    <label required="" class="radio-inline" for="radios-0">
                  <input name="sexo" id="sexo" value="feminino" type="radio" checked="<?php echo $teste2?>" required>
                  Feminino
                </label>
                    <label class="radio-inline" for="radios-1" >
                  <input name="sexo" id="sexo" value="masculino" type="radio" checked="<?php echo $teste1?>">
                  Masculino
                </label>
                </div>
            </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label class="col-md-1 control-label" for="prependedtext">Email</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" id="prependedtext" name="email" class="form-control" placeholder="email@email.com"value="<?php echo $users->email_usuario?>" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                </div>
            </div>
        </div>
        <br>


        <div class="row">
            <div class="form-group">
                <label class="col-md-1 control-label" for="Senha">Senha</label>
                <div class="col-md-6">
                    <input type="password" id="lblTelefone" name="pass" placeholder="" value="<?php echo $users->senha_usuario?>" class="form-control input-md" required="" type="text">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label class="col-md-1 control-label" for="Senha">Confirma Senha</label>
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
    </div>
    </form>
</body>

</html>
