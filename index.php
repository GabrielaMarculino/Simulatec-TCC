<?php
	session_start();
?>

<div id = "timer"></div>

<script type="text/javascript">
	setInterval(function(){
		var pag = new XMLHttpRequest();
		pag.open("GET","pagina.php",false);
		pag.send(null);
		document.getElementById("timer").innerHTML = pag.timerText;
	},1000);
</script>