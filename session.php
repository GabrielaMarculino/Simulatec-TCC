<?php
	mysql_connect('localhost','leonardes','') or die(mysql_error());
	mysql_select_db('Simulado') or die(mysql_error());

		if(isset($_POST['login']) && isset($_POST['senha'])){
		$userEmail = $_POST['login'];
		$userSenha = $_POST['senha'];

		$get = mysql_query("SELECT * FROM tb_usuario WHERE email_usuario = '$userEmail' AND senha_usuario = '$userSenha'");
		$num = mysql_num_rows($get);

		if ($num == 1) {
			while($rows = mysql_fetch_array($get))
			{
				$user = $rows['nivel_usuario'];
				$nome = $rows['nm_usuario'];

				session_start();

				if ($user == 1) 
				{
					$_SESSION['user'] = $nome;
					/*header ('Location:logado.php');*/
					echo '<script type = "text/javascript">window.location ="logado.php"</script> ';

				}else if ($user == 2) 
				{
					$_SESSION['admin'] = $nome;
					/*header ('Location: admin.php');*/
					echo '<script type = "text/javascript">window.location ="admin.php"</script> ';

				}else if ($user == 3) 
				{
					$_SESSION['admin2'] = $nome;
					echo '<script type = "text/javascript">window.location ="admin2.php"</script> ';

				}else
				{
					echo "Dados incorretos, tente novamente!";
					
				}
			}
		}
	}
