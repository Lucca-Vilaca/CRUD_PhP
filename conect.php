<?php 
        //ENTRANDO NO DATABASE DO MYSQL PARA ESTABELECER CONEXÃO
    define('HOST', 'LOCALHOST');
    define('USER', 'root');
    define('SENHA', 'root');
    define('DB', 'teste');
    
    $conexao = mysqli_connect(HOST, USER, SENHA, DB) or die('Não Foi possível conectar');

        //pesquisa de tarefas
    $search = '';
    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conexao, $_GET['search']);
    }

    $query = "SELECT * FROM tarefas";
    if (!empty($search)) {
        $query .= " WHERE titulo LIKE '%" . $search . "%'";
    }

    // Executando a consulta usando $conexao
    $result = mysqli_query($conexao, $query);
?>