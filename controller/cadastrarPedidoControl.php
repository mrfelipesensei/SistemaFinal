<?php
require_once '../dto/pedidoDTO.php';
require_once '../dao/pedidoDAO.php';

$proteina = $_POST['proteina'];
$quantidade1 = $_POST['qt1'];
$carboidrato = $_POST['carboidrato'];
$quantidade2 = $_POST['qt2'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$horario = $_POST['horario'];


$pedidoDTO = new pedidoDTO();
$pedidoDTO->setProteina($proteina);
$pedidoDTO->setQuantidade1($quantidade1);
$pedidoDTO->setCarboidrato($carboidrato);
$pedidoDTO->setQuantidade2($quantidade2);
$pedidoDTO->setEmail($email);
$pedidoDTO->setEndereco($endereco);
$pedidoDTO->setHorario($horario);

$pedidoDAO = new pedidoDAO();
$ok = $pedidoDAO->cadastrarPedido($pedidoDTO);

if ($ok) {
    echo "<script> alert('Pedido realizado!')
                window.location = '../index.php'
    </script>";
}



?>