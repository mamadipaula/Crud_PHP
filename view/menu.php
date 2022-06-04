<?php
    $perfil = $_SESSION['perfil'];

    switch ($perfil) {
        case 'Administrador':
            echo "<a href='view/formCadastrarLivro.php'>Cadastrar Livro</a>";
            echo "<a href='view/allLivros.php'>Listar Livro</a>";
            echo "<a href='view/formCadastrarFuncionario.php'>Cadastrar Funcionario</a>";
            break;
        
        case 'Funcionario':
            echo "<a href='view/formCadastrarLivro.php'>Cadastrar Livro</a>";
            echo "<a href='view/allLivros.php'>Listar Livro</a>";
            break;
    }
?>