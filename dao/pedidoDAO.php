<?php
require_once '../dto/pedidoDTO.php';
require_once 'conexao/conexao.php';

    class pedidoDAO{


        function cadastrarPedido(pedidoDTO $pedidoDTO){
            $proteina = $pedidoDTO->getProteina();
            $quantidade1 = $pedidoDTO->getQuantidade1();
            $carboidrato = $pedidoDTO->getCarboidrato();
            $quantidade2 = $pedidoDTO->getQuantidade2();
            $email = $pedidoDTO->getEmail();
            $endereco = $pedidoDTO->getEndereco();
            $horario = $pedidoDTO->getHorario();

            $banco = new mysqli("localhost","root","","projetophp");
            $sql = $banco->query("insert into pedido values ('$proteina','$quantidade1','$carboidrato','$quantidade2','$email','$endereco','$horario');");

            if (!$sql) {
                $msg = $banco->error;
                echo $msg;
            }
            return $sql;

    
            
        }

        function getAllPedido(){
            $banco = new Conexao();
            $conexao = $banco->getConexao();

            $sql = $conexao->query("select * from pedido");
            return $sql;

            if (!$sql) {
                $msg = $conexao->error;
                return $msg;
            }
        }
        
    }



?>