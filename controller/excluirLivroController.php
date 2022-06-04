<?php
    require_once '../dao/livroDAO.php';
    $id = $_GET['id'];

    $livroDAO = new LivroDAO();
    $livroDAO ->excluirLivro($id);

    header("Location: ../view/allLivros.php");
?>