<?php
    //install.php

    //Criar a base de dados que suporta o site
    include 'config.php';

    //Criar a base de dados
    $ligacao = new PDO("mysql:$host", $user, $password);
    $motor = $ligacao->prepare("CREATE DATABASE $base_dados"); //criar base dados com ligação 
    $motor->execute(); //executa a variável motor
    $ligacao = null; //fecha a ligação

    echo '<p>Database criada com sucesso.</p><hr>';

    //Abrir a base de dados para adicionar as tabelas
    $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

    //Tabela "users" - utilizadores do site
    $sql="CREATE TABLE users(
        id_user     INT NOT NULL PRIMARY KEY,
        email       VARCHAR(100)
    )";

    $motor = $ligacao->prepare($sql);
    $motor->execute();

    echo '<p>Tabela "users" criada com sucesso.</p>';

    $ligacao = null;

    echo '<hr>';
    echo '<p>Database - processo de criação completo.</p>';
?>
