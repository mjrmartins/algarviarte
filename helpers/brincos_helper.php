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


/* MOLA */
function getTodosBrincosMola(){
    $resultado = selectSQL("SELECT * FROM brincos_de_mola");
    return $resultado;
}

function getImagensBrincosMola(){
    $resultado = selectSQL("SELECT imagem FROM brincos_de_mola");
    return $resultado;
}

function getImagemBrincosMola($id){
    $resultado = selectSQLUnico("SELECT imagem FROM brincos_de_mola WHERE id=$id");
    return $resultado["imagem"];
}

function getRefBrincosMola($id){
    $resultado = selectSQLUnico("SELECT referencia FROM brincos_de_mola WHERE id=$id");
    return $resultado["referencia"];
}

function getRefsBrincosMola(){
    $resultado = selectSQL("SELECT referencia FROM brincos_de_mola");
    return $resultado;
}

function getIdsMola(){
    $resultado = selectSQL("SELECT id FROM brincos_de_mola");
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

/* DESTAQUES */
function getTodosBrincosDestaques(){
    $resultado = selectSQL("SELECT * FROM brincos_destaques");
    return $resultado;
}

function getImagensBrincosDestaques(){
    $resultado = selectSQL("SELECT imagem FROM brincos_destaques");
    return $resultado;
}

function getImagemBrincosDestaques($id){
    $resultado = selectSQLUnico("SELECT imagem FROM brincos_destaques WHERE id=$id");
    return $resultado["imagem"];
}

function getRefBrincosDestaques($id){
    $resultado = selectSQLUnico("SELECT referencia FROM brincos_destaques WHERE id=$id");
    return $resultado["referencia"];
}

function getRefsBrincosDestaques(){
    $resultado = selectSQL("SELECT referencia FROM brincos_destaques");
    return $resultado;
}

?>