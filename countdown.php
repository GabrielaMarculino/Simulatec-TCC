<?php
	session_start();
	$bd = mysqli_connect("localhost","leonardes","");
	mysqli_select_bd($bd, "Simulado");
	$duracao = "";
	$rs = mysqli_query($bd, "SELECT * FROM tb_simulado");

	while($row = mysqli_fetch_array($rs)){
		$duracao = $row["hr_simulado_completo"];
	}

	$_SESSION["hr_simulado_completo"] = $duracao;
	$_SESSION["start_time"] = date("Y-m-d H: i: s");

	$fim = $fim = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["hr_simulado_completo"].'minutes',($_SESSION["start_time"])));

	$_SESSION["fim"] = $fim;

?>
<script type="text/javascript"> window.location = "provacompleta.php"</script>