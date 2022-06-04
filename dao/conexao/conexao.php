<?php
    class Conexao{
        function getConexao(){
            $banco = new mysqli("localhost","root","879262","projetophpf");
            return $banco;
            if ($banco -> conect_errno) {
                echo "Erro" + $banco -> error;
            }
        }
    }
?>