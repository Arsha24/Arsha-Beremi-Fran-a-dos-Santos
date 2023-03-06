<?php

function select_linhas() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM evento");
	$sth->execute();
	return $sth->fetchAll();
}

?>