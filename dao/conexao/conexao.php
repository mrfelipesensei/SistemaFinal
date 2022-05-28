<?php

    class Conexao{

        function getConexao(){
            $banco = new mysqli("localhost","root","","projetophp");
            return $banco;

            if ($banco->connect_error) {
                echo "Erro" + $banco->error;
            }
        }



    }



?>