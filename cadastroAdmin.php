<?php

	$username = 'leonardes';
	$login = '';
	
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    
    $usuario = array(
	
	$nome = $_POST["nome"], 
	$sobren = $_POST["sobren"], 
	$nasc = $_POST["dtnasc"], 
	$sexo = $_POST["sexo"],
	$telefone = $_POST["tel"],
	/*$cpf = $_POST["cpf"],*/
	$cep = $_POST["cep"],
	$rua = $_POST["rua"],
	$num = $_POST["num"],
	$bairro = $_POST["bairro"],
	$email = $_POST["email"], 
	$cidade = $_POST["cidade"],
	$estado = $_POST["estado"], 
	$pass = $_POST["pass"], 
	$cPass = $_POST["cPass"]);
	$nivelAcesso = 3;
	
	
	if(isset($_POST['nome'])) $nome = $_POST['nome'];
	
	if(isset($_POST['tel'])) $tel = $_POST['tel'];

	if(isset($_POST['sobren'])) $sobren =  ($_POST['sobren']);
	
	if(isset($_POST['dtnasc']))	$dataNasc =  ($_POST['dtnasc']);
	
	if(isset($_POST['sexo'])) $sexo = $_POST['sexo'];
	
	/*if(isset($_POST['cpf'])) $cpf = $_POST['cpf'];*/
	
	if(isset($_POST['cep'])) $cep = $_POST['cep'];
	
	if(isset($_POST['rua'])) $rua = $_POST['rua'];
	
	if(isset($_POST['num'])) $num = $_POST['num'];
	
	if(isset($_POST['bairro'])) $bairro = $_POST['bairro'];
	
	if(isset($_POST['email']))	$email =  ($_POST['email']);
	
	if(isset($_POST['cidade'])) $cidade =  ($_POST['cidade']);
	
	if(isset($_POST['estado']))	$estado =  ($_POST['estado']);
	
	if(isset($_POST['pass'])) $senha =  ($_POST['pass']);
	
	if(isset($_POST['cPass'])) $confSenha =  ($_POST['cPass']);
	
	
    $stmt = $con ->prepare ("INSERT INTO tb_usuario (nm_usuario, 
    												 nm_sobrenome,
    												 tel_usuario,
    												 dt_nasc, 
    												 sexo_usuario,
    												 cep_adm,
    												 cidade_adm,
       												 rua_adm,
    												 num_adm,
    												 bairro_adm,
    												 email_usuario, 
    												 senha_usuario,
    												 nivel_usuario) 
    												 
    												 VALUES ('$nome',
    														 '$sobren',
    														 '$tel',
    														 '$dataNasc',
    														 '$sexo',
    														 '$cep',
    														 '$cidade',
    														 '$rua',
    														 '$num',
    														 '$bairro',
    														 '$email',
    														 '$pass',
    														 '$nivelAcesso')");
   
     
 $stmt ->execute();
 if($senha == $confSenha){
     	 echo "<script>alert('Cadasto efetuado com sucesso, efetue seu login!');window.location.href ='index.html'</script>";
     }else{
     	 echo "<script>alert('Senha incorreta, tente novamente');window.location.href ='cadAdmin.php'</script>";
     }
   
?>