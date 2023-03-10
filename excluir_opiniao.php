<?php
require_once("banco.php");
require_once("tabelas.php");

$id = $_GET['id_prota'];
excluir_protagonista($id);

header("Location: sua_opiniao.php");

?>
