
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Hamburguer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body style="background-color: #EDE7B1;">
        <nav class="navbar navbar-light" style="background-color: #5A3A31;">
            <div class="container d-flex justify-content-center">
                <a class="nav-link" href="./index.php"> <img class="navbar-brand" src="./img/logo.png" alt="logo" style="width: 50px;"></a>
            </div>
        </nav>
        
        <div class="container mt-5">
            <h2>Editar Hamburguer</h2>
            <form action="<?= site_url("salvarEdicaoHamburguer/{$hamburguer['id_hamb']}") ?>" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $hamburguer['nome'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" class="form-control" id="valor" name="valor" value="<?= $hamburguer['valor'] ?>" required>
                </div>

                <button type="submit" class="btn btn-info mt-2">Salvar Alterações</button>
                <a class="btn btn-secondary mt-2"  href="<?= site_url() ?>">Voltar</a>
            </form>
        </div>

        <footer class="footer fixed-bottom" style="background-color: #5A3A31;">
            <div class="container">
                <span class="text-monospace" style="color: #E2F1AF;">Lorenzo</span>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
