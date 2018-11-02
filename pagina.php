<?php
	session_start();
	$comeco = date('Y-m-d H:i:s');
	$fim = $_SESSION["fim"];

	$primeiro = strtotime($comeco);
	$ultimo = strtotime($fim);

	$diferencaEmSegundos = $primeiro = $ultimo;

	echo gmdate("H:i:s", $diferencaEmSegundos);
?>