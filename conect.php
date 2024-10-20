<?php 
    define('HOST', 'LOCALHOST');
    define('USER', 'root');
    define('SENHA', 'root');
    define('DB', 'teste');
    
    $conexao = mysqli_connect(HOST, USER, SENHA, DB) or die('Não Foi possível conectar');

?>