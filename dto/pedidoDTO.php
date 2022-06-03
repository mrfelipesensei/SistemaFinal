<?php

    class pedidoDTO{
        private $proteina;
        private $quantidade1;
        private $carboidrato;
        private $quantidade2;
        private $email;
        private $endereco;
        private $horario;

        

        public function getProteina()
        {
                return $this->proteina;
        }

        public function setProteina($proteina)
        {
                $this->proteina = $proteina;

                return $this;
        }

        
        public function getQuantidade1()
        {
                return $this->quantidade1;
        }

        public function setQuantidade1($quantidade1)
        {
                $this->quantidade1 = $quantidade1;

                return $this;
        }

       
        public function getCarboidrato()
        {
                return $this->carboidrato;
        }

        public function setCarboidrato($carboidrato)
        {
                $this->carboidrato = $carboidrato;

                return $this;
        }


        public function getQuantidade2()
        {
                return $this->quantidade2;
        }

        public function setQuantidade2($quantidade2)
        {
                $this->quantidade2 = $quantidade2;

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

        
        public function getEndereco()
        {
                return $this->endereco;
        }

        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        
        public function getHorario()
        {
                return $this->horario;
        }

        public function setHorario($horario)
        {
                $this->horario = $horario;

                return $this;
        }
    }




?>