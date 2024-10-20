<?php
require 'conect.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Tarefa</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" name="titulo" class="form-control" value="<?= $tarefa['titulo']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea name="descricao" class="form-control" required><?= $tarefa['descricao']; ?></textarea>
                        </div>
                        <button type="submit" name="update_tarefa" class="btn btn-primary">Atualizar Tarefa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
