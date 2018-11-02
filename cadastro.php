<?php
 
	$username = 'leonardes';
	$login = '';
	
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    $usuario = array(
	
	$nome = $_POST["nome"], 
	$sobren = $_POST["sobren"], 
	$nasc = $_POST["dtnasc"], 
	$email = $_POST["email"], 
	$sexo = $_POST["sexo"], 
	$pass = $_POST["pass"], 
	$cPass = $_POST["cPass"]);
	
	
	if(isset($_POST['nome'])) $nome = $_POST['nome'];

	if(isset($_POST['sobren'])) $sobren =  ($_POST['sobren']);
	
	if(isset($_POST['dtnasc']))	$dataNasc =  ($_POST['dtnasc']);
	
	if(isset($_POST['email']))	$email =  ($_POST['email']);
	
	if(isset($_POST['sexo']))	$sexo =  ($_POST['sexo']);
	
	if(isset($_POST['pass'])) $senha =  ($_POST['pass']);
	
	if(isset($_POST['cPass'])) $confSenha =  ($_POST['cPass']);
	

	
	
    $stmt = $con ->prepare ("INSERT INTO tb_usuario (nm_usuario, 
    												 nm_sobrenome,
    												 dt_nasc, 
    												 email_usuario,
    												 sexo_usuario,
    												 senha_usuario) 
    												 
    												 VALUES ('$nome',
    														 '$sobren',
    														 '$dataNasc',
    														 '$email',
    														 '$sexo',
    														 '$pass')");
    

    $stmt ->execute();
     if($senha == $confSenha){
     	 echo "<script>alert('Cadasto efetuado com sucesso, efetue seu login!');window.location.href ='index.html'</script>";
     }else{
     	 echo "<script>alert('Senha incorreta, tente novamente');window.location.href ='cadUsuario.html'</script>";
     }



?>


