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
	<h3>Sua opiniao sobre Jujutsu <a href="trabalho p2.php">(+)</a></h3>
	<?php
	$moveis = select_opiniao();
	echo "<table border=1>\n";
	foreach($opiniao as $opiniao) {
		echo "<tr>\n";
		echo "<td>" . $opiniao['id_vilao'] . "</td>";
		echo "<td>" . $opiniao['nota'] . "</td>";
		echo "<td>" . $opiniao['opiniao'] . "</td>";
		echo "<td>" . $opiniao['nome'] . "</td>";
		echo "<td>" . $opiniao['opiniao'] . "</td>";
		echo "<td><a href=\"excluir_opiniao.php?id_movel=" . $opiniao['id_vilao'] . "\">Excluir</a></td>";
		echo "</tr>\n";
	}		
	echo "</table>\n";
	?>

</body>
</html>