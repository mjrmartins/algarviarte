<?php

function getFacebook(){
    $resultado = selectSQLUnico("SELECT facebook FROM redes WHERE id=1");
    return $resultado["facebook"];
}

function getInstagram(){
    $resultado = selectSQLUnico("SELECT instagram FROM redes WHERE id=1");
    return $resultado["instagram"];
}

?>