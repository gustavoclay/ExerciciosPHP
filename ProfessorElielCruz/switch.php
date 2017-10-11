<meta charset="UTF-8">
<form action="switch.php" method="GET">
	Informe uma data <input type="date" name="data">
	<button type="submit">Enviar</button>
</form>
<?php
	$data = $_REQUEST["data"];
	
	$mes = substr($data,5,2);
	
	switch($mes){
		case 1:
			print "Janeiro";
		break;
		case 9:
			print "Setembro";
		break;
		case 10:
			print "Outubro";
		break;
	}
	
	
?>