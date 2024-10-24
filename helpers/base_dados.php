<?php

$pdo = New PDO("mysql:host=localhost;dbname=algarviarte;charset=utf8mb4;", "root", "");

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