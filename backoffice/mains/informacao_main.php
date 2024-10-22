<?php

$informacao = selectSQLUnico("SELECT * FROM informacao");

$form = isset($_GET["texto1"]) && isset($_GET["encomendar"]) && isset($_GET["texto_encomendar"]) && isset($_GET["pagamento"]) && isset($_GET["texto_pagamento"]) && isset($_GET["envio"]) && isset($_GET["texto_envio"]) && isset($_GET["devolver"]) && isset($_GET["texto_devolver"]);

if($form){
    $texto1 = $_GET["texto1"];
    $encomendar = $_GET["encomendar"];
    $textoEncomendar = $_GET["texto_encomendar"];
    $pagamento = $_GET["pagamento"];
    $textoPagamento = $_GET["texto_pagamento"];
    $envio = $_GET["envio"];
    $textoEnvio = $_GET["texto_envio"];
    $devolver = $_GET["devolver"];
    $textoDevolver = $_GET["texto_devolver"];

    iduSQL("UPDATE informacao SET texto1='$texto1', encomendar='$encomendar', texto_encomendar='$textoEncomendar', pagamento='$pagamento', texto_pagamento='$textoPagamento', envio='$envio', texto_envio='$textoEnvio', devolver='$devolver', texto_devolver='$textoDevolver'");
    header("Location: informacao.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t4 mx-auto text-center mt-3">
            informação
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <label for="texto1" class="t5">texto inicial da página informação</label>
            <br>
            <textarea name="texto1" id="editor" autofocus rows="8"
                style="width: 100%;"><?= $informacao["texto1"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
            </script>

            <br><br><br>
            <label for="encomendar" class="t5">título para encomendar</label>
            <br>
            <input type="text" name="encomendar" required="required" style="width: 100%;"
                value="<?= $informacao["encomendar"] ?>">
            <br><br><br>
            <label for="texto_encomendar" class="t5">texto para encomendar</label>
            <br>
            <textarea name="texto_encomendar" id="editor1" rows="8"
                style="width: 100%;"><?= $informacao["texto_encomendar"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .catch(error => {
                    console.error(error);
                });
            </script>

            <br><br><br>
            <label for="pagamento" class="t5">título para pagamento</label>
            <br>
            <input type="text" name="pagamento" required="required" style="width: 100%;"
                value="<?= $informacao["pagamento"] ?>">
            <br><br><br>
            <label for="texto_pagamento" class="t5">texto para pagamento</label>
            <br>
            <textarea name="texto_pagamento" id="editor2" rows="8"
                style="width: 100%;"><?= $informacao["texto_pagamento"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor2'))
                .catch(error => {
                    console.error(error);
                });
            </script>

            <br><br><br>
            <label for="envio" class="t5">título para envio</label>
            <br>
            <input type="text" name="envio" required="required" style="width: 100%;"
                value="<?= $informacao["envio"] ?>">
            <br><br><br>
            <label for="texto_envio" class="t5">texto para envio</label>
            <br>
            <textarea name="texto_envio" id="editor3" rows="8"
                style="width: 100%;"><?= $informacao["texto_envio"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor3'))
                .catch(error => {
                    console.error(error);
                });
            </script>

            <br><br><br>
            <label for="devolver" class="t5">título para devolver</label>
            <br>
            <input type="text" name="devolver" required="required" style="width: 100%;"
                value="<?= $informacao["devolver"] ?>">
            <br><br><br>
            <label for="texto_devolver" class="t5">texto para devolver</label>
            <br>
            <textarea name="texto_devolver" id="editor4" rows="8"
                style="width: 100%;"><?= $informacao["texto_devolver"] ?></textarea>

            <script>
            ClassicEditor
                .create(document.querySelector('#editor4'))
                .catch(error => {
                    console.error(error);
                });
            </script>
            <input type="submit" value="EDITAR" class="close mb-3 mt-3">
        </form>
    </div>
</main>