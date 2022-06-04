<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php
        require_once '../dao/livroDao.php';
        $livroDAO = new LivroDAO();
        $livros = $livroDAO -> getAllLivros();
    ?>
    <a href="../index.php">Inicio</a>
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Quantidade de Paginas</th>
            <th scope="col">Editora</th>
            <th scope="col">ALTERAR</th>
            <th scope="col">EXCLUIR</th>    
        </tr>
        <?php
            foreach ($livros as $livro){
                echo "<tr>";
                echo "<td>{$livro['id']}</td>";
                echo "<td>{$livro['titulo']}</td>";
                echo "<td>{$livro['autor']}</td>";
                echo "<td>{$livro['paginas']}</td>";
                echo "<td>{$livro['editora']}</td>";
                echo "<td><a href = 'formAlterarLivro.php?id={$livro['id']}'>Alterar</a></td>";
                echo "<td><a href = '../controller/excluirLivroController.php?id={$livro['id']}' onclick = 'return excluir()'>Excluir</a>";
                echo "</tr>";
                
            }
        ?>
    </table>

    <script>
        function excluir(){
            var ok = confirm('Tem certeza que deseja excluir?')
            if (ok) {
                return true
            } else{
                return false
            }
        }
    </script>
    
</body>
</html>
