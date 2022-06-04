<?php
    require_once '../dto/funcionarioDTO.php';
    require_once '../dao/funcionarioDAO.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $perfil = $_POST['perfil'];

    $funcionarioDTO = new funcionarioDTO();
    $funcionarioDTO-> setCpf($cpf);
    $funcionarioDTO-> setNome($nome);
    $funcionarioDTO-> setEmail($email);
    $funcionarioDTO-> setUsuario($usuario);
    $funcionarioDTO-> setSenha($senha);
    $funcionarioDTO-> setPerfil($perfil);

    $funcionarioDAO = new funcionarioDAO();
    $ok = $funcionarioDAO-> cadastrarFuncionario($funcionarioDTO);

    if ($ok) {
        echo "<script> alert('Cadastro efetuado com sucesso!')
                     window.location='../index.php'
            </script>";
        
    } else{
        echo "Não deu bom";
    }
?>