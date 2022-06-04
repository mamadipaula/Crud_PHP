<?php

    class LivroDTO{
        private $id;
        private $titulo;
        private $autor;
        private $paginas;
        private $editora;
        

        

      
        public function getId()
        {
                return $this->id;
        }

        
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        
        public function getTitulo()
        {
                return $this->titulo;
        }

        
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

       
        public function getAutor()
        {
                return $this->autor;
        }

       
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

      
        public function getPaginas()
        {
                return $this->paginas;
        }

         
        public function setPaginas($paginas)
        {
                $this->paginas = $paginas;

                return $this;
        }

        
        public function getEditora()
        {
                return $this->editora;
        }

     
        public function setEditora($editora)
        {
                $this->editora = $editora;

                return $this;
        }

       
       
    }
?>