

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <?php
        session_start();
         if (!isset($_SESSION['admin']));
    ?>
    <!--Adicionando o ícone no navegador-->
 <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />

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
    <form action="cadastroAdmin.php" method="POST">
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
          <li><a href="sair.php">Sair</a></li>
          
         <!-- <span class="glyphicon glyphicon-log-out" id="btnSair"></span> <i class="material-icons" id="btnConf">settings</i>-->
        </ul>
      </div>
    </div>
  </nav>
  
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
  <label class="col-md-1 control-label" for="Nome">Telefone <h11>*</h11></label>  
  <div class="col-md-6">
  <input id="lblTelefone"  name="tel" placeholder="" class="telefone form-control" required="" type="text" $("#lblTelefone").mask("Ex.: (00) 00000-0000"); >
  
  </div>
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
<div class="row">
  <div class="form-group">
      <label class="col-md-1 control-label" for="Senha">CEP <h11>*</h11></label>
          <div class="col-md-2">
               <input type="text" id="cep" name="cep" placeholder="" class="form-control input-md" required="" type="text" >
          </div>
          <div class="col-md-2">
              <button id="Buscar" type="button" name="buscar" class="btn btn-primary" ONCLICK="pesquisacep(cep.value)">Buscar</button>    
          </div>
  </div>
  </div>
  <br>
  <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Rua <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="text" id="Nome" name="rua" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
   <br>
   <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">N° <h11>*</h11></label>  
  <div class="col-md-1">
  <input type="number"  name="num" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
   <br>
    <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Bairro <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="text" id="bairro" name="bairro" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
   <br>
  <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Cidade <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="text" id="cidade" name="cidade" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
   <br>
  <div class="row">
  <div class="form-group">
  <label class="col-md-1 control-label" for="Senha">Estado <h11>*</h11></label>  
  <div class="col-md-6">
  <input type="text" id="estado" name="estado" placeholder="" class="form-control input-md" required="" type="text">
  </div>
  </div>
  </div>
<br>
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
    	<a href="index.html" class="btn btn-danger">Cancelar</a>
  </div>
  </form>
</div>
</div>
</div>
<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Cep inválido ");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
  </script>
</html>