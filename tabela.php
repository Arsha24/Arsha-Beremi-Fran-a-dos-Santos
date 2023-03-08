<?php

function select_vilao() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM anime");
	$sth->execute();
	return $sth->fetchAll();
}

?>
