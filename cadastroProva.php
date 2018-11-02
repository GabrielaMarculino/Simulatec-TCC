<?php

    $username = 'leonardes';
	$login = '';
	
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    /*$id=2;
    $altern="a";
    
    if(isset($_FILES['foto'])){
        
        $extensao = strtolower(substr($_FILES['foto']['nome'], -4));
        $novo_nome = time().$extensao;
        $diretorio = "../imagemProvas";
        
        move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_nome);
        
        $stmt = $con ->prepare = ("INSERT INTO tb_questoes (id_prova,alternativa_correta,caminho_texto_questao) VALUES ('$id','$altern','$novo_nome')");
        
        var_dump($stmt);
        
        $stmt ->execute();
        echo "<script>alert('Prova cadastrada com sucesso!');window.location.href ='admin.php'</script>";
        */
    
        			$arquivo = $_FILES['foto12'];
        			$ext = pathinfo($arquivo['name']); // nome do arquivo
        			$exensao = $ext['extension'];
        			$exensao = strtolower($extensao);
        			$nome_imagem = 'qweqweqweqwe'.'.'.$extensao; /// novo nome do arquivo
        			$caminho_imagem = $_SERVER['tcc_simulado2'].'/siteEmp/imagemProvas/questoes2018/'.$nome_imagem;
        			move_uploaded_file($arquivo['tmp_name'], $caminho_imagem);
        
        			
                    $_result = $con->prepare("INSERT INTO tb_questoes (cd_questao,nm_questao,arquivo,caminho_questao) values (null,'$extensao','$nome_imagem','$caminho_imagem');");
        			
        			if($_result->execute()){
        			echo "<script>alert('Questões cadastradas com sucesso!');</script>";
        			}else{				
        			echo "<script>alert('Questões não cadastradas!');</script>";
        			}
    
?>