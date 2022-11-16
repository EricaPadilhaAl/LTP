<?php

    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = 'w15d22g01';
    $dbName = 'formulario-erica';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "conexao efetuada com sucesso";
    }
    
?>