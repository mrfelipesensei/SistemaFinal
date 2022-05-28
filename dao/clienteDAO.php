<?php
    require_once '../dto/clienteDTO.php';
    require_once 'conexao/conexao.php';

    class ClienteDAO{


        function cadastrarCliente(ClienteDTO $clienteDTO){
            $nome = $clienteDTO->getNome();
            $telefone = $clienteDTO->getTelefone();
            $email = $clienteDTO->getEmail();
            $sexo = $clienteDTO->getSexo();
            $datanasc = $clienteDTO->getDatanasc();

            //comunicação com o Banco de Dados

            $banco = new mysqli("localhost","root","","projetophp");
            if ($banco->connect_error) {
                echo "erro";
            }

            $sql = $banco->query("insert into cliente values ('$nome','$telefone','$email','$sexo','$datanasc');");

            return $sql;

            if (!$sql) {
                $msg = $banco->error;
                echo $msg;
            }
        }


        function getAllCliente(){
            $banco = new Conexao();
            $conexao = $banco->getConexao();

            $sql = $conexao->query("select * from cliente");
            return $sql;

            if (!$sql) {
                $msg = $conexao->error;
                return $msg;
            }
        }


    }




?>