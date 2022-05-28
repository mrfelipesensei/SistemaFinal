<?php

    class ClienteDTO{
        private $nome;
        private $telefone;
        private $email;
        private $sexo;
        private $datanasc;

  

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

    
        public function getTelefone()
        {
                return $this->telefone;
        }

        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

       
        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        
        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }

        
        public function getDatanasc()
        {
                return $this->datanasc;
        }

        public function setDatanasc($datanasc)
        {
                $this->datanasc = $datanasc;

                return $this;
        }
    }



?>