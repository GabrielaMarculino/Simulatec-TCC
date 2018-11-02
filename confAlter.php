	<?php
	session_start();
    if (!isset($_SESSION['admin']));
    
    $codigo = $_POST['codigo'];
  
	
	$nome = $_POST["nome"]; 
	$sobren = $_POST["sobren"]; 
	$nasc = $_POST["dtnasc"]; 
	$sexo = $_POST["sexo"];
	$telefone = $_POST["tel"];
	/*$cpf = $_POST["cpf"],*/
	$cep = $_POST["cep"];
	$rua = $_POST["rua"];
	$num = $_POST["num"];
	$bairro = $_POST["bairro"];
	$email = $_POST["email"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"]; 
	$pass = $_POST["pass"];
	$cPass = $_POST["cPass"];
	
	
	$username = 'leonardes';
	$login = '';
	
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
   
   
	$stmt = $con->prepare("UPDATE tb_usuario SET nm_usuario = '$nome',
	nm_sobrenome = '$sobren', 
	dt_nasc = '$nasc', 
	sexo_usuario = '$sexo', 
	tel_usuario = '$telefone', 
	cep_adm = '$cep', 
	rua_adm = '$rua', 
	num_adm = '$num', 
	bairro_adm = '$bairro', 
	email_usuario = '$email', 
	cidade_adm = '$cidade', 
	sg_adm = '$estado', 
	senha_usuario = '$pass' WHERE cd_usuario = '$codigo'");
	
    
    $stmt->execute();
    
    header('location:crudAdmin.php');
    
    /*if($stmt -> execute())
	{
		echo "<script>alert('ok!');window.location.href ='pesquisaAdmin.php'</script>";
	}
	else
	{
		
		echo "<script>alert('Erro em atualizar os dados!');window.location.href ='alterAdmin.php'</script>";
	}*/
	

      
	?>