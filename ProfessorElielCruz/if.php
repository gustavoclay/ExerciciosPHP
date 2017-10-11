<meta charset="UTF-8">
<form action="if.php" method="GET">
	A <input type="number" name="a">
	B <input type="number" name="b">
	<button type="submit">Enviar</button>
</form>
<?php
	$a = @$_REQUEST["a"];
	$b = @$_REQUEST["b"];
	
	if($a > $b){
		print "$a é maior que $b";
	}elseif($a == $b){
		print "$a é igual $b";
	}else{
		print "$b é maior que $a";
	}
?>