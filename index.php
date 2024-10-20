<?php
require 'conect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabula - Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    include('nav.php');
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Tarefas
                            <a class="btn btn-primary float-end" href="criar_tarefa.php">Adicionar tarefa</a>
                        </h4>
                        <form method="GET" action="index.php" class="d-flex mt-2">
                            <input type="text" name="search" class="form-control me-2" placeholder="Pesquisar por título">
                            <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Descrição</th> 
                                </tr>
                                <tr>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Teste</td>
                                    <td>Apenas Testando</td>
                                    <td>
                                        <a href="editar_tarefa.php" class="btn btn-success btn-sm">Editar</a>
                                        <form action="" method="POST" class="d-inline">
                                            <button type="submit" name="deletar_tarefas" value="1" class="btn btn-danger btn-sm">Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>