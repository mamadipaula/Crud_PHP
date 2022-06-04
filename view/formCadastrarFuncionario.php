<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastro de Funcionario</title>
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
                    <h2 class="heading-section">Cadastro de Funcionario</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <form action="../controller/cadastrarFuncionarioController.php" method="post" class="login-form">

                    <div class="form-group">
                        <label for="cpf" hidden>CPF: </label>
                        <input type="text" name="cpf" id="cpf" class="form-control rounded-left" placeholder="CPF"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nome" hidden>Nome do Funcionario: </label>
                        <input type="text" name="nome" id="nome" class="form-control rounded-left"
                            placeholder="Nome do Funcionario" required>
                    </div>
                    <div class="form-group">
                        <label for="email" hidden>Email: </label>
                        <input type="email" name="email" id="email" class="form-control rounded-left"
                            placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario" hidden>Nome do Usuario: </label>
                        <input type="text" name="usuario" id="usuario" class="form-control rounded-left"
                            placeholder="Nome de Usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" hidden>Senha: </label>
                        <input type="password" name="senha" id="senha" class="form-control rounded-left"
                            placeholder="Senha" required>
                    </div>
                    <div>
                        <select name="perfil" class="btn btn-primary rounded submit p-3 px-5">
                            <option value="1">Administrador</option>
                            <option value="2">Visitante</option>
                        </select>
                    </div>
                    <br>
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