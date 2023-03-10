<?php

function select_vilao() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM vilao");
	$sth->execute();
	return $sth->fetchAll();
}
function select_protagonista() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM protagonista");
	$sth->execute();
	return $sth->fetchAll();
}
function insert_protagonista($id_prota, $nome, $prota) {
	global $conn;
	$sth = $conn->prepare("insert into protagonista ( id_nota, nota, opiniao) values ('$id_nota', '$nota', $opiniao)");
	$sth->execute();
}
function excluir_protagonista($id_prota) {
	global $conn;
	$sth = $conn->prepare("delete from  where id_prota = $id_prota");
	$sth->execute();
}
?>
