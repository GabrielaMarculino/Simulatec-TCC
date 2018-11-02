<?php

	$username = 'leonardes';
	$login = '';
	
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    
	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$sobren = $_POST['sobren'];
	$nasc = $_POST['nasc'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cPass = $_POST['cPass'];
	
	


	$stmt = $con->prepare("UPDATE tb_usuario SET  nm_usuario='$nome', 
												  dt_nasc='$nasc',  
												  email_usuario='$email',  
												  senha_usuario='$pass' 
												  
												  WHERE cd_usuario = $codigo");
			
	if($stmt -> execute())
	{
		echo "<script>alert('Alterado com sucesso!');</script>";
	}
	else
	{
		
		echo "<script>alert('Erro em atualizar os dados!');</script>";
	}


?>