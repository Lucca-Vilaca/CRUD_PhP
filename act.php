<?php
session_start();
require('conect.php');

//criação de nova tarefa
if (isset($_POST['criar_tarefa'])) {
    $titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

    $sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo', '$descricao')";
    
    if (mysqli_query($conexao, $sql)) {
        $_SESSION['message'] = "Tarefa criada com sucesso!";
    } else {
        $_SESSION['message'] = "Erro ao criar tarefa.";
    }

    // Redirecionar após inserir a tarefa para evitar reenvio do formulário
    header("Location: index.php");
    exit();
}

if (isset($_POST['editar_tarefa'])){
        //carregar todas as tarefas para seleção
    $query = "SELECT id, titulo FROM tarefas";
    $result = mysqli_query($conexao, $query);

    // Verificar se o formulário de edição foi submit
    if (isset($_POST['edit_task'])) {
        $id = mysqli_real_escape_string($conexao, $_POST['task_id']);

        // Carregar os dados da tarefa selecionada
        $task_query = "SELECT * FROM tarefas WHERE id='$id'";
        $task_result = mysqli_query($conexao, $task_query);

        if (mysqli_num_rows($task_result) > 0) {
            $tarefa = mysqli_fetch_assoc($task_result);
        } else {
            $_SESSION['message'] = "Tarefa não encontrada";
            header("Location: editar_tarefa.php");
            exit();
        }
    }

    // Atualizar a tarefa após a edição
    if (isset($_POST['update_task'])) {
        $id = mysqli_real_escape_string($conexao, $_POST['task_id']);
        $titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
        $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

        $update_query = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao' WHERE id='$id'";
        if (mysqli_query($conexao, $update_query)) {
            $_SESSION['message'] = "Tarefa atualizada com sucesso!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = "Erro ao atualizar a tarefa.";
        }
    }
}
?>
