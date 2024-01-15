<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ingredientes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body style="background-color: #EDE7B1;">
        <div class="container">
            <nav class="navbar navbar-light" style="background-color: #5A3A31;">
                <div class="container d-flex justify-content-center">
                    <a class="nav-link" href="./"> <img class="navbar-brand" src="../../public/img/logo.png"
                            alt="icon" style="width: 50px;"></a>
                </div>
            </nav>

                <div class="container mt-5 d-flex justify-content-around">
                    <a class="btn btn-warning" href="<?= site_url('criarIngrediente') ?>">Criar Igrediente</a>
                    <a class="btn btn-secondary"  href="<?= site_url() ?>">Voltar</a>
                </div>

            <div class="container mt-4 d-flex justify-content-center">
                <div class="">
                    <table class="table table-hover">
                        <div class="d-flex flex-wrap">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th class="d-flex justify-content-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ingredientes as $ingrediente): ?>
                                    <tr>
                                        <td><?= $ingrediente['nome']; ?></td>
                                        <td><?= $ingrediente['quantidade']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?= site_url('editarIngrediente/' . urlencode($ingrediente['id_ing'])) ?>" alt="Editar">Editar</a>
                                            <a class="btn btn-danger" href="<?= site_url('removerIngrediente/' . urlencode($ingrediente['id_ing'])) ?>" alt="Remover">Remover</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </div>    
                    </table>
                </div>
            </div>

            <footer class="footer" style="background-color: #5A3A31;">
                <div class="container">
                    <span class="text-monospace" style="color: #E2F1AF;">Por: Lorenzo Lavratti</span>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
