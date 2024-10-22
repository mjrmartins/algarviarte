<?php

function getTexto1Info(){
    $resultado = selectSQLUnico("SELECT texto1 FROM informacao WHERE id=1");
    return $resultado["texto1"];
}

function getEncomendar(){
    $resultado = selectSQLUnico("SELECT encomendar FROM informacao WHERE id=1");
    return $resultado["encomendar"];
}

function getTextoEncomendar(){
    $resultado = selectSQLUnico("SELECT texto_encomendar FROM informacao WHERE id=1");
    return $resultado["texto_encomendar"];
}

function getPagamento(){
    $resultado = selectSQLUnico("SELECT pagamento FROM informacao WHERE id=1");
    return $resultado["pagamento"];
}

function getTextoPagamento(){
    $resultado = selectSQLUnico("SELECT texto_pagamento FROM informacao WHERE id=1");
    return $resultado["texto_pagamento"];
}

function getEnvio(){
    $resultado = selectSQLUnico("SELECT envio FROM informacao WHERE id=1");
    return $resultado["envio"];
}

function getTextoEnvio(){
    $resultado = selectSQLUnico("SELECT texto_envio FROM informacao WHERE id=1");
    return $resultado["texto_envio"];
}

function getDevolver(){
    $resultado = selectSQLUnico("SELECT devolver FROM informacao WHERE id=1");
    return $resultado["devolver"];
}

function getTextoDevolver(){
    $resultado = selectSQLUnico("SELECT texto_devolver FROM informacao WHERE id=1");
    return $resultado["texto_devolver"];
}

?>