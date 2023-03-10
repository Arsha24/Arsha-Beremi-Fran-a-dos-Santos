<?php

require_once("banco.php");
require_once("tabelas.php");

// $_POST é variável super global que está disponível em cada script e 
// permite recuperar as informações recebidas por POST (enviadas por form com method POST

$id_nota = $_POST['nota'];
$nota = $_POST['nota'];
$opiniao = $_POST['opiniao'];

insert_movel($nome_movel, $descricao, $id_linha, $id_modelo, $id_cor);

header("Location: sua_opiniao.php");