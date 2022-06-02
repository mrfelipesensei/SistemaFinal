<?php

    require_once '../dao/clienteDAO.php';
    require_once '../dto/clienteDTO.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $datanasc = date($_POST['datanasc']);

    $clienteDTO = new ClienteDTO();
    $clienteDTO->setNome($nome);
    $clienteDTO->setTelefone($telefone);
    $clienteDTO->setEmail($email);
    $clienteDTO->setSexo($sexo);
    $clienteDTO->setDatanasc($datanasc);

    $clienteDAO = new ClienteDAO();
    $ok = $clienteDAO->alterarCliente($clienteDTO);

    if ($ok) {
        echo "<script> alert('Alterado com sucesso') 
                    window.location = '../view/formListarAllCliente.php'
        </script>";
    } else {
        echo "NOPS";
    }




?>