<?php
    require_once '../dto/livroDTO.php';
    require_once '../dao/livroDAO.php';

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $editora = $_POST['editora'];
    

    echo $id;
    echo $titulo;
    echo $autor;
    echo $paginas;
    echo $editora;
    

    $livroDTO = new LivroDTO();
    $livroDTO -> setId($id);
    $livroDTO -> setTitulo($titulo);
    $livroDTO -> setAutor($autor);
    $livroDTO -> setPaginas($paginas);
    $livroDTO -> setEditora($editora);
    

    $livroDAO = new LivroDao();
    $ok = $livroDAO -> cadastrarLivro($livroDTO);

    if($ok) {
        echo "<script> alert('Cadastrado com sucesso')
                window.location = '../view/allLivros.php'
                </script>";
    }

?>