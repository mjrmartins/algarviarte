<?php

function getTituloHome(){
    $resultado = selectSQLUnico("SELECT home_title FROM home WHERE id=1");
    return $resultado["home_title"];
}

function getTextHome(){
    $resultado = selectSQLUnico("SELECT primary_text FROM home WHERE id=1");
    return $resultado["primary_text"];
}

?>