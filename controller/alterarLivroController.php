<?php
    require_once '../dao/livroDAO.php';
    require_once '../dto/livroDTO.php';

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $editora = $_POST['editora'];
    

    $livroDTO = new LivroDTO();
    $livroDTO -> setId($id);
    $livroDTO -> setTitulo($titulo);
    $livroDTO -> setAutor($autor);
    $livroDTO -> setPaginas($paginas);
    $livroDTO -> setEditora($editora);
    

    $livroDAO = new LivroDAO();
    $ok = $livroDAO ->alterarLivro($livroDTO);

    if ($ok) {
        echo "<script> alert('Alterado com sucesso')
                    window.location='../view/allLivros.php'
                </script>";
    } else{
        echo "Não deu bom";
    }

?>