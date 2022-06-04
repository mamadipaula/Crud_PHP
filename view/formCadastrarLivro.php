<!doctype html>
<html lang="pt-BR">

<head>
    <title>Cadastro de Livro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Cadastro de Livro</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <form action="../controller/cadastrarLivroController.php" method="post" class="login-form">
                    <div class="form-group">
                        <label for="id" hidden>Código do Livro: </label>
                        <input type="text" name="id" id="id" class="form-control rounded-left"
                            placeholder="Código do Livro" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo" hidden>Título do Livro: </label>
                        <input type="text" name="titulo" id="titulo" class="form-control rounded-left"
                            placeholder="Título do Livro" required>
                    </div>
                    <div class="form-group">
                        <label for="autor" hidden>Nome do Autor: </label>
                        <input type="text" name="autor" id="autor" class="form-control rounded-left"
                            placeholder="Nome do Autor" required>
                    </div>
                    <div class="form-group">
                        <label for="paginas" hidden>Quantidade de Páginas: </label>
                        <input type="text" name="paginas" id="paginas" class="form-control rounded-left"
                            placeholder="Quantidade de Páginas" required>
                    </div>
                    <div class="form-group">
                        <label for="editora" hidden>Nome da Editora: </label>
                        <input type="text" name="editora" id="editora" class="form-control rounded-left"
                            placeholder="Nome da Editora" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" value="Cadastrar" id="submit"
                            class="btn btn-primary rounded submit p-3 px-5">Cadastrar</button>
                    </div>
                </form>

    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>