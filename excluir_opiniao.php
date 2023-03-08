<?php
require_once("banco.php");
require_once("tabelas.php");

$id = $_GET['id_vilao'];
excluir_movel($id);

header("Location: sua_opiniao.php");

?>