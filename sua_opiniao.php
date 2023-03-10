<?php
require_once("banco.php");
require_once("tabelas.php");
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sua opiniao</title>
</head>
<body>
	<h3>Sua resposta <a href="anime.php">(voltar)</a></h3>
	<?php
	$protagonista = select_protagonista();
	echo "<table border=1>\n";
	foreach($protagonista as $protagonista) {
		echo "<tr>\n";
		echo "<td>" . $protagonista['id_prota'] . "</td>";
		echo "<td>" . $protagonista['nome'] . "</td>";
		echo "<td><a href=\"excluir_opiniao.php?id_vilao=" . $protagonista['nome'] . "\">Excluir</a></td>";
		echo "</tr>\n";
	}		
	echo "</table>\n";
	?>

</body>
</html>
?>
