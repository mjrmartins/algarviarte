<?php

$pdo = New PDO("mysql:host=sql204.infinityfree.com;dbname=if0_37541991_algarviarte;charset=utf8mb4;", "if0_37541991", "zer0algarviarte");

function selectSQL($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $pdo;
    $solicitacao = $pdo->query($sql);
}

?>