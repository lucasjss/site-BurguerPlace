<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hamburgueria</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body style="background-color: #EDE7B1;">
        <div class="container">
            <nav class="navbar navbar-light" style="background-color: #5A3A31;">
                <div class="container d-flex justify-content-center">
                    <a class="nav-link" href="./index.php"> <img class="navbar-brand" src="./img/logo.png" alt="icon" style="width: 50px;"></a>
                </div>
            </nav>

            <div class="container mt-5 d-flex justify-content-around">
            <a class="btn btn-warning mr-3" href="<?= site_url('criarHamburguer') ?>">Crie um Hamburguer</a>
                <a class="btn btn-warning ml-3" href="<?= site_url('ingredientes') ?>">Ingredientes</a>
            </div>

            <div class="container mt-4 d-flex justify-content-center">
                <div class="">
                    <table class="table table-hover">
                        <div class="d-flex flex-wrap">
                            <thead>
                                <tr>
                                    <th class="justify-content-center">Nome</th>
                                    <th class="justify-content-center">valor</th>
                                    <th class="justify-content-center">disponibilidade</th>
                                    <th class="d-flex justify-content-center">actions</th>
                                </tr>
                            </thead>
                        </div>
                        <tbody>
                            <?php foreach ($hamburguers as $hamburguer): ?>
                                <tr>
                                    <td><?= $hamburguer['nome']; ?></td>
                                    <td>R$<?= $hamburguer['valor']; ?></td>
                                    <td><?= $hamburguer['ativo'] ? 'Ativo' : 'Inativo'; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= site_url('editarHamburguer/' . urlencode($hamburguer['id_hamb'])) ?>" alt="Editar">Editar</a>
                                        <a class="btn btn-danger" href="<?= site_url('desativarHamburguer/' . urlencode($hamburguer['id_hamb'])) ?>" alt="Desativar">Desativar</a>
                                        <a class="btn btn-success" href="<?= site_url('reativarHamburguer/' . urlencode($hamburguer['id_hamb'])) ?>" alt="Reativar">Reativar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="footer" style="background-color: #5A3A31;">
                <div class="container">
                    <span class="text-monospace" style="color: #E2F1AF;">Por: Lorenzo Lavratti</span>
                </div>
            </footer>  
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
