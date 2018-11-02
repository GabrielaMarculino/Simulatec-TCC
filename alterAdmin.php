<?php
    session_start();
    $codigo = $_GET['id'];
    $username = 'leonardes';
	$login = '';
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
   
    $rs = $con->query("SELECT * FROM tb_usuario WHERE cd_usuario = '$codigo'");    
     
    
   
       $sexo = $users->sexo_usuario; 
     
    
    
    // switch($sexo){
    //     case "Masculino":
    //         $teste1 = "checked";
    //     break;
        
    //     case "Feminino":
    //         $teste2 = "checked";
    //     break;
    //}    
    
    while($users = $rs->fetch(PDO::FETCH_OBJ)){
?>

    <!DOCTYPE html>
    <html>
    
    <head>
      
        
        <!--Adicionando o ícone no navegador-->
        <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
        <meta charset="UTF-8">
           
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site SimulaTec</title>
        <!-- Aqui chamamos o nosso arquivo css externo -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/bower_components/jquery/dist/jquery.js"></script>
        <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body>
        <form action = "confAlter.php" method = "POST">
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
                        <!--AQUI VAI O SAAAAAIIIIIRRRR-->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" id="conteudo">
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
                        <input id="Nome" name="nome" placeholder="Digite seu nome" value="<?php echo $users-> nm_usuario ?>" class="form-control input-md" required="" type="text">
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Nome">Sobrenome</label>
                    <div class="col-md-6">
                        <input id="Nome" name="sobren" placeholder="Digite seu sobrenome" value="<?php echo $users->nm_sobrenome?>" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <label class="col-md-1 control-label" for="Nome">Nascimento</label>
                <div class="col-md-2">
                    <input type="date" id="nasc" name="dtnasc" placeholder="DD/MM/AAAA" value="<?php echo $users->dt_nasc?>" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
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
                    <label class="col-md-1 control-label" for="Nome">Telefone</label>
                    <div class="col-md-6">
                        <input id="lblTelefone" name="tel" placeholder="Digite seu telefone" value="<?php echo $users->tel_usuario?>" class="telefone form-control" required="" type="text" $( "#lblTelefone").mask( "Ex.: (00) 00000-0000");>

                    </div>
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
                    <label class="col-md-1 control-label" for="Senha">CEP</label>
                    <div class="col-md-2">
                        <input type="text" id="cep" name="cep" value="<?php echo $users->cep_adm?>" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                    <div class="col-md-2">
                        <button id="Buscar" type="button" name="buscar" class="btn btn-primary" ONCLICK="pesquisacep(cep.value)">Buscar</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Senha">Rua</label>
                    <div class="col-md-6">
                        <input type="text" id="Nome" name="rua" placeholder="Digite sua Rua" value="<?php echo $users->rua_adm?>"class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Senha">N°</label>
                    <div class="col-md-1">
                        <input type="number" name="num" placeholder="EX.:000" value="<?php echo $users->num_adm?>"class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Senha">Bairro</label>
                    <div class="col-md-6">
                        <input type="text" id="bairro" name="bairro" placeholder="Digite o Bairro" value="<?php echo $users->bairro_adm?>" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Senha">Cidade</label>
                    <div class="col-md-6">
                        <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade"value="<?php echo $users->cidade_adm?>" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-1 control-label" for="Senha">Estado</label>
                    <div class="col-md-6">
                        <input type="text" id="estado" name="estado" placeholder=""value="<?php echo $users->sg_adm?>" class="form-control input-md" required="" type="text">
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
                    <!--<button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Alterar</button>-->
                    <a href="pesquisaAdmin.php" class="btn btn-danger">Cancelar</a>
                   <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Alterar</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    
    </body>
    <?php 
        }
    ?>
    </html>

   



