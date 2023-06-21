<?php
require_once "data_request.class.php";

$dataresquest = new DataRequest();

$clientes     = $dataresquest->dadosClientes();
$fornecedores = $dataresquest->dadosFornecedores();
$usuarios     = $dataresquest->dadosUsuarios();

