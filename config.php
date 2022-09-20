<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'formulario';

    //$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword);
    //mysqli_select_db($dbName, $conexao);

    //if($conexao->connection_aborted)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

    $conexao = new MySQLi($dbHost, $dbUsername, $dbPassword, $dbName, 3306);

?>