<?php

require_once '../dao/clienteDAO.php';

$telefone=$_GET['telefone'];

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirCliente($telefone);

header("Location: ../view/formlistarAllCliente.php");

?>