<?php

require_once '../dao/funcionarioDAO.php';
require_once '../dto/funcionarioDTO.php';


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$perfil = $_POST['perfil'];
$sexo = $_POST['sexo'];
$datanasc = date($_POST['datanasc']);


$funcionarioDTO = new funcionarioDTO();
$funcionarioDTO->setNome($nome);
$funcionarioDTO->setTelefone($telefone);
$funcionarioDTO->setEmail($email);
$funcionarioDTO->setUsuario($usuario);
$funcionarioDTO->setSenha($senha);
$funcionarioDTO->setPerfil($perfil);
$funcionarioDTO->setSexo($sexo);
$funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$ok = $funcionarioDAO->cadastrarFuncionario($funcionarioDTO);

if ($ok) {
    echo "<script> alert('Funcionário cadastrado com sucesso')
                window.location='../index.php'
    </script>";
} else {
    echo "Não deu";
}

?>