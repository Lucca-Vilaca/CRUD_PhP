<?php
    session_start();
    require('conect.php');

    if(isset($_POST['criar_tarefa'])){
        $titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
        $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

        $sql = "INSERT INTO tabula (titulo, descricao) VALUES ('$titulo', '$descricao')";
        echo $sql;exit;
        mysqli_query($conexao, $sql);

    }
?>