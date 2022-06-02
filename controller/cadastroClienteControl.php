<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$perfil = $_POST['perfil'];
$sexo = $_POST['sexo'];
$datanasc = date($_POST['datanasc']);

echo $usuario;
echo $perfil;

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setTelefone($telefone);
$clienteDTO->setEmail($email);
$clienteDTO->setUsuario($usuario);
$clienteDTO->setSenha($senha);
$clienteDTO->setPerfil($perfil);
$clienteDTO->setSexo($sexo);
$clienteDTO->setDatanasc($datanasc);


$clienteDAO = new ClienteDAO();
$ok = $clienteDAO->cadastrarCliente($clienteDTO);

if($ok){
    echo "<script>alert('Cadastrado realizado')
                window.location = '../index.php'
    </script>";
}

?>