<?php

function logIn($user, $pass){
    $usuario_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE user='$user' AND pass='$pass'");
    if(!empty($usuario_encontrado)){
        session_start();
        $_SESSION["usuario"] = $usuario_encontrado;

        date_default_timezone_set("Europe/Lisbon");
        $data_acesso = date("d/m/Y - H:i:s");
        $id = $usuario_encontrado["id"];
        $nome = $usuario_encontrado["nome"];
        iduSQL("UPDATE backoffice SET ultimo_acesso = '$data_acesso' WHERE id='$id'");
        iduSQL("INSERT INTO acessos_backoffice (nome, data_acesso) VALUES ('$nome', '$data_acesso')");

        return true;
    }
    else{
        return false;
    }

}

function verificarLogin(){
    session_start();
    if(!empty($_SESSION["usuario"])){
        return true;
    }
    else{
        return false;
    }
}

?>