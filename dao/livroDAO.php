<?php
    require_once '../dto/livroDTO.php';
    require_once 'conexao/conexao.php';

    class LivroDAO{

        function cadastrarLivro(LivroDTO $livroDTO){
            $id = $livroDTO->getId();
            $titulo = $livroDTO->getTitulo();
            $autor = $livroDTO->getAutor();
            $paginas = $livroDTO->getPaginas();
            $editora = $livroDTO->getEditora();
            

            //criando cominicação com o BD

            $banco = new mysqli('localhost','root','879262','projetophpf');
            $sql = $banco->query("INSERT INTO livro value ('$id','$titulo','$autor','$paginas','$editora')");
            return $sql;
            if (!$sql) {
                $msg = $banco -> error;
                echo $msg;
            }
        }

        function getAllLivros(){
            $banco = new Conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("SELECT * FROM livro ORDER BY titulo ");
            return $sql;
            if (!$sql) {
                $msg = $conexao -> error;
                return $msg;
            }

        }

        function getLivroById($id){
            $banco = new Conexao();
            $conexao = $banco -> getConexao();
            $sql = $conexao -> query("SELECT * FROM livro WHERE id = '$id'");
            $final = $sql -> fetch_assoc();

            if (!$final) {
                echo $conexao -> error;
            } else{
                return $final;
            }
        }

        function alterarLivro(LivroDTO $livroDTO){
            $id = $livroDTO -> getId();
            $titulo = $livroDTO -> getTitulo();
            $autor = $livroDTO -> getAutor();
            $paginas = $livroDTO -> getPaginas();
            $editora = $livroDTO -> getEditora();
            

            $bd = new Conexao();
            $conexao = $bd -> getConexao();
            $sql = $conexao -> query("UPDATE livro SET id = '$id', titulo ='$titulo', autor ='$autor', paginas ='$paginas', editora ='$editora' WHERE id ='$id' ");
            
            if (!$sql) {
                echo $conexao->error;
            } else{
                return $sql;
            }
        }

        function excluirLivro($id){
            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("DELETE FROM livro WHERE id ='$id'");

            if (!$sql) {
                echo $conexao -> error;
            } else {
                return $sql;
            }
        }
    }
?>