<?php

$form = isset($_GET["editarTexto"]);

if($form){
    $tipo = $_GET["editarTexto"];
}

<<<<<<< HEAD
$form2 = isset($_GET["textoMola"]) && isset($_GET["textoCurtos"]) && isset($_GET["textoPendentes"]) && isset($_GET["textoDestaques"]) && isset($_GET["editarTexto"]);

if($form2){
    $tipoBrinco = $_GET["editarTexto"];
    $textoMola = $_GET["textoMola"];
    $textoCurtos = $_GET["textoCurtos"];
    $textoPendentes = $_GET["textoPendentes"];
    $textoDestaques = $_GET["textoDestaques"];

    iduSQL("UPDATE tipo_brincos SET texto='$textoDestaques' WHERE id='4'");
    iduSQL("UPDATE tipo_brincos SET texto='$textoMola' WHERE id='3'");
=======
$form2 = isset($_GET["textoAco"]) && isset($_GET["textoCurtos"]) && isset($_GET["textoPendentes"]) &&isset($_GET["editarTexto"]);

if($form2){
    $tipoBrinco = $_GET["editarTexto"];
    $textoAco = $_GET["textoAco"];
    $textoCurtos = $_GET["textoCurtos"];
    $textoPendentes = $_GET["textoPendentes"];

    iduSQL("UPDATE tipo_brincos SET texto='$textoAco' WHERE id='3'");
>>>>>>> fa2c28382def5b9b8c3e0e39e66c8b3a2603b3b0
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
<<<<<<< HEAD
            <label for="textoMola" class="t5">texto dos brincos de mola</label>
            <br>
            <textarea name="textoMola" id="editor1" autofocus rows="8"
=======
            <label for="textoAco" class="t5">texto dos brincos de aço inoxidável</label>
            <br>
            <textarea name="textoAco" id="editor1" autofocus rows="8"
>>>>>>> fa2c28382def5b9b8c3e0e39e66c8b3a2603b3b0
                style="width: 100%;"><?= getTextoBrincos(3); ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <br><br><br>
<<<<<<< HEAD

=======
            
>>>>>>> fa2c28382def5b9b8c3e0e39e66c8b3a2603b3b0
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
<<<<<<< HEAD
            <br><br><br>

            <label for="textoDestaques" class="t5">texto dos brincos em destaque</label>
            <br>
            <textarea name="textoDestaques" id="editor4" autofocus rows="8"
                style="width: 100%;"><?= getTextoBrincos(4); ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor4'))
                .catch(error => {
                    console.error(error);
                });
            </script>
=======
>>>>>>> fa2c28382def5b9b8c3e0e39e66c8b3a2603b3b0
            <br>

            <input type="submit" value="EDITAR" class="editar mb-3 mt-3">
        </form>
        <a href="brincos_<?= $tipo; ?>"><button class="close2">voltar</button></a>
    </div>
</main>