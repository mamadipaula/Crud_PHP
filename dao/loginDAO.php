<?php
    require_once 'conexao/conexao.php';

    class LoginDAO{

        function login($usuario,$senha){

            $bd = new Conexao();
            $conexao = $bd ->getConexao();

            $sql = $conexao -> query("SELECT * FROM usuario
            JOIN perfil
            ON usuario.perfil_idperfil = perfil.idperfil
            WHERE usuario.user = '$usuario' AND usuario.pass = '$senha'");
            $assoc = $sql -> fetch_assoc();
            return $assoc;

            if (!$assoc) {
                echo $conexao -> error;
            }

        }

    }
?>