<?php
/* GERAL */
function getTodosBrincos(){
    $resultado = selectSQL("SELECT * FROM tipo_brincos");
    return $resultado;
}

function getDropBrincos(){
    $resultado = selectSQL("SELECT id, titulo, pagina FROM tipo_brincos ORDER BY titulo ASC");
    return $resultado;
}

function getTituloBrincos($id){
    $resultado = selectSQLUnico("SELECT titulo FROM tipo_brincos WHERE id=$id");
    return $resultado["titulo"];
}

function getTextoBrincos($id){
    $resultado = selectSQLUnico("SELECT texto FROM tipo_brincos WHERE id=$id");
    return $resultado["texto"];
}

function getTextoAbreviadoBrincos($id){
    $resultado = substr(getTextoBrincos($id), 0, 150) . "...";
    return $resultado;
}


/* AÇO INOXIDÁVEL */
function getTodosBrincosAI(){
    $resultado = selectSQL("SELECT * FROM brincos_aco_inoxidavel");
    return $resultado;
}

function getImagensBrincosAI(){
    $resultado = selectSQL("SELECT imagem FROM brincos_aco_inoxidavel");
    return $resultado;
}

function getImagemBrincosAI($id){
    $resultado = selectSQLUnico("SELECT imagem FROM brincos_aco_inoxidavel WHERE id=$id");
    return $resultado["imagem"];
}

function getRefBrincosAI($id){
    $resultado = selectSQLUnico("SELECT referencia FROM brincos_aco_inoxidavel WHERE id=$id");
    return $resultado["referencia"];
}

function getRefsBrincosAI(){
    $resultado = selectSQL("SELECT referencia FROM brincos_aco_inoxidavel");
    return $resultado;
}

function getIdsAI(){
    $resultado = selectSQL("SELECT id FROM brincos_aco_inoxidavel");
    return $resultado;
}

/* CURTOS */
function getTodosBrincosCurtos(){
    $resultado = selectSQL("SELECT * FROM brincos_curtos");
    return $resultado;
}

function getImagensBrincosCurtos(){
    $resultado = selectSQL("SELECT imagem FROM brincos_curtos");
    return $resultado;
}

function getImagemBrincosCurtos($id){
    $resultado = selectSQLUnico("SELECT imagem FROM brincos_curtos WHERE id=$id");
    return $resultado["imagem"];
}

function getRefBrincosCurtos($id){
    $resultado = selectSQLUnico("SELECT referencia FROM brincos_curtos WHERE id=$id");
    return $resultado["referencia"];
}

function getRefsBrincosCurtos(){
    $resultado = selectSQL("SELECT referencia FROM brincos_curtos");
    return $resultado;
}


/* PENDENTES */
function getTodosBrincosPendentes(){
    $resultado = selectSQL("SELECT * FROM brincos_pendentes");
    return $resultado;
}

function getImagensBrincosPendentes(){
    $resultado = selectSQL("SELECT imagem FROM brincos_pendentes");
    return $resultado;
}

function getImagemBrincosPendentes($id){
    $resultado = selectSQLUnico("SELECT imagem FROM brincos_pendentes WHERE id=$id");
    return $resultado["imagem"];
}

function getRefBrincosPendentes($id){
    $resultado = selectSQLUnico("SELECT referencia FROM brincos_pendentes WHERE id=$id");
    return $resultado["referencia"];
}

function getRefsBrincosPendentes(){
    $resultado = selectSQL("SELECT referencia FROM brincos_pendentes");
    return $resultado;
}

?>