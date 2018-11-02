<?php
    session_start();
    if (!isset($_SESSION['admin']));
    
    $codigo = $_POST['codigo'];
    // var_dump($codigo);
    
    $username = 'leonardes';
	$login = '';
    $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    
    $rs = $con->query("DELETE FROM tb_usuario WHERE cd_usuario = '$codigo'");
    
    $rs->execute();
    
    header("Location crudAdmin.php");
?>