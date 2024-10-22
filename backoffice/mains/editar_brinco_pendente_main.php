<?php

$form = isset($_GET["editar"]);

if($form){
    $id = $_GET["editar"];
}
else{
    header("Location: brincos_pendentes.php");
    exit();
}

$brinco = selectSQLUnico("SELECT * FROM brincos_pendentes WHERE id=$id");

$form2 = isset($_GET["imagem"]) && isset($_GET["referencia"]);

if($form2){
    $imagem = $_GET["imagem"];
    $referencia = $_GET["referencia"];

    iduSQL("UPDATE brincos_pendentes SET imagem='$imagem', referencia='$referencia' WHERE id='$id'");
    header("Location: brincos_pendentes.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            editar brinco pendente
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <input type="hidden" name="editar" value="<?= $id; ?>">
            <label for="imagem" class="t5">imagem</label>
            <br>
            <input type="text" name="imagem" value="<?= $brinco["imagem"]; ?>" required="required" style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="close2 mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="referencia" class="t5">referência</label>
            <br>
            <input type="text" name="referencia" required="required" style="width: 100%;"
                value="<?= $brinco["referencia"]; ?>">
            <br><br>
            <input type="submit" value="editar" class="editar mb-3 mt-3">
        </form>
        <a href="brincos_pendentes.php"><button class="close2">voltar</button></a>
    </div>
</main>