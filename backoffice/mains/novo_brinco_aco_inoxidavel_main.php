<?php

$form = isset($_GET["imagem"]) && isset($_GET["referencia"]);

if($form){
    $imagem = $_GET["imagem"];
    $referencia = $_GET["referencia"];


    iduSQL("INSERT INTO brincos_aco_inoxidavel(imagem, referencia) VALUES ('$imagem', '$referencia')");
    header("Location: brincos_aco_inoxidavel.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            novo brinco aço inoxidável
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <label for="imagem" class="t5">imagem</label>
            <br>
            <input type="text" name="imagem" placeholder="Link da imagem" required="required" autofocus
                style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="close2 mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="referencia" class="t5">referência</label>
            <br>
            <input type="text" name="referencia" required="required" style="width: 100%;" placeholder="Referência "
                autofocus>
            <br><br>
            <input type="submit" value="criar novo" class="close2 mb-3 mt-3">
        </form>
        <a href="brincos_aco_inoxidavel.php"><button class="close2">voltar</button></a>
    </div>
</main>