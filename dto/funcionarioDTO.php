<?php

    class funcionarioDTO{
        private $cpf;
        private $nome;
        private $email;
        private $usuario;
        private $senha;
        private $perfil;
        

        
        public function getCpf()
        {
                return $this->cpf;
        }

        
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

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

        
        public function getUsuario()
        {
                return $this->usuario;
        }

        
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

     
        public function getSenha()
        {
                return $this->senha;
        }

        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        
        public function getPerfil()
        {
                return $this->perfil;
        }

       
        public function setPerfil($perfil)
        {
                $this->perfil = $perfil;

                return $this;
        }
    }
?>