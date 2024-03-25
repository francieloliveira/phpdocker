<?php
// Arquivo: pdo_conexao.php


function db_connect() {
    $host = "mysql"; // use the container name as the hostname
    $db = "posgradphp";
    $user = "franciel";
    $pass = "technix";
    $charset = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $conexao = new PDO($dsn, $user, $pass);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conexao;
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        return false;
    }
}

function db_disconnect($connection) {
    $connection = null;
}
?>