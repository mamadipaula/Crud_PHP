<?php
    require_once 'conexao/conexao.php';

    class funcionarioDAO{

        function cadastrarFuncionario(funcionarioDTO $funcionarioDTO){
            try {
            $cpf = $funcionarioDTO-> getCpf();
            $nome = $funcionarioDTO-> getNome();
            $email = $funcionarioDTO-> getEmail();
            $usuario = $funcionarioDTO-> getUsuario();
            $senha = $funcionarioDTO-> getSenha();
            $perfil = $funcionarioDTO-> getPerfil();

            $bd = new Conexao();
            $conexao = $bd-> getConexao();

            $sql1 = $conexao-> prepare("INSERT INTO usuario(user,pass,perfil_idperfil) VALUES (?,?,?);");
            $sql1-> bind_param('ssi',$usuario,$senha,$perfil);
            $sql1-> execute();

            $ultimoID = $conexao-> insert_id;

            $sql2 = $conexao-> prepare("INSERT INTO funcionario VALUES (?,?,?,?)");
            $sql2-> bind_param('sssi',$cpf,$nome,$email,$ultimoID);
            $return = $sql2->execute();
            return $return;

            } catch (mysqli_sql_exception $e) {
                $erro = $e-> getMessage();
                echo $erro;
            }
            

        }
        
    }
?>