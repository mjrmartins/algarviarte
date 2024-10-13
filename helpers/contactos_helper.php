<?php

function getTextoContactos(){
    $resultado = selectSQLUnico("SELECT texto_contactos FROM contactos WHERE id=1");
    return $resultado["texto_contactos"];
}

?>