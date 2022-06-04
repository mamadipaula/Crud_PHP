<?php
    class Conexao{
        function getConexao(){
            $banco = new mysqli("localhost","root","","");
            return $banco;
            if ($banco -> conect_errno) {
                echo "Erro" + $banco -> error;
            }
        }
    }
?>
