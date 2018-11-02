<?php
  	$username = 'leonardes';
	$login = '';
	
   $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
   
   $tempo = time();

   
   $ip = $_SERVER['REMOTE_ADDR'];

   
   $verifica = mysql_query("SELECT * FROM tb_usuario WHERE cd_usuario ='$ip'");

   
   $linhas  = mysql_num_rows($verifica); 

   
   if($linhas == 0)
   { 
      
      $acrescenta = mysql_query("INSERT INTO tb_usuario (cd_usuario, tempo) VALUES ('$ip','$tempo')");
   }
   else
   { 
      $ip = mysql_result($verifica,0,'ip');

      
      $atualiza = mysql_query("UPDATE tb_usuario SET tempo ='$tempo' WHERE cd_usuario='$ip'"); 
   }

   
   mysql_query("DELETE FROM tb_usuario WHERE tempo <'$tempo'".-"40");

   
   $online = mysql_query("SELECT * FROM tb_usuario"); 
   
   $agora = mysql_num_rows($online);
   if($agora==1)
   {
      
      echo "Apenas eu estou on-line";
   }
   else
   {
      
      echo "Temos ".$agora." usuarios on-line.";
   }
?>
