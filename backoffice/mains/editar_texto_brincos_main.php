<?php

$form = isset($_GET["editarTexto"]);

if($form){
    $tipo = $_GET["editarTexto"];
}

$form2 = isset($_GET["textoAco"]) && isset($_GET["textoCurtos"]) && isset($_GET["textoPendentes"]) &&isset($_GET["editarTexto"]);

if($form2){
    $tipoBrinco = $_GET["editarTexto"];
    $textoAco = $_GET["textoAco"];
    $textoCurtos = $_GET["textoCurtos"];
    $textoPendentes = $_GET["textoPendentes"];

    iduSQL("UPDATE tipo_brincos SET texto='$textoAco' WHERE id='3'");
    iduSQL("UPDATE tipo_brincos SET texto='$textoCurtos' WHERE id='2'");
    iduSQL("UPDATE tipo_brincos SET texto='$textoPendentes' WHERE id='1'");

    $pagina = "brincos_" . $tipoBrinco;
    header("Location:" . $pagina);
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            texto dos tipos de brincos
        </div>
    </div>

    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <input type="hidden" name="editarTexto" value="<?= $tipo; ?>">
            <label for="textoAco" class="t5">texto dos brincos de aço inoxidável</label>
            <br>
            <textarea name="textoAco" id="editor1" autofocus rows="8"
                style="width: 100%;"><?= getTextoBrincos(3); ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <br><br><br>
            
            <label for="textoCurtos" class="t5">texto dos brincos curtos</label>
            <br>
            <textarea name="textoCurtos" id="editor2" autofocus rows="8"
                style="width: 100%;"><?= getTextoBrincos(2); ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor2'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <br><br><br>

            <label for="textoPendentes" class="t5">texto dos brincos pendentes</label>
            <br>
            <textarea name="textoPendentes" id="editor3" autofocus rows="8"
                style="width: 100%;"><?= getTextoBrincos(1); ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor3'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <br>

            <input type="submit" value="EDITAR" class="editar mb-3 mt-3">
        </form>
        <a href="brincos_<?= $tipo; ?>"><button class="close2">voltar</button></a>
    </div>
</main>